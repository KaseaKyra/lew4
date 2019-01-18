<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/18/2019
 * Time: 4:32 PM
 */
?>
@extends('frontend::frontend.layouts.master')

@section('title')
    story
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 class="font-weight-bold index-p__cl">{{$story->name}}</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=0" allowfullscreen>
                    </iframe>
                </div>
                <div class="mt-3 bgc-2 py-2 index-p__cl">
                    <a><i class="fas fa-caret-right mx-2"></i>Game</a>
                    <div>
                        {!! Form::open(['route' => ['frontend.check.story'], 'method' => 'post']) !!}
                        <input type="hidden" name="id" value="{{$story->id}}">
                        <div class="form-group mx-5">
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">A</span>
                                    .{{$ordering->order1}}<br></div>
                                <div class="col-md-3">
                                    <input type="text" class="story_w text-center" id="" name="result1"
                                           value="{{$request->result1}}"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">B</span>.{{$ordering->order2}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result2" value="{{$request->result2}}"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">C</span>.{{$ordering->order3}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result3" value="{{$request->result3}}"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">C</span>.{{$ordering->order4}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result4" value="{{$request->result4}}"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">Y</span>.{{$ordering->order5}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result5" value="{{$request->result5}}"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">F</span>.{{$ordering->order6}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result6" value="{{$request->result6}}"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">J</span>.{{$ordering->order7}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result7" value="{{$request->result7}}"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">H</span>.{{$ordering->order8}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result8" value="{{$request->result8}}"><br></div>
                            </div>
                        </div>
                        @if($count > 5)
                            <h5 class="mx-5 font-weight-bold" style="color: green;">Correct: {{$count}}/8</h5>
                        @endif
                        @if($count <= 5)
                            <h5 class="mx-5 font-weight-bold" style="color: red;">Correct: {{$count}}/8</h5>
                        @endif
                        <h5 class="mx-5 font-weight-bold">The answer: {{$answerString}} </h5>
                        {!! Form::close() !!}
                            <div class="form-group clearfix mx-5">
                                <a href="{{route('frontend.item.story', $story->id)}}" type="button" class="btn btn-primary
                            float-right">
                                    <i class="fas fa-redo mr-1"></i>Re-do
                                </a>
                            </div>
                    </div>
                </div>
                <!-- STORY'S GAME -->
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
@stop





