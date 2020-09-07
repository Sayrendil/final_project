@extends('layouts.app')

@section('content')
    <div class="row" style="background-color: #3c3c3c;">
        <div class="col-md-12">
            @foreach($posts as $post)
            <div class="jumbotron" style="background-color: #3c3c3c;;color: #fff;">
                <div class="container">
                    <h4 class="display-4 text-light">{{$post->title}}</h4>
                    <p class="lead"></p>
                    <hr class="my-4" style="background-color: #fff;">
                    <p class="text-light">{{ $post->content }}</p>
                </div>   
            </div>
            <hr class="my-4" style="background-color: #fff;">
            @endforeach 
        </div>
    </div>
@endsection
