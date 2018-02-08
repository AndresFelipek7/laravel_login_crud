@extends('users.layout.main')

@section('content')
	<h1>Creacion de Usuarios</h1>
	<form action="{{ route('users.store') }}" method="POST">
		{{ csrf_field() }}
		<label>Nombre:</label>
		<input type="text" name="name" autofocus required><br>

		<label>Correo</label>
		<input type="email" name="email" required><br>

		<label>Contraseña</label>
		<input type="password" name="password" required><br>

		<label>Confirmar Contraseña</label>
		<input type="password" name="password_confirmation" required><br>

		<input type="submit" value="Registrar" class="btn btn-success btn-lg">
	</form>
@endsection