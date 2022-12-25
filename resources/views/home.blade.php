@extends('layouts.app')

@section('content')
<div class="space">
    <div class="container">
        @foreach ($comics as $comic)
            <div class="carta">
                <div class="img">
                    <img src="{{$comic['url']}}" alt="">
                </div>
                <h5 class="text-white">{{$comic['title']}}</h5>
            </div>
        @endforeach
    </div>
    <div class="loadmore">
        <a href="">load more</a>
    </div>
        <span class="fly">current series</span>
</div>
@endsection