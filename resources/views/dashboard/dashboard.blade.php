@extends('layouts.master')
@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
    <br>

    <img src="{{ asset('tema/dist/img/bj1.jpg') }}" >
    <!-- <button class="btn-flat"> Buy </button> -->
    <img src="{{ asset('tema/dist/img/bj2.jpg') }}" >
    <img src="{{ asset('tema/dist/img/bj3.jpg') }}" >
    <img src="{{ asset('tema/dist/img/bj4.jpg') }}" >
    <img src="{{ asset('tema/dist/img/bj5.jpg') }}" >
    <img src="{{ asset('tema/dist/img/cl1.jpg') }}" >
    <img src="{{ asset('tema/dist/img/cl2.jpg') }}" >

@endsection

