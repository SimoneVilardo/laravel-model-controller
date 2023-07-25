@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @forelse ($comics as $comic)
                    <div class="col-12">
                        
                    </div>
                @empty
                    <div class="col-12">
                        Sorry no COMIC found!
                    </div>
                @endforelse
            </div>
        </div>
    </div>        
@endsection