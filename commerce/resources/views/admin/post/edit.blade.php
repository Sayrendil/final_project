@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('post.update', $post) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
                    </div>

                    <button class="btn btn-indigo"  type="submit">Изменить</button>
                </form>
            </div>
        </div>
    </div>

@endsection 