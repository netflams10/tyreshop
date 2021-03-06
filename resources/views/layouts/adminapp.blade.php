<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

</head>
    
    
    <body >
        @include('inc.header')
        <div class="container">
            <div class="pt-1">
                @include('inc.nav')
            </div>

            <div class="pb-2">
                @include('inc.carousel')
            </div>

            <div class="container-fluid">
                @yield('content')
            </div>



        </div>

        @include('inc.footer')



        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>


        <script>
            $(document).ready(() => {
                // SideNav Button Initialization
                $(".button-collapse").sideNav();
                    // SideNav Scrollbar Initialization
                    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
                    var ps = new PerfectScrollbar(sideNavScrollbar);
                new WOW().init();
            });
        </script>
    </body>
</html>
