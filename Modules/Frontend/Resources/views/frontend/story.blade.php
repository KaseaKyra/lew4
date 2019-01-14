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
                    <a id="s__btn"><i class="fas fa-caret-right mx-2"></i>Game</a>
                    <div id="s__content">
                        {!! Form::open(['route' => ['frontend.check.story'], 'method' => 'post']) !!}
                        <input type="hidden" name="id" value="{{$story->id}}">
                        <div class="form-group mx-5">
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">A</span>
                                    .{{$ordering->order1}}<br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id="" name="result1"> <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">B</span>.{{$ordering->order2}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">C</span>.{{$ordering->order3}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result3"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">C</span>.{{$ordering->order4}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result4"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">Y</span>.{{$ordering->order5}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result5"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">F</span>.{{$ordering->order6}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result6"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">J</span>.{{$ordering->order7}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result7"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-9"><span class="font-weight-bold mr-3">H</span>.{{$ordering->order8}}
                                    <br></div>
                                <div class="col-md-3"><input type="text" class="story_w text-center" id=""
                                                             name="result8"><br></div>
                            </div>
                        </div>
                        <div class="form-group clearfix mx-5">
                            <button type="submit" class="btn btn-primary float-right ml-3" name="check" id="check">
                                <i class="fas fa-check mr-1"></i>Check
                            </button>
                            <button type="submit" class="btn btn-primary float-right" name="redo" id="redo">
                                <i class="fas fa-redo mr-1"></i>Re-do
                            </button>
                        </div>
                        {!! Form::close() !!}
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
    {{--<div class="container">
        <div class="row">
            <div class="col-md-9">
                <form class="form" role="form">
                    <ul name="gapfield-list" class="gapfield-list list-group ui-select-and-exchange"
                        data-question-index="0">
                        <li tabindex="0" class="list-group-item btn btn-default"><span
                                    class="glyphicon pull-right glyphicon-hand-down"></span>She played with her friends.
                        </li>
                        <li tabindex="0" class="list-group-item btn btn-default"><span
                                    class="glyphicon pull-right glyphicon-hand-down"></span>She talked about Ancient
                            Egypt.
                        </li>
                        <li tabindex="0" class="list-group-item btn btn-default"><span
                                    class="glyphicon pull-right glyphicon-hand-down"></span>Sarah invited her to a
                            birthday party.
                        </li>
                        <li tabindex="0" class="list-group-item btn btn-default"><span
                                    class="glyphicon pull-right glyphicon-hand-down"></span>She wrote a story.
                        </li>
                        <li tabindex="0" class="list-group-item btn btn-default"><span
                                    class="glyphicon pull-right glyphicon-hand-down"></span>She had a maths test.
                        </li>
                        <li tabindex="0" class="list-group-item btn btn-default"><span
                                    class="glyphicon pull-right glyphicon-hand-down"></span>Kitty watched a film on the
                            pyramids.
                        </li>
                    </ul>
                    <ul name="gapfield-list0"
                        class="gapfield-list0 list-group gapfield-list-locked model-wrapper hidden"
                        data-question-index="0">
                        <li class="list-group-item btn btn-info ui-state-disabled dummy" data-dummy-item="true"><span
                                    class="glyphicon pull-right"></span>Kitty watched a film on the pyramids.
                        </li>
                        <li class="list-group-item btn btn-info ui-state-disabled dummy" data-dummy-item="true"><span
                                    class="glyphicon pull-right"></span>She talked about Ancient Egypt.
                        </li>
                        <li class="list-group-item btn btn-info ui-state-disabled dummy" data-dummy-item="true"><span
                                    class="glyphicon pull-right"></span>She had a maths test.
                        </li>
                        <li class="list-group-item btn btn-info ui-state-disabled dummy" data-dummy-item="true"><span
                                    class="glyphicon pull-right"></span>She played with her friends.
                        </li>
                        <li class="list-group-item btn btn-info ui-state-disabled dummy" data-dummy-item="true"><span
                                    class="glyphicon pull-right"></span>Sarah invited her to a birthday party.
                        </li>
                        <li class="list-group-item btn btn-info ui-state-disabled dummy" data-dummy-item="true"><span
                                    class="glyphicon pull-right"></span>She wrote a story.
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>--}}
@stop




