@extends('users.layout.main')

@section('content')
	<div class="container">
		<h1 class="text-center">Editar a {{ $user->name }}</h1>
		<form action="{{ route('users.update' , $user->id) }}" method="POST">
			{{ method_field('PUT') }}
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Nombre:</label>
				<input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}" autofocus required><br>
			</div>

			<div class="form-group">
				<label for="email">Correo</label>
				<input type="email" id="email" class="form-control" name="email" value="{{ $user->email }}" required><br><br>
			</div>

			<input type="submit" value="Editar" class="btn btn-warning btn-lg">
		</form>
	</div>
@endsection