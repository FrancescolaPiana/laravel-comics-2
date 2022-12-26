@extends('layouts.app')

@section('content')
<div class="space">
    <div class="container">
        @foreach ($comics as $comic)
        <a href="{{route('comic.show', $comic->id)}}">
            <div class="carta">
                <div class="img">
                    <img src="{{$comic['url']}}" alt="">
                </div>
                <h5 class="text-white">{{$comic['title']}}</h5>
            </div>
        </a>
        @endforeach
    </div>
    <div class="loadmore">
        <a href="{{route('comic.index')}}">load more</a>
    </div>
        <span class="fly">current series</span>
</div>
@endsection