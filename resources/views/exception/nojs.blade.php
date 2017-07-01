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
     <link rel="shortcut icon" href="images/icon/favicon.png">
    <!-- Styles -->
    <!--<link href="css/app.css" rel="stylesheet"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->

    <script>
            window.UHBK =<?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    <script type="text/javascript" src='js/bootstrap.min.js'></script>
    <script type="text/javascript">
             <!--
                function Redirect() {
                   window.location="index";
                }


                setTimeout('Redirect()', 100);
             //-->
          </script>
</head>
<body>
        <H1 ALIGN="CENTER">Javascript should be activated!</H1>
        <p align="center">hit refresh (F5 Key) after javascript is activated</p>

</body>
</html>
