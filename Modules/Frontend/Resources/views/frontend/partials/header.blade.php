<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:37 PM
 */
?>

<div class="top-bar bgc-1 {{--fixed-top--}}">
    {{--        <div class="container">
                <div class="row align-middle">
    
    
    
                </div> <!-- row -->
            </div> <!-- container 1 -->--}}
</div> <!-- top-bar -->
<div class="container text-center hd--bg mb-5 {{--fixed-top--}}" {{--style="margin-top: 40px;"--}}>
    <!-- <div class="row"> -->
    <nav class="navbar navbar-expand-lg navbar-light rounded pt-0 col-md-12 row">
        <button class="navbar-toggler row" type="button" data-toggle="collapse" data-target="#navbarsExample10"
                aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
                <li class="nav-item active text-center">
                    <a class="nav-link" href="{{route('frontend.index')}}">
                        <img src="{{asset('img/header/menu-icon_home.png')}}" class="hd__img">
                        <span class="font-weight-bold">LEW</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item text-center mr-2">
                    <a class="nav-link" href="{{route('frontend.list.song')}}">
                        <img src="{{asset('img/header/menu-icon_listen.png')}}" class="hd__img">
                        <span class="font-weight-bold">Songs</span>
                    </a>
                </li>
                <li class="nav-item text-center mr-2">
                    <a class="nav-link" href="{{route('frontend.list.listening')}}">
                        <img src="{{asset('img/header/menu-icon_speak.png')}}" class="hd__img">
                        <span class="font-weight-bold">Listening</span>
                    </a>
                </li>
                <li class="nav-item text-center mr-2">
                    <a class="nav-link" href="{{route('frontend.list.story')}}">
                        <img src="{{asset('img/header/menu-icon_read.png')}}" class="hd__img">
                        <span class="font-weight-bold">Stories</span>
                    </a>
                </li>
                <li class="nav-item text-center mr-2">
                    <a class="nav-link" href="{{route('frontend.game')}}">
                        <img src="{{asset('img/header/menu-icon_game.png')}}" class="hd__img">
                        <span class="font-weight-bold">Games</span>
                    </a>
                </li>
                <li class="nav-item text-center mr-2">
                    <a class="nav-link" href="{{route('frontend.list.grammar')}}">
                        <img src="{{asset('img/header/menu-icon_grammer.png')}}" class="hd__img">
                        <span class="font-weight-bold">Grammar</span>
                    </a>
                </li>
                <li class="nav-item text-center mr-2">
                    <a class="nav-link" href="{{route('frontend.blog')}}">
                        <img src="{{asset('img/header/menu-icon_grammer.png')}}" class="hd__img">
                        <span class="font-weight-bold">Blog</span>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="{{route('frontend.about.us')}}">
                        <img src="{{asset('img/header/menu-icon_grammer.png')}}" class="hd__img">
                        <span class="font-weight-bold">About us</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- </div> -->
</div>

