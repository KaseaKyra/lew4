<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 2:35 PM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    games
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <a href="https://www.vocabulary.co.il/" target="_blank">
                    <img src="img/games.jpg" alt="Play games">
                </a>
                <a class="btn btn-lg px-5 bgc-1 txt-cl-2" role="button" href="https://www.vocabulary.co.il/"
                   target="_blank" >
                    Play games</a>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@stop
