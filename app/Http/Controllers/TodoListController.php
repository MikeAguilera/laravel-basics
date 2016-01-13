<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

use App\TodoList;

class TodoListController extends Controller
{
    //public function __construct()
    //{
   //     $this->beforeFilter('csrf', array('on' => 'post'));
    //}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo_lists = TodoList::all();
        return view('todos.index')->with("todo_lists", $todo_lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //define rules
        //$rules = array(
        //        'name' => array('required', 'unique:todo_lists')
        //    );

        // pass input to validator
        //$validator = Validator::make(Input::all(), $rules);

        // test if input fails
       // if ($validator->fails()) {
       //     return Redirect::route('todos.create')->withErrors($validator)->withInput();
        //}

        $this->validate($request,[
            'name' => 'required|unique:posts|max:255',
            ]);
        // pass input to validator
        $validator = Validator::make(Input::all(), $this);

        // test if input fails
       if ($validator->fails()) {
        $message = $validator->messages();
        return $messages;
           //return Redirect::route('todos.create')->withErrors($validator)->withInput();
        }


        $name = Input::get('name');
        $list = new TodoList();
        $list->name = $name;
        $list->save();
        return Redirect::route('todos.index')->withMessage('List Was Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = TodoList::findOrFail($id);
        $items = $list->listItems()->get();
        return View::make('todos.show')
            ->withList($list)
            ->withItems($items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
