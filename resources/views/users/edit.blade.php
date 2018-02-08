@extends('users.layout.main')

@section('content')
	<h1>Editar a {{ $user->name }}</h1>
	<form action="{{ route('users.update' , $user->id) }}" method="POST">
		{{ method_field('PUT') }}
		{{ csrf_field() }}

		<label>Nombre:</label>
		<input type="text" name="name" value="{{ $user->name }}" autofocus required><br>

		<label>Correo</label>
		<input type="email" name="email" value="{{ $user->email }}" required><br><br>

		<input type="submit" value="Editar" class="btn btn-warning btn-lg">
	</form>
@endsection