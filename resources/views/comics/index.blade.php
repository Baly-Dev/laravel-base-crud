@extends('layouts.default')

@section('title', 'Comics')
@section('css')
    <link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection
@section('content')
    <section id="first-section">
        <div class="container">
            <h1>Comics</h1>
        </div>
    </section>
    <section id="second-section">
        <div class="container">
            <a href="{{route('comics.create')}}">Create</a>
            <ul class="comics-group">
                @foreach($comics as $comic)
                    @include('components.comic_record')
                @endforeach
            </ul>
        </div>
    </section>
@endsection