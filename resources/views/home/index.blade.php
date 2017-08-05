@extends('layout')

@section('content')
    @foreach($posts as $post)
        <div class="col-md-12 post ">
            <h2 class="text-info">{{ $post['titulo'] }}</h2>
            <p>{{ $post['texto'] }}</p>
        </div>
    @endforeach
@stop