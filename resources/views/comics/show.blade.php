@extends('layouts.base')

@section('documentTitle')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="h1">{{ $comic->title }}</div>
                    <p>{{ $comic->description }}</p>
                    <img class="w-25" src="{{ $comic->thumb }}" alt="">
                    <h2>{{ $comic->price }}</h2>
                    <h3>{{ $comic->series }}</h3>
                    <h3>{{ $comic->sale_date }}</h3>
                    <h3>{{ $comic->type }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection