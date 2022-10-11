@extends('layouts.default')

@section('title', 'Comic')
@section('css')
    <link rel="stylesheet" href="{{asset('css/comic.css')}}">
@endsection
@section('content')
    <section id="first-section">
        <div class="container">
            <div class="comic">
                <div class="head">
                    <h2 class="title">{{$comic->title}}</h2>
                </div>

                <div class="body">
                    <img class="thumb" src="{{$comic->thumb}}" alt="">
                    <div>
                        <div class="info">
                            <h3>{{$comic->series}} - </h3>
                            <h3>{{$comic->type}}</h3>
                        </div>
                        <p class="text">{{$comic->description}}</p>
                        <div class="edit">
                            <h4>Price: €{{$comic->price}}</h4>
                            <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection