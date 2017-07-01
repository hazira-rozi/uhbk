@extends('body')
@section('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UHBK') }}</title>
    <!--Favicon-->
    <link rel="shortcut icon" href={{asset('images/icon/favicon.ico')}}>
    <!-- Styles -->
    <!--<link href="css/app.css" rel="stylesheet"> -->

    <script src='js/jquery.min.js'></script>
    <script src='js/time.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='{{asset('js/sweetalert.min.js')}}'></script>
    <link rel='stylesheet" href="{{ asset('css/sweetalert.css') }}'>
    <link href='css/bootstrap.min.css' rel='stylesheet'>

    <script>
        window.UHBK =<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
@endsection



    <noscript>
        <style>html{display:none;}</style>
        <meta http-equiv="refresh" content="0.0;url=no-js">
    </noscript>

</head>
@endsection
