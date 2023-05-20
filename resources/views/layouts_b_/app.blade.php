<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Distripromo, Resell, Grow, Digital Panel,MMS panel,Distripromo MMS panel, Social Media Services, Online Marketplaces, Distripromo">
    <meta name="author" content="Distripromo Company">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Distripromo offers the fastest, most affordable, and most advanced digital panel in the world. Earn a great income by reselling our high-quality social media services on your own platforms or on various online marketplaces. Distripromo is unbeatable in speed, price, and performance.">
    <meta property="og:title" content="Distripromo - Resell and Grow (Advanced MMS panel)">
    <meta property="og:description" content="The Fastest, Most Affordable, and Most Advanced Digital MMS Panel in the World. Earn a great income by reselling our high-quality social media services. Distripromo is unbeatable in speed, price, and performance.">
    <meta name="format-detection" content="telephone=no">
    <title>{{$title ?? '-'}}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('website/assets/img/logo/logo-blue.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ URL::to('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js" defer></script>

<script type="module">
            import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
        </script>

@livewireStyles

</head>

{{--access the Site_theme Model record with id 1--}}
@php
    $theme = \App\Models\Site_theme::find(1);
@endphp
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
            <p>Copyright ©<a href="../index.html" target="_blank">Distripromo</a> {{date('Y')}}</p>
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
    @stack('scripts')
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
<script>
    window.themesStoreUrl = "{{ url('themes') }}";
    window.themeVersion = "{{ $theme->version ?? 'v2'  }}";
</script>
<script src="{{ URL::to('assets/js/styleSwitcher.js') }}"></script>



</body>
</html>
