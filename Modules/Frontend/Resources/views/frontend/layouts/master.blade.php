<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:36 PM
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            lew
        @show
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Hover/css/hover.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('CaptionHoverEffects/css/component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('CaptionHoverEffects/css/default.css')}}">
</head>
<body>

@include('frontend::frontend.partials.header')

<div>
    @yield('content')
</div>

@include('frontend::frontend.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('CaptionHoverEffects/js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{asset('CaptionHoverEffects/js/toucheffects.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>
</html>


