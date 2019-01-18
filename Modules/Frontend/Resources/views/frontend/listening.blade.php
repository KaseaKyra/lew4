<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 1:35 PM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    listening lesson
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 class="font-weight-bold index-p__cl">{{$listening->name}}</h2>
                <img src="{{$listening->getProfilePictureAttribute()/*->files()->first()->path*/}}"
                     alt="{{$listening->name}}"
                     class="img-thumbnai">
                {{--                @foreach($listening->gallery as $item)
                                    <img src="{{$item->path}}" alt="">
                                @endforeach--}}
                <div>
                    {{--                    <iframe class="embed-responsive-item"
                                                src="{{asset('audio/1.mp3')}}" allowfullscreen>
                                        </iframe>--}}
                    <audio src="{{asset('audio/1.mp3')}}" controls="" style="width:100%"></audio>
                </div>
                {{--                <div class="my-3 bgc-2 py-2 index-p__cl">
                                    <a id="s__btn"><i class="fas fa-caret-right mx-2"></i>Listening Questions</a>
                                    --}}{{--<div id="s__content">
                                        {!! Form::open(['route' => ['frontend.check.listening'], 'method' => 'post']) !!}
                                        <input type="hidden" name="id" value="{{$listening->id}}">
                                        <div class="l__body m-5">
                                                <div id="l__question1">
                                                    <p class="q1 font-weight-bold">
                                                        {{strip_tags($question->question_content)}}
                                                    </p>
                                                    <p class="qo1 ml-4">
                                                        <input type="checkbox" id="op1" role="checkbox"
                                                               data-telemetry-id="auto_report_cb"/>
                                                        <label for="op1" id="op1">A: {{$question->choose->option1}}</label>
                                                        <br> <!-- ques1-option1 -->
                                                        <input type="checkbox" id="op2" role="checkbox"
                                                               data-telemetry-id="auto_report_cb"/>
                                                        <label for="op2" id="op2">B: {{$question->choose->option2}}</label>
                                                        <br> <!-- ques1-option2 -->
                                                        <input value="{{$question->choose->option3}}" type="checkbox" id="op3" role="checkbox"
                                                               data-telemetry-id="auto_report_cb"/>
                                                        <label for="op3" id="op3">C: {{$question->choose->option3}}</label>
                                                    </p>
                                                </div> <!-- question1 -->
                                        </div>
                                        <div class="form-group clearfix l__footer m-5">
                                            <button type="submit" class="btn btn-primary float-right ml-3" name="check" id="check">
                                                <i class="fas fa-check mr-1"></i>Check
                                            </button>
                                            <a href="" type="button" class="btn btn-primary float-right">
                                                <i class="fas fa-redo mr-1"></i>Re-do
                                            </a>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>--}}{{--
                                </div> <!-- song's game -->--}}
                {{--listening subscript--}}
                <div class="my-3 bgc-2 py-2 index-p__cl">
                    {{--<a id="btn_sub"><i class="fas fa-caret-right mx-2"></i>Listening Subscript</a>--}}
                    <div {{--id="sub"--}}>
                        <div class="m-5">
                            {{strip_tags($listening->description)}}
                        </div>
                    </div>
                </div> <!-- Listening Subscript -->
            </div> <!-- col-md-9 -->
            <!-- DANH MỤC BÀI VIẾT -->
            <div class="col-md-3">
                <div class="card img-bd-cl text-center index-p__cl">
                    <div class="card-header text-uppercase font-weight-bold bgc-2 img-bd-cl">
                        Takeaways
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{asset('img/games/games.jpg')}}" download>
                                <i class="fas fa-download mr-2"></i>Audio
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{asset('img/games/games.jpg')}}" download>
                                <i class="fas fa-download mr-2"></i>File PDF
                            </a>
                        </li>
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
    </div>
@stop
