@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('category.update', $category) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Наименование</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Выбрать родителя</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                            @foreach($category->children as $categoryParent)
                                <option value="{{ $categoryParent->id }}">{{ $categoryParent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="level">Уровень</label>
                        <input type="number" class="form-control" value="{{ $category->level }}" name="level">
                    </div>
                    <button class="btn btn-indygo" type="submit">Сохранить</button>
                </form>
            </div>  
        </div>
    </div>

@endsection