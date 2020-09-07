@extends('layouts.app')

@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                  <a href="{{ route('product.create') }}" class="btn btn-info">Создать продукт</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Категории</th>
                        <th scope="col">buttons</th>
                      </tr>
                    </thead>
                    <tbody> 
                    @foreach($products as $product)
                      <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>
                          <a href="{{ route('product.edit', $product) }}" class="btn btn-warning btn-xs">Ред.</a>
                          <form action="{{ route('product.destroy', $product) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Удалить</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection