
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Page not Found</title>
	
	<!-- FAVICONS ICON -->
	 <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('website/assets/img/logo/logo-blue.png') }}">
    <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
    
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-7">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text fw-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
                        <p>You may have mistyped the address or the page may have moved.</p>
						<div>
                            <a class="btn btn-primary" href="{{route('home')}}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('theme/assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('theme/assets/js/custom.min.js')}}"></script>
<script src="{{asset('theme/assets/js/dlabnav-init.js')}}"></script>
</body>
</html>