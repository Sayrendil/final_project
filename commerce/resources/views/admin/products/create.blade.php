@extends('layouts.app')

@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Наименование</label>
                        <input type="text" name="name" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="content">Описание</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Выбирите категорию для товара</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($Sharecategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn bt-indigo">Добавить</button>
                </form>
            </div>
        </div>
    </div>

@endsection