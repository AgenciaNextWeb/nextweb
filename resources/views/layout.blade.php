<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Poppins:300,400,500,600,700|Raleway:300,400,400i,500,600,700,800&quot; rel=&quot;stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/libs/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    @yield('page-head')
    <script src="/javascript/modernizr-2.8.3.min.js"></script>
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')

<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="/javascript/jquery.meanmenu.min.js"></script>
<script src="/libs/scrollup/dist/jquery.scrollUp.min.js"></script>
<script src="/javascript/custom.js"></script>
</body>
</html>