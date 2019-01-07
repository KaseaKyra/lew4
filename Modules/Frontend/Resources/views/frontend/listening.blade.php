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
                <h2 class="font-weight-bold">Lorem ipsum dolor sit.</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=0" allowfullscreen>
                    </iframe>
                </div>
                <div class="my-3 bgc-2 py-2">
                    <a id="s__btn"><i class="fas fa-caret-right mx-2"></i>Listening Questions</a>
                    <div id="">
                        <form method="post" action="" class="mx-3">
                            <div class="form-group l__header">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus excepturi recusandae
                                nam magnam quam nihil eius soluta quae expedita illo accusamus, commodi explicabo
                                sapiente, sit deleniti labore fugiat! Unde rem accusamus atque ipsum quis quidem
                                obcaecati aspernatur, dolor veniam recusandae natus libero, porro repudiandae earum
                                numquam repellat eius nihil? Sapiente, cumque sint amet. Nam, esse! Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit. Assumenda, distinctio. Voluptas beatae,
                                cupiditate expedita quidem inventore aliquid nostrum recusandae deserunt corporis
                                laboriosam vitae quas perferendis sequi cumque ipsam, excepturi id ad odit. Atque nulla,
                                dolorum libero at numquam tempora quia ex quisquam sequi, eligendi illum harum fugit
                                sapiente beatae maiores repellat nobis corporis illo. Corporis.
                                <br>
                            </div>
                            <div class="l__body">
                                <div id="l__question1">
                                    <p class="ques1-content font-weight-bold">1. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Esse maxime totam laborum delectus consequatur, labore!
                                    </p>
                                    <p class="ques1-option ml-4">
                                        <input type="checkbox" id="ques1__opt1" role="checkbox"
                                               data-telemetry-id="auto_report_cb"/>
                                        <label for="ques1__opt1" id="lab_ques1__opt1">option 1</label>
                                        <br> <!-- ques1-option1 -->
                                        <input type="checkbox" id="ques2__opt2" role="checkbox"
                                               data-telemetry-id="auto_report_cb"/>
                                        <label for="ques2__opt2" id="lab_ques2__opt2">option 2</label>
                                        <br> <!-- ques1-option2 -->
                                        <input type="checkbox" id="ques3__opt3" role="checkbox"
                                               data-telemetry-id="auto_report_cb"/>
                                        <label for="ques3__opt3" id="lab_ques3__opt3">option 3</label>
                                    </p>
                                </div> <!-- question1 -->
                            </div>
                            <div class="form-group clearfix l__footer">
                                <button type="submit" class="btn btn-primary float-right ml-3" name="check" id="check">
                                    Check
                                </button>
                                <button type="submit" class="btn btn-primary float-right" name="redo" id="redo"><i
                                            class="fas fa-redo mr-1"></i>Re-do
                                </button>
                            </div>
                        </form>
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
    </div>
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
    {{--</div>  <!-- container -->--}}
@stop
