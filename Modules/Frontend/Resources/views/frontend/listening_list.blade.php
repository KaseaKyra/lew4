<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 2:34 PM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    listening lesson list
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-5 bgc-2">
                    <div class="col-md-4 text-center">
                        <img src="img/monster on website-01.png">
                    </div>
                    <div class="col-md-8 my-auto">
                        Songs <br>
                        Do you like listening to songs in English? Singing songs is a great way
                        to get better at speaking English and we have lots of great songs for you to enjoy. Listen to
                        songs, print activities and post comments!
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center hvr-grow">
                        <a href="" class="td">
                            <img src="img/s1.jpg" alt="" class="img-thumbnail l__img img-bd-cl">
                            <p class="my-3 font-weight-bold hd_font">A bear named Sue</p>
                        </a>
                    </div>
                    <div class="col-md-6 text-center hvr-grow">
                        <a href="" class="td">
                            <img src="img/s1.jpg" alt="" class="img-thumbnail l__img img-bd-cl">
                            <p class="my-3 font-weight-bold hd_font">A bear named Sue</p>
                        </a>
                    </div>
                </div>
                <!-- PAGINATION -->
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
                </div>
            </div>
            <div class="col-md-3">
                <div class="card img-bd-cl">
                    <div class="card-header text-uppercase font-weight-bold bgc-3 img-bd-cl">
                        Featured
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item img-bd-cl">Cras justo odio</li>
                        <li class="list-group-item img-bd-cl">Dapibus ac facilisis in</li>
                        <li class="list-group-item img-bd-cl">Vestibulum at eros</li>
                        <li class="list-group-item img-bd-cl">Cras justo odio</li>
                        <li class="list-group-item img-bd-cl">Dapibus ac facilisis in</li>
                        <li class="list-group-item img-bd-cl">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> {{--container--}}
@stop

