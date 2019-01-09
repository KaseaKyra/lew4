<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 2:39 PM
 */
?>

{{--
@extends('frontend::frontend.layouts.master')

@section('title')
    song
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2 class="font-weight-bold">{{$song->name}}</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=0" allowfullscreen>
                </iframe>
            </div>
            <div class="mt-3 bgc-2 py-2">
                <a id="s__btn"><i class="fas fa-caret-right mx-2"></i>Game</a>
                <div id="s__content">
                    <form method="post" action="" class="mx-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="s__id-1" name="s__name-1">
                            <input type="text" class="form-control" id="s__id-2" name="s__name-2">
                            <input type="text" class="form-control" id="s__id-3" name="s__name-3">
                            <input type="text" class="form-control" id="s__id-4" name="s__name-4">
                            <input type="text" class="form-control" id="s__id-5" name="s__name-5">
                        </div>
                        {{strip_tags($song->lyric)}}
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-primary float-right ml-3" name="check" id="check">Check</button>
                            <button type="submit" class="btn btn-primary float-right" name="redo" id="redo"><i class="fas fa-redo mr-1"></i>Re-do</button>
                        </div>
                    </form>
                </div>
            </div> <!-- song's game -->
        </div> <!-- col-md-9 -->
        <!-- DANH MỤC BÀI VIẾT -->
        <div class="col-md-3">
            <div class="card img-bd-cl">
                <div class="card-header text-uppercase font-weight-bold bgc-2 img-bd-cl">
                    Featured
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                </ul>
            </div>
        </div>
    </div> <!-- row 1 -->
    <!-- COMMENT -->
    <div class="row mt-5">
        <div class="col-md-9">
            <div>
                <p>Viết bình luận</p>
            </div>
            <form class="mb-5" method="post" action="" id="comments">
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" id="name" name="name"
                           aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="form-group col-md-5">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Email">
                </div>
                <div class="form-group ml-3">
                    <textarea cols="" rows="4" class="form-control" placeholder="Viết bình luận ..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary ml-3" name="submit">Gửi bài viết</button>
            </form>
        </div>
    </div> <!-- row 2 -->
</div>  <!-- container -->
@endsection--}}
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>song</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Hover/css/hover.css">
    <link rel="stylesheet" type="text/css" href="CaptionHoverEffects/css/component.css">
    <link rel="stylesheet" type="text/css" href="CaptionHoverEffects/css/default.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

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


<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2 class="font-weight-bold">Lorem ipsum dolor sit.</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=0" allowfullscreen>
                </iframe>
            </div>
            <div class="mt-3 bgc-2 py-2">
                <a id="s__btn"><i class="fas fa-caret-right mx-2"></i>Game</a>
                <div id="s__content">
                    <form method="post" action="" class="mx-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="s__id-1" name="s__name-1">
                            <input type="text" class="form-control" id="s__id-2" name="s__name-2">
                            <input type="text" class="form-control" id="s__id-3" name="s__name-3">
                            <input type="text" class="form-control" id="s__id-4" name="s__name-4">
                            <input type="text" class="form-control" id="s__id-5" name="s__name-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus excepturi recusandae nam magnam quam nihil eius soluta quae expedita illo accusamus, commodi explicabo sapiente, sit deleniti labore fugiat! Unde rem accusamus atque ipsum quis quidem obcaecati aspernatur, dolor veniam recusandae natus libero, porro repudiandae earum numquam repellat eius nihil? Sapiente, cumque sint amet. Nam, esse!
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-primary float-right ml-3" name="check" id="check">Check</button>
                            <button type="submit" class="btn btn-primary float-right" name="redo" id="redo"><i class="fas fa-redo mr-1"></i>Re-do</button>
                        </div>
                    </form>
                </div>
            </div> <!-- song's game -->
        </div> <!-- col-md-9 -->
        <!-- DANH MỤC BÀI VIẾT -->
        <div class="col-md-3">
            <div class="card img-bd-cl">
                <div class="card-header text-uppercase font-weight-bold bgc-2 img-bd-cl">
                    Featured
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                </ul>
            </div>
        </div>
    </div> <!-- row 1 -->
    <!-- COMMENT -->
    <div class="row mt-5">
        <div class="col-md-9">
            <div>
                <p>Viết bình luận</p>
            </div>
            <form class="mb-5" method="post" action="" id="comments">
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" id="name" name="name"
                           aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="form-group col-md-5">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Email">
                </div>
                <div class="form-group ml-3">
                    <textarea cols="" rows="4" class="form-control" placeholder="Viết bình luận ..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary ml-3" name="submit">Gửi bài viết</button>
            </form>
        </div>
    </div> <!-- row 2 -->
</div>  <!-- container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="CaptionHoverEffects/js/modernizr.custom.js"></script>
<script type="text/javascript" src="CaptionHoverEffects/js/toucheffects.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>