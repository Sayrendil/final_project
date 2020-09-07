@extends('layouts.app')

@section('content')
	
	<div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-indigo">Опубликовать</button>
                </form>
            </div>
        </div>
    </div>
	
@endsection