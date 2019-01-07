<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:37 PM
 */
?>

<div class="top-bar bgc-1">
    {{--        <div class="container">
                <div class="row align-middle">
    
    
    
                </div> <!-- row -->
            </div> <!-- container 1 -->--}}
</div> <!-- top-bar -->
<div class="container text-center hd--bg mb-5">
    <!-- <div class="row"> -->
    <nav class="navbar navbar-expand-lg navbar-light rounded pt-0 col-md-12 row">
        <button class="navbar-toggler row" type="button" data-toggle="collapse" data-target="#navbarsExample10"
                aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav col-md-12">
                <div class="col-md-2 text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('frontend.index')}}">
                            <img src="img/header/menu-icon_home.png" class="hd__img">
                            <span class="font-weight-bold">LEW</span>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </div>
                <div class="col-md-2 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.list.song')}}">
                            <img src="img/header/menu-icon_listen.png" class="hd__img">
                            <span class="font-weight-bold">Songs</span>
                        </a>
                    </li>
                </div>
                <div class="col-md-2 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.list.listening')}}">
                            <img src="img/header/menu-icon_speak.png" class="hd__img">
                            <span class="font-weight-bold">Listening</span>
                        </a>
                    </li>
                </div>
                <div class="col-md-2 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.list.story')}}">
                            <img src="img/header/menu-icon_read.png" class="hd__img">
                            <span class="font-weight-bold">Stories</span>
                        </a>
                    </li>
                </div>
                <div class="col-md-2 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.game')}}">
                            <img src="img/header/menu-icon_game.png" class="hd__img">
                            <span class="font-weight-bold">Games</span>
                        </a>
                    </li>
                </div>
                <div class="text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.list.grammar')}}">
                            <img src="img/header/menu-icon_grammer.png" class="hd__img">
                            <span class="font-weight-bold">Grammar</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
    <!-- </div> -->
</div>

