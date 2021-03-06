@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12"> 
                {{-- @can('posts.*') --}}
                  <a href="{{ route('post.create') }}" class="btn btn-info">Создать Постер</a>
                {{-- @endcan --}}
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Кнопки</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                      <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>
                          @can('posts.*')
                            <a href="{{ route('post.edit', $post) }}" class="btn btn-warning">Ред.</a>
                            <form action="{{ route('post.destroy', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                          @endcan
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection