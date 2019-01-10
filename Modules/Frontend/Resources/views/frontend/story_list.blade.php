<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 2:38 PM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    story list
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-5 bgc-2">
                    <div class="col-md-4 text-center">
                        <img src="img/monster on website-stories.png">
                    </div>
                    <div class="col-md-8 my-auto index-p__cl">
                        Stories <br>
                        Do you like listening to and reading stories?
                        Reading stories is a great way to improve your vocabulary and
                        we have lots of great stories for you to watch. Watch stories, print activities and post
                        comments!
                    </div>
                </div>
                <div class="row">
                    {{--                    <div class="col-md-6 text-center hvr-grow">
                                            <a href="" class="td">
                                                <img src="img/s1.jpg" alt="" class="img-thumbnail l__img img-bd-cl">
                                                <p class="my-3 font-weight-bold hd_font">A bear named Sue</p>
                                            </a>
                                        </div>--}}
                    @foreach($stories as $story)
                        <div class="col-md-3 text-center hvr-grow">
                            <a href="{{route('frontend.item.story', $story->id)}}" class="td">
                                <img src="img/stories/{{$story->id}}.jpg" alt="{{$story->name}}" class="img-thumbnail">
                                <p class="my-3 font-weight-bold txt-cl-1">{{$story->name}}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{--                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a class="btn btn-lg px-5 bgc-1 txt-cl-2" role="button"
                                           href="" target="_blank">Load more</a>
                                    </div>
                                </div>--}}
                {{--                <!-- PAGINATION -->
                                <div class="row">
                                    <nav>
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="mx-3"><a href="#">1</a></li>
                                            <!-- <li class="mr-3"><a href="#">2</a></li>
                                            <li class="mr-3"><a href="#">3</a></li>
                                            <li class="mr-3"><a href="#">4</a></li>
                                            <li class="mr-3"><a href="#">5</a></li>
                    -->
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>--}}
            </div> {{--end col-md-9--}}
            <div class="col-md-3">
                <div class="card img-bd-cl index-p__cl">
                    <div class="card-header text-uppercase font-weight-bold img-bd-cl align-middle
                    text-center">
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


