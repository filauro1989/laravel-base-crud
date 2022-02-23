@extends('layouts.base')

@section('documentTitle')
    Inserisci Comic
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.store')}}" method="post">
                @csrf
                @method('POST')
                    <div class="input-group mb-3">
                        <span class="input-group-text text-uppercase">title</span>
                        <input type="text" class="form-control" id="title" name="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text text-uppercase">description</span>
                        <input type="text" class="form-control" id="description" name="description" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text text-uppercase">image url</span>
                        <input type="text" class="form-control" id="thumb" name="thumb" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text text-uppercase">price</span>
                        <input type="number" class="form-control" id="price" name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text text-uppercase">series</span>
                        <input type="text" class="form-control" id="series" name="series" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text text-uppercase">sale date</span>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text text-uppercase">type</span>
                        <input type="text" class="form-control" id="type" name="type" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <button class="btn btn-primary" type="submit">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection