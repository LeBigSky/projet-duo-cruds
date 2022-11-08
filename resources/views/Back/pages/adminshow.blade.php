@extends('layouts.main')
@section('content')

<button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('backblog') }}"> &#x21A9;
    STEP BACK</a></button>

<div class="mt-5">
   <div class="container w-50 d-flex flex-column justify-content-cente mb-3">
    <ol class="breadcrumb gap-3">
        <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
        <li><p>/</p></li>
        <li> <a style="text-decoration: none; color:black;" href="{{ route('backblog') }}">Réglages Blog</a> </li>
        <li><p>/</p></li>
        <li class="active">Info Article</li>

    </ol>
   </div>
    <div class="container w-50 border d-flex flex-column justify-content-cente bg-warning mb-3">
        <h4> Article n° {{ $article->id }}</h4>
    </div>
    <div class="container w-50 border d-flex flex-column align-items-center align-middle gap-3">
        <h2 class="my-3"> {{ $article->title }}</h2> 
        <img src="{{ asset($article['img']) }}" alt="" class="img-fluid">
        <p class="d-flex justify-content-center" style= "text-align: center" >{{ $article['text'] }}</p>
    </div>
</div>
@endsection