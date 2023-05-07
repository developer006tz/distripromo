<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Jassa - Crypto Admin Dashboard">
    <meta property="og:title" content="Jassa - Crypto Admin Dashboard">
    <meta property="og:description" content="Jassa - Crypto Admin Dashboard">
    <meta name="format-detection" content="telephone=no">
    <title>Jassa - Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ URL::to('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">


</head>
<script type="module">
            import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
        </script>

@livewireStyles
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<div id="main-wrapper">
    @include('layouts.nav-header')
    @include('layouts.nav')
    @include('layouts.sidebar')
    <div class="content-body">
        @yield('content')
    </div>

    <div class="footer">
        <div class="copyright">
            <p>Copyright ©<a href="../index.html" target="_blank">Distrimusic</a> {{date('Y')}}</p>
        </div>
    </div>
    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->
@stack('modals')

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">

</script><script src="{{ URL::to('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ URL::to('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::to('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ URL::to('assets/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ URL::to('assets/vendor/apexchart/apexchart.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ URL::to('assets/js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ URL::to('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ URL::to('assets/js/custom.min.js') }}"></script>
<script src="{{ URL::to('assets/js/deznav-init.js') }}"></script>
<script src="{{ URL::to('assets/js/demo.js') }}"></script>
<script src="{{ URL::to('assets/js/styleSwitcher.js') }}"></script>

@stack('scripts')

</body>
</html>
