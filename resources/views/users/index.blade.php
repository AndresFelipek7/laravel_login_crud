@extends('users.layout.main')

@section('content')
	<div class="container text-center">
		<h1>Bievenido al Menu Principal</h1>
		<h2>CRUD de Usuarios</h2>
		@if(session()->has('info'))


		@endif
		<hr>
		<a href="{{ route('users.create') }}" class="btn btn-primary btn-lg">Crear Usuario</a>
		<hr>
		<table class="table table-striper">
			<thead>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>EMAIL</th>
				<th>ACCION</th>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a href="{{ route('users.edit' , $user->id) }}" class="btn btn-warning">Editar</a>
							<a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $users->render() }}
	</div>

@endsection