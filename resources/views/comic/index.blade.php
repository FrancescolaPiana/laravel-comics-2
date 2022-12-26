@extends('layouts.app')

@section('content')
<div class="space">
    <div class="container">
        <ul>
        @foreach ($comics as $comic)
        <li class="mrgb">
            <a href="{{route('comic.show', $comic->id)}}"class="text-white">{{$comic['title']}}</a>
        </li>
        @endforeach
        </ul>
    </div>
    <div class="loadmore">
        <a href="">add comics</a>
    </div>
    <span class="fly">current series</span>
</div>
@endsection