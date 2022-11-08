@extends('layouts.main')
@section('content')
<div class="mt-5">
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