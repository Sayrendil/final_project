@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('product.update', $product) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Наименование</label>
                        <input type="text" value="{{ $product->name }}" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Выбрать родителя</label>
                        <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="level">Описание</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $product->content }}</textarea>
                    </div>
                    <button class="btn btn-indygo" type="submit">Сохранить</button>
                </form>
            </div>  
        </div>
    </div>

@endsection