@extends('layouts.main')
@section('content')
<button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('projet') }}"> &#x21A9; STEP BACK</a></button>
<div class="mt-5">
    <div class="container w-50 d-flex flex-column justify-content-cente mb-3">
        <ol class="breadcrumb gap-3">
            <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
            <li><p>/</p></li>
            <li> <a style="text-decoration: none; color:black;" href="{{ route('projet') }}">Réglages Porfolio</a> </li>
            <li><p>/</p></li>
            <li class="active">Info Projet</li>
    
        </ol>
       </div>
    <div class="container w-50 border d-flex flex-column justify-content-cente bg-warning mb-3">
        <h4> Projet n° {{ $projet->id }}</h4>
    </div>
    <div class="container w-50 border d-flex flex-column align-items-center align-middle gap-3">
        <h2 class="my-3"> {{ $projet->title }}</h2> 
        <img src="{{ asset($projet['img']) }}" alt="" class="img-fluid">
        <p class="d-flex justify-content-center" style= "text-align: center" >{{ $projet['text'] }}</p>
    </div>
</div>
@endsection