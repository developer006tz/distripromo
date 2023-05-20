<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="distrimusic">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="distrimusic">
	<meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Distrimusic - Social media Marketing platform">
	<meta property="og:title" content="Distrimusic - Social media Marketing platform">
	<meta property="og:description" content="Distrimusic - Social media Marketing platform">

	<meta name="format-detection" content="telephone=no">
    <title>Distrimusic -  Social media Marketing platform </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::to('website/assets/img/logo/logo-blue.png')}}">
	<link href="{{ URL::to('theme/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('theme/assets/css/style.css') }}" rel="stylesheet">

</head>
<body class="vh-100">
<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="{{ URL::to('website/assets/img/logo/logo-blue.png') }}" width="66" height="66" alt="">
									</div>
