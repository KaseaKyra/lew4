<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 2:39 PM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    song list
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-5 bgc-2">
                    <div class="col-md-4 text-center">
                        <img src="img/monster_icon_songs.png">
                    </div>
                    <div class="col-md-8 my-auto index-p__cl">
                        Songs <br>
                        Do you like listening to songs in English? Singing songs is a great way
                        to get better at speaking English and we have lots of great songs for you to enjoy. Listen to
                        songs, print activities and post comments!
                    </div>
                </div>
                <div class="row">
                    {{--                    <div class="col-md-6 text-center hvr-grow">
                                            <a href="" class="td">
                                                <img src="img/s1.jpg" alt="" class="img-thumbnail l__img img-bd-cl">
                                                <p class="my-3 font-weight-bold hd_font">A bear named Sue</p>
                                            </a>
                                        </div>--}}
                    @foreach($songs as $song)
                        <div class="col-md-3 text-center hvr-grow">
                            <a href="{{route('frontend.item.song', $song->id)}}" class="td">
                                <img src="img/songs/{{$song->id}}.jpg" alt="{{$song->name}}" class="img-thumbnai">
                                <p class="my-3 font-weight-bold hd_font txt-cl-1">{{$song->name}}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{--                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a class="btn btn-lg px-5 bgc-1 txt-cl-2" role="button"
                                           href="">Load more</a>
                                    </div>
                                </div>--}}
            </div> {{--end col-md-9--}}
            <div class="col-md-3">
                <div class="card img-bd-cl">
                    <div class="card-header text-uppercase font-weight-bold index-p__cl img-bd-cl align-middle text-center">
                        Categories
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($categories as $category)
                            <li class="list-group-item img-bd-cl"><a class=" index-p__cl"
                                                                     href="">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div> {{--end col-md-3--}}
        </div> {{--end row--}}
    </div> {{--end container--}}
@stop

