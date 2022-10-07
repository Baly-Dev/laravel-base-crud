@extends('layouts.default')

@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
    <section id="first-section">
        <div class="container">
            <h1>Home</h1>
        </div>
    </section>
@endsection