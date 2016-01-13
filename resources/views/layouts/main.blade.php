<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ToDOList | Welcome</title>
        <link rel="stylesheet" href="{{ URL::asset('/css/foundation.css') }}">
        <!--<script src="{{ URL::asset('/js/vendor/modernizr.js') }}"></script>-->
    </head>

<body>

    <!-- Header and Nav -->
 
    <nav class="top-bar" data-topbar>
        <ul class="title-area" style="list-style-type: none;">
            <li class="name">
                <h1><a href="#">ToDo</a></h1>
            </li>
        </ul>
    </nav>
 
    <!-- End Header and Nav -->

    <div class="row">
        <div class="large-12">
            @yield('content')
        </div>
    </div>
 
 
    <!-- Footer -->
 
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>© Michael Aguilera <?php echo date("Y");?></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
    <script>
      $(document).foundation();
    </script>
    </body>
</html>