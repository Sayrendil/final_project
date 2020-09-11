@extends('layouts.app')

@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                {{-- @can('categories.*') --}}
                  <a href="{{ route('category.create') }}" class="btn btn-info">Создать категорию</a>
                {{-- @endcan --}}
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Parent</th>
                        <th scope="col">Config</th>
                      </tr>
                    </thead>
                    <tbody> 
                    @foreach($categories as $category)
                      <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                          @foreach($category->children as $categoryItem)
                              {{ $categoryItem->name.". " }}
                          @endforeach
                        </td>
                        <td>
                          {{-- @can('categories.*') --}}
                          <a href="{{ route('category.edit', $category) }}" class="btn btn-warning btn-xs">Ред.</a>
                          <form action="{{ route('category.destroy', $category) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Удалить</button>
                          </form>
                          {{-- @endcan --}}
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection