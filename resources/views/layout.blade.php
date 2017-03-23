<!DOCTYPE html>
<html>
<head>
    @yield('page-head')
    <link rel="stylesheet" href="libs/slicknav/dist/slicknav.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')

<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="libs/slicknav/dist/jquery.slicknav.min.js"></script>
<script src="javascript/custom.js"></script>
</body>
</html>