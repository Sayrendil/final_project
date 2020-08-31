@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="{{ route('category.store') }}" method="post">
					@csrf
					
					<div class="form-group">
						<label for="name">Наименование</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="name">Цена</label>
						<input type="number" class="form-control" name="price">
					</div>
					<div class="form-group">
						<label for="name">Выбор Дочерней категории</label>
						<select name="parent_id" id="parent_id" class="form-control">
							@foreach($categories as $categoryObj)
							<option value="{{ $categoryObj->id }}">{{ $categoryObj->parent_id }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="name">Описание</label>
						<textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<button class="btn btn-info mb-5" type="submit">Добавить</button>
				</form>
			</div>
		</div>
	</div>
@endsection