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
    song
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 class="font-weight-bold index-p__cl">{{$song->name}}</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/{{$song->link}}" allowfullscreen>
                    </iframe>
                </div>
                <div class="mt-3 bgc-2 py-2 index-p__cl">
                    <a id="s__btn"><i class="fas fa-caret-right mx-2"></i>Playing Game</a>
                    <div id="s__content">
                        {!! Form::open(['route' => ['frontend.check.song'], 'method' => 'post']) !!}
                        <input type="hidden" name="id" value="{{$song->id}}">
                        <div class="m-5">
                            {{strip_tags($song->lyric)}}
                        </div>
                        <div class="form-group mx-5">
                            <label for="a1" class="mr-3">Answer 1</label>
                            <input type="text" class="text-center" id="a1" name="a1"><br>
                            <label for="a2" class="mr-3">Answer 2</label>
                            <input type="text" class="text-center" id="a2" name="a2"><br>
                            <label for="a3" class="mr-3">Answer 3</label>
                            <input type="text" class="text-center" id="a3" name="a3"><br>
                            <label for="a4" class="mr-3">Answer 4</label>
                            <input type="text" class="text-center" id="a4" name="a4"><br>
                            <label for="a5" class="mr-3">Answer 5</label>
                            <input type="text" class="text-center" id="a5" name="a5">
                        </div>
                        <div class="form-group clearfix mx-5">
                            <button type="submit" class="btn btn-primary float-right ml-3" name="check" id="check">
                                <i class="fas fa-check mr-1"></i>Check
                            </button>
                            <a href="" type="button" class="btn btn-primary float-right">
                                <i class="fas fa-redo mr-1"></i>Re-do
                            </a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div> <!-- song's game -->
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

@endsection
