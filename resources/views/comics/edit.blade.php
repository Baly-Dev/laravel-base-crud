@extends('layouts.default')

@section('title', 'Update')
@section('css')
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
@endsection
@section('content')
    <section id="first-section">
        <div class="container">
            <h1>Update</h1>
        </div>
    </section>
    <section id="second-section">
        <div class="container">
            @include('components.comic_update_form')
        </div>
    </section>
@endsection