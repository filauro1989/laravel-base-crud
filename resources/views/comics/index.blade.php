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

    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($comic as $comics_item)
            <div class="card w-23 m-2 d-flex align-items-center rounded">
                <div class="wrapper w-100 d-flex flex-column align-items-center ps-2 pe-2 text-center">
                    <div class="product d-flex justify-content-center">
                        <a class="w-100" href="{{ route('comics.show', $comics_item)}}">
                            <img class="w-100 mt-2 rounded"
                                src="{{$comics_item['thumb']}}" 
                                alt="{{$comics_item['title']}}"
                            >
                        </a>
                    </div>
                    <h2 class="text-uppercase mt-5">{{ $comics_item['title'] }}</h2>
                    <p>{{ $comics_item['description'] }}</p>
                    <h2>{{ $comics_item['price'] }}</h2>
                    <h3>{{ $comics_item['series'] }}</h3>
                    <h3>{{ $comics_item['sale_date'] }}</h3>
                    <h3>{{ $comics_item['type'] }}</h3>
                    <a href="{{ route('comics.edit', $comics_item)}}" class="btn btn-primary mt-3 mb-3">Edit</a>
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