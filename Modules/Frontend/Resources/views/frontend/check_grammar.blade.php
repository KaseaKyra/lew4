<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/18/2019
 * Time: 5:24 PM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    grammar
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p class="index-p__cl font-weight-bold">{{strip_tags($rule->description)}}</p>
                <h4 class="index-p__cl font-weight-bold">{{strip_tags($rule->title)}}</h4>
                <div class="mt-3">
                    <h5 class="txt-cl-1">Examples</h5>
                    <p class="index-p__cl">{{strip_tags($rule->example)}}</p>
                </div>
                <div class="mt-3">
                    <h5 class="txt-cl-1">Remember</h5>
                    <p class="index-p__cl">{{strip_tags($rule->remember)}}</p>
                </div>
                <div class="mt-3">
                    <h5 class="txt-cl-1">Be careful</h5>
                    <p class="index-p__cl">{{strip_tags($rule->be_careful)}}</p>
                </div>
                <div class="mt-3">
                    <h5 class="txt-cl-1">We say We don't say</h5>
                    <p class="index-p__cl">{{strip_tags($rule->we_say)}}</p>
                </div>
                {{-------------------PLAYING GAMES-------------------------}}
                <div class="my-3 bgc-2 py-2 index-p__cl">
                    <a><i class="fas fa-caret-right mx-2"></i>Playing Games</a>
                    <div>
                        {!! Form::open(['route' => ['frontend.check.grammar'], 'method' =>
                        'post']) !!}
                        <input type="hidden" name="id" value="{{$rule->id}}">
                        <div class="l__body m-5">
                            <div id="">
                                <p class="q1 font-weight-bold">{{$sorting->question}}
                                </p>
                                <p class="ml-4">
                                    <input type="text" class="text-center gra_w" name="i1" id="i1"
                                           value="{{$request->i1}}">
                                    <input type="text" class="text-center gra_w" name="i2" id="i2"
                                           value="{{$request->i2}}">
                                    <input type="text" class="text-center gra_w" name="i3" id="i3"
                                           value="{{$request->i3}}">
                                    <input type="text" class="text-center gra_w" name="i4" id="i4"
                                           value="{{$request->i4}}">
                                    <input type="text" class="text-center gra_w" name="i5" id="i5"
                                           value="{{$request->i5}}">
                                </p>
                            </div> <!-- question1 -->
                        </div>
                        @if($check == 1)
                            <h5 class="mx-5 font-weight-bold" style="color: green;">CORRECT</h5>
                        @endif
                        @if($check == 0)
                            <h5 class="mx-5 font-weight-bold" style="color: red;">WRONG</h5>
                        @endif
                        <h5 class="mx-5 font-weight-bold">The answer: {{$answerString}} </h5>
                        {!! Form::close() !!}
                        <div class="form-group clearfix l__footer m-5">
                            <a href="{{route('frontend.item.grammar', $rule->id)}}" type="button" class="btn btn-primary
                        float-right">
                                <i class="fas fa-redo mr-1"></i>Re-do
                            </a>
                        </div>
                    </div>
                </div>
                <!-----------------  GAME ENDS ------------------------>
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
    </div>
@stop

