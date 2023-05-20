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
    <title>{{str_replace(['.'],'-', Str::ucfirst(request()->route()->getName())) == 'Home' ? 'Dashboard' : str_replace(['.'],'-', Str::ucfirst(request()->route()->getName()))}}</title>
    <script>
        const startTime = performance.now();
        window.addEventListener('load', () => {
            const endTime = performance.now();
            const renderingTimeInSeconds = (endTime - startTime) / 1000;
            const loadTimeElement =  document.getElementById("loadTime");
            loadTimeElement.textContent = `| Page : ${renderingTimeInSeconds.toFixed(2)} s `;
        });
    </script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('website/assets/img/logo/logo.svg') }}">
    <link href="{{asset('theme/assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{asset('theme/assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('theme/assets/vendor/nouislider/nouislider.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
	
	<!-- Style css -->
    <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
    {{-- <script type="module">
            import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
        </script>
        
        @livewireStyles --}}
        @stack('styles')
</head>
<body>
     <!--*Preloader start*-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*Preloader end-->
    <div id="main-wrapper">
    @include('layouts.nav-header')
    @include('layouts.nav')
    @include('layouts.sidebar')
    <div class="content-body">
        @yield('content')
    </div>

    <div class="footer">
        <div class="copyright">
            {{-- <p>Copyright ©<a href="../index.html" target="_blank">Distripromo</a> {{date('Y')}}</p> --}}
            
            <p class="d-flex justify-content-center" style="color:1px solid rgb(111, 134, 134);" >&nbsp;&nbsp;<span id="loadtime2"></span>&nbsp;&nbsp;<span id="loadTime"></span>&nbsp;&nbsp;<span> | Server: {{microtime(true) - LARAVEL_START}} s</span>&nbsp;&nbsp;<span> | Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) </span></p>
        </div>
    </div>


</div>
@yield('modals')
 {{-- @livewireScripts
        
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}

    <!-- Required vendors -->
    <script src="{{asset('theme/assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('theme/assets/js/custom.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/dlabnav-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/demo.js')}}"></script>
    <script src="{{asset('theme/assets/js/styleSwitcher.js')}}"></script>
    <!-- Chart piety plugin files -->
    <script src="{{asset('vendor/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/nouislider-init.js')}}"></script>
    

    <script src="{{asset('theme/assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/promise-polyfill/polyfill.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendor/promise-polyfill/polyfill.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/sweetalert.init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/toastr-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/jquery.sparkline-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/select2-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/summernote-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/data-table-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/bs-datetimepicker-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/jquery.maskedinput-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/jquery.validate-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/form-pickers-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/form-repeater-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/form-fileupload-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/form-inputmask-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/form-select2-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/form-editor-summernote-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/jquery-steps-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/bs-stepper-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/jquery.validate-init.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins-init/form-repeater-init.js')}}"></script>
    <script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

    <script>
        $(document).ready(function(){
            $('#loadtime2').html('Dom: ' + (window.performance.timing.domContentLoadedEventEnd - window.performance.timing.navigationStart)/1000 + ' s ');
        });
    </script>
    @yield('scripts')


</body>
</html>
	