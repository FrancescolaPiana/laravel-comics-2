@extends('layouts.app')

@section('content')
<div class="space">
    <div class="container">
        {{-- @foreach ($comic as $obj)
            <div class="carta">
                <div class="img">
                    <img src="{{$obj['thumb']}}" alt="">
                </div>
                <h5 class="text-white">{{$obj['title']}}</h5>
            </div>
        @endforeach --}}
    </div>
    <div class="loadmore">
        <a href="">load more</a>
    </div>
        <span class="fly">current series</span>
</div>
@endsection