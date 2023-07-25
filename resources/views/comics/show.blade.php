@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <img src="{{ $comic->thumb }}" alt="">
                <h2 class="text-danger fw-bold">{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <h3>Prezzo:<span class="fw-bold">{{ $comic->price }}</span></h3>
            </div>
        </div>
    </div>
@endsection