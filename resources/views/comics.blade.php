@extends('layouts.main')

@section('content')
<main>
    <div class="jumbotron"></div>


    <div class="container">
        <div class="currentSeries">
            <h3 class="text-light">Current Series</h3>
        </div>
        {{-- @include('cardComponent'); --}}

        @foreach($comics as $comic)
        <div class="card-box">
            <div class="card-container">
                <div class="cardItem">
                    <img src="{{$comic->image}}" alt="{{$comic->title}}">
                </div>
                <span class="comic-title text-light">{{$comic->title}}</span>
            </div>
        </div>
        @endforeach

    </div>
        <div class="loadMore">
            <a class="text-light" href="#">Load More</a>
        </div>

</main>

@endsection
