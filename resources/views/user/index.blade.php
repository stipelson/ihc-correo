@extends('templates.dashboard')

@section('titulo')
<i class="fa fa-users" aria-hidden="true"></i> Usuarios
@endsection

@section('miga')

<div class="nav-wrapper right blue-text">
	<div class="col s12 blue-text">
		<a href="#!" class="breadcrumb blue-text text-darken-2">First</a>
		<a href="#!" class="breadcrumb blue-text text-darken-2">Second</a>
		<a href="#!" class="breadcrumb blue-text text-darken-2">Third</a>
	</div>
</div>

@endsection

@section('content')

<div class="section white z-depth-1" style="padding:25px 25px 25px 25px;">
	<div class="row">

		<table class="bordered striped highlight responsive-table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Tipo</th>
					<th>Fecha de registro</th>
					<th class="text-center">Ver</th>
					<th class="text-center">Borrar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{ $user->name}}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->type }}</td>
					<td>{{ $user->created_at }}</td>
					<td class="text-center"><a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-xs">
						<i class="fa fa-eye"></i></a>
					</td>
					<td class="text-center"><a href="{{ route('user.destroy', $user->id) }}"
						onclick="return confirm('¿Esta seguro de querer eliminar el registro?')" class="btn btn-danger btn-xs">
						<i class="fa fa-trash"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
			</table>


	</div>
</div>


@endsection