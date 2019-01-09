<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 2:35 PM
 */
?>

@extends('frontend::frontend.layouts.master')

@section('title')
    grammar
@stop

@section('content')
    {{ substr(strip_tags($grammar->content), 0) }}
@stop
