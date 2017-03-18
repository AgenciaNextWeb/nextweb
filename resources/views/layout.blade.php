<!DOCTYPE html>
<html>
<head>
    @yield('page-head')
</head>
<body>

    <header>
        @yield('header')
    </header>

    <div id="main">

        @yield('content')

    </div>

    <footer>
        @yield('footer')
    </footer>

<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
</body>
</html>