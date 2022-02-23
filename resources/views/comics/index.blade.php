@extends('layouts.base')

@section('documentTitle')
    Comics Home
@endsection

@section('content')

    <div class="row">
        <div class="col d-flex justify-content-center p-5">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Create New Comic</a>
        </div>
    </div>

    <div class="container d-flex flex-wrap">
        @foreach ($comic as $comics_item)
            <div class="card w-25 d-flex align-items-center">
                <div class="wrapper d-flex flex-column align-items-center">
                    <div class="product d-flex justify-content-center">
                        <a href="{{ route('comics.show', $comics_item)}}">
                            <img
                                src="{{$comics_item['thumb']}}" 
                                alt="{{$comics_item['title']}}"
                            >
                        </a>
                    </div>
                    <h2>{{ $comics_item['title'] }}</h2>
                    <p class="text-center">{{ $comics_item['description'] }}</p>
                    <h2>{{ $comics_item['price'] }}</h2>
                    <h3>{{ $comics_item['series'] }}</h3>
                    <h3>{{ $comics_item['sale_date'] }}</h3>
                    <h3>{{ $comics_item['type'] }}</h3>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center mt-3">
            {{ $comic->links() }}
        </div>
    </div>
@endsection