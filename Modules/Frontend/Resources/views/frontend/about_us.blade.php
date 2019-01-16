<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/15/2019
 * Time: 8:52 AM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    About us
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
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center align-middle">
                <a class="btn btn-lg px-5 bgc-1 txt-cl-2" role="button"
                   href="{{route('frontend.index')}}">Start learning</a>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@stop

