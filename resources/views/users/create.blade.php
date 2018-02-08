@extends('users.layout.main')

@section('content')
	<div class="container">
		<h1 class="text-center">Creacion de Usuarios</h1>
		<hr>
		<form action="{{ route('users.store') }}" method="POST">
			<div class="form-group">
				{{ csrf_field() }}
				<label for="name">Nombre:</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Ingrese nombre" autofocus required><br>
			</div>
			<div class="form-group">
				<label>Correo</label>
				<input type="email" name="email" class="form-control" placeholder="Ingrese Correo" required><br>
			</div>
			<div class="form-group">
				<label>Contraseña</label>
				<input type="password" name="password" class="form-control" placeholder="Ingrese Contraseña" required><br>
			</div>
			<div class="form-group">
				<label>Confirmar Contraseña</label>
				<input type="password" name="password_confirmation" class="form-control" placeholder="Repetir Contraseña" required><br>
			</div>

			<input type="submit" value="Registrar" class="btn btn-success btn-lg">
		</form>
	</div>
@endsection