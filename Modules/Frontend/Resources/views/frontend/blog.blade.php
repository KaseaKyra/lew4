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
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center align-middle">
                <a href="https://www.vocabulary.co.il/" target="_blank">
                    <img src="img/games/games.jpg" alt="Play games">
                </a>
                <p class="font-weight-bold index-p__cl">Get useful and interesting information, experiment, tip about how to learn
                    English</p>
                <a class="btn btn-lg px-5 bgc-1 txt-cl-2" role="button"
                   href="https://www.vocabulary.co.il/" target="_blank">Go To Blog</a>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@stop

