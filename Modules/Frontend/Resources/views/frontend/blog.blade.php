<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/15/2019
 * Time: 8:51 AM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    blog
@stop

@section('content')
    {{--    <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 text-center align-middle">
                    <a href="https://www.vocabulary.co.il/" target="_blank">
                        <img src="img/games/games.jpg" alt="Play games">
                    </a>
                    <p class="font-weight-bold index-p__cl">Get useful and interesting information, experiment, tip about
                        how to learn
                        English</p>
                    <a class="btn btn-lg px-5 bgc-1 txt-cl-2" role="button"
                       href="https://www.vocabulary.co.il/" target="_blank">Go To Blog</a>
                </div>
                <div class="col-3"></div>
            </div>
        </div>--}}

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="jumbotron bgc-2" style="color: #000;">
                    <h1 class="display-3">Welcome to LEW!</h1>
                    <p class="lead">LEW is brought to you by the Kasea Kyra, the world's English Learning for kids. We
                        have lots of free online games, songs, stories and activities for children. We have articles on
                        supporting children in learning English, videos on using English at home and information about
                        face-to-face courses around the world.</p>
                </div>
                <!-- BÀI VIẾT -->
                @foreach($blogs as $blog)
                    <div class="card mb-4 index-p__cl">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img class="card-img-bottom" style="height: 300px; width: 300px;"
                                     src="{{asset('img/games/games.jpg')}}" alt="{{$blog->title}}">
                            </div>
                            <div class="col-md-6 card-body">
                                <h4 class="card-title">{{$blog->title}}</h4>
                                <p class="card-text">{{str_limit($blog->content, 150)}}</p>
                                <p class="card-text">
                                    More:<a href="{{$blog->link}}" class="font-weight-bold txt-cl-1"> Go to the blog</a>
                                </p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- DANH MỤC SẢN PHẨM -->
            <div class="col-md-3">
                <p class="left-menu-header">danh mục</p>
                <ul class="list-unstyled components">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div> <!-- col-md-3 -->
        </div> <!-- row -->

        <!-- COMMENT -->
        <div class="row mt-5">
            <div class="col-md-9">
                <div>
                    <p>Viết bình luận</p>
                    <hr>
                </div>
                <form class="mb-5" method="post" action="" id="comments">
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" id="name" name="name"
                               aria-describedby="emailHelp" placeholder="Tên của bạn">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Email của bạn">
                    </div>
                    <div class="form-group ml-3">
                        <textarea cols="" rows="4" class="form-control" placeholder="Viết bình luận ..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark ml-3" name="submit">Gửi bài viết</button>
                </form>
            </div>
        </div> <!-- row -->
    </div>  <!-- container -->
@stop

