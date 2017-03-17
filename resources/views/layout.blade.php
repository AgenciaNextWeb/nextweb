<!DOCTYPE html>
<html>
<head>
    @yield('page-head')
</head>
<body>
<div class="container">

    <header class="row">
        @yield('header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @yield('footer')
    </footer>

</div>
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
</body>
</html>