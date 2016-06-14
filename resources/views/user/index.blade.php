@extends('templates.dashboard')

@section('titulo')
Usuarios
@endsection

@section('miga')

<div class="nav-wrapper right blue-text">
	<div class="col s12 blue-text">
		<a href="{{ route('correo.index') }}" class="breadcrumb blue-text text-darken-2">Correspondencia</a>
		<a href="{{ route('user.index') }}" class="breadcrumb blue-text text-darken-2">Usuarios</a>
	</div>
</div>

@endsection

@section('content')

<div class="section white z-depth-1" style="padding:25px 25px 25px 25px;">
	<div class="row">

		<table class="bordered highlight responsive-table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Tipo</th>
					<th>Fecha de registro</th>
					<th class="center-align">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{ $user->name}}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->type }}</td>
					<td>{{ $user->created_at }}</td>
					<td class="center-align">
						<a class="btn-floating red" href="{{ route('user.show', $user->id) }}"><i class="fa fa-eye"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>


	</div>
</div>

<div class="fixed-action-btn" style="bottom: 24px; right: 24px;">
	<a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('user.create') }}"><i class="material-icons">add</i></a>
</div>

@endsection