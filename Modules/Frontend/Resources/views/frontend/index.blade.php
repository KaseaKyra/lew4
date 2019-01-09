<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:45 PM
 */
?>
@extends('frontend::frontend.layouts.master')

@section('title')
    lew
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron bgc-2" style="color: #000;">
                    <h1 class="display-3">Welcome to LEW!</h1>
                    <p class="lead">LEW is brought to you by the Kasea Kyra, the world's English Learning for kids. We
                        have lots of free online games, songs, stories and activities for children. We have articles on
                        supporting children in learning English, videos on using English at home and information about
                        face-to-face courses around the world.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container demo-3">
        <ul class="grid cs-style-4">
            <div class="row">
                {{--pic 1--}}
                <div class="col-md-6">
                    <li>
                        <figure>
                            <div><img src="img/index/5.jpg" alt="img05"></div>
                            <figcaption>
                                <h3>Songs</h3>
                                <span>Lew</span>
                                <a href="{{route('frontend.list.song')}}" target="_blank">Take a look</a>
                            </figcaption>
                        </figure>
                        <div>
                            <h4><a class="font-weight-bold txt-cl-1 td" href="{{route('frontend.list.song')
                            }}">Songs</a></h4>
                            <p class="index-p__cl">Find more useful tips, funny information about how to learn English
                                effectively.</p>
                        </div>
                    </li>
                </div>
                {{--pic 2--}}
                <div class="col-md-6">
                    <li>
                        <figure>
                            <div><img src="img/index/1.jpg" alt="img06"></div>
                            <figcaption>
                                <h3>Reading Lessons</h3>
                                <span>Lew</span>
                                <a href="{{route('frontend.list.listening')}}" target="_blank">Take a look</a>
                            </figcaption>
                        </figure>
                        <div>
                            <h4><a class="font-weight-bold txt-cl-1 td" href="{{route('frontend.list.listening')
                            }}">Listening Lesson</a></h4>
                            <p class="index-p__cl">Find more useful tips, funny information about how to learn English
                                effectively.</p>
                        </div>
                    </li>
                </div>
            </div> {{--end row 1--}}
            <div class="row">
                {{-- pic 3--}}
                <div class="col-md-6">
                    <li>
                        <figure>
                            <div><img src="img/index/2.jpg" alt="img04"></div>
                            <figcaption>
                                <h3>Stories</h3>
                                <span>Lew</span>
                                <a href="{{route('frontend.list.story')}}" target="_blank">Take a look</a>
                            </figcaption>
                        </figure>
                        <div>
                            <h4><a class="font-weight-bold txt-cl-1 td" href="{{route('frontend.list.story')}}">Stories</a></h4>
                            <p class="index-p__cl">Find more useful tips, funny information about how to learn
                                English effectively.</p>
                        </div>
                    </li>
                </div>
                {{--pic 4--}}
                <div class="col-md-6">
                    <li>
                        <figure>
                            <div><img src="img/index/3.jpg" alt="img01"></div>
                            <figcaption>
                                <h3>Games</h3>
                                <span>Lew</span>
                                <a href="{{route('frontend.game')}}" target="_blank">Take a look</a>
                            </figcaption>
                        </figure>
                        <h4><a class="font-weight-bold txt-cl-1 td" href="{{route('frontend.game')}}">Games</a></h4>
                        <p class="index-p__cl">Playing fascinating games.</p>
                    </li>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{--pic 5--}}
                    <li>
                        <figure>
                            <div><img src="img/index/6.jpg" alt="img03"></div>
                            <figcaption>
                                <h3>Grammar</h3>
                                <span>Lew</span>
                                <a href="{{route('frontend.list.grammar')}}" target="_blank">Take a look</a>
                            </figcaption>
                        </figure>
                        <div>
                            <h4><a class="font-weight-bold txt-cl-1 td"
                                   href="{{route('frontend.list.grammar')}}">Grammar</a></h4>
                            <p class="index-p__cl">Listening a lot of great songs.</p>
                        </div>
                    </li>
                </div>
                <div class="col-md-6">            {{-- pic 6--}}
                    <li>
                        <figure>
                            <div><img src="img/index/4.jpg" alt="img03"></div>
                            <figcaption>
                                <h3>Blog</h3>
                                <span>Lew</span>
                                <a href="" target="_blank">Take a look</a>
                            </figcaption>
                        </figure>
                        <div>
                            <h4><a class="font-weight-bold txt-cl-1 td" href="">Blog</a></h4>
                            <p class="index-p__cl">Find more useful tips, funny information about how to learn English
                                effectively.</p>
                        </div>
                    </li>
                </div>
            </div>
            {{--                        @foreach($categories as $category)
                                        <li>
                                            <figure>
                                                <div><img src="img/index/{{$category->id}}.jpg" alt="img02"></div>
                                                <figcaption>
                                                    <h3>{{$category->name}}</h3>
                                                    <a href="{{route('')}}" target="_blank">Take a look</a>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    @endforeach--}}
        </ul>
    </div><!-- /container -->
    <!-- Carousel -->
    <div class="container">
        <div class="row blog">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/1.jpg" alt="Image" class="car-img"
                                                {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/2.jpg" alt="Image"
                                             class="car-img" {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/3.jpg" alt="Image"
                                             class="car-img" {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/4.jpg" alt="Image"
                                             class="car-img" {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                            </div> <!-- .row -->
                        </div>    <!-- .item -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/5.jpg" alt="Image"
                                             class="car-img" {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/1.jpg" alt="Image"
                                             class="car-img" {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/1.jpg" alt="Image"
                                             class="car-img" {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/slide show/1.jpg" alt="Image"
                                             class="car-img" {{--style="max-width:100%;"--}}>
                                    </a>
                                </div>
                            </div><!-- row -->
                        </div><!-- .item -->
                    </div><!-- .carousel-inner -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div><!-- .Carousel -->
            </div>
        </div>
    </div>
@stop
