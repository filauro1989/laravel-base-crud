@extends('layouts.base')

@section('documentTitle')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card w-50 d-flex align-items-center">
                    <div class="h1">{{ $comic->title }}</div>
                    <p class="text-center">{{ $comic->description }}</p>
                    <img class="w-50" src="{{ $comic->thumb }}" alt="">
                    <h2>{{ $comic->price }}</h2>
                    <h3>{{ $comic->series }}</h3>
                    <h3>{{ $comic->sale_date }}</h3>
                    <h3>{{ $comic->type }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection