@extends('layouts.app')

@section('content')
<section class="container text-dark py-3">
    <a href="{{route('comic.index')}}" class="text-uppercase text-decoration-none"><h3><i class="fa-solid fa-arrow-left"></i> Back</h3></a>
    <h1>{{$comic->title}}</h1>
    <div class="d-flex align-items-center">
        <img src="{{$comic->url}}" alt="">
        <div class="ps-4">
            <h3>{{$comic->series}} - {{$comic->price}}</h3>
            <p>{{$comic->description}}</p>
        </div>
    </div>
</section>
@endsection