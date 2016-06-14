@extends('templates.dashboard')

@section('titulo')
Usuario {{ $user->name }}
@endsection

@section('miga')

<div class="nav-wrapper right blue-text">
	<div class="col s12 blue-text">
		<a href="{{ route('correo.index') }}" class="breadcrumb blue-text text-darken-2">Correspondencia</a>
		<a href="{{ route('user.index') }}" class="breadcrumb blue-text text-darken-2">Usuarios</a>
		<a href="{{ route('user.show', $user->id) }}" class="breadcrumb blue-text text-darken-2">{{ $user->name }}</a>
	</div>
</div>

@endsection

@section('content')

<div class="section white z-depth-1" style="padding:25px 25px 25px 25px;">
	<div class="row">
		<div class="container">
			<ul >
				<li>
					<h5 class="blue-text">Nombre</h5>
					<p>{{ $user->name }}</p>
				</li>
				<div class="divider"></div>
				<li>
					<h5 class="blue-text">Correo electronico</h5>
					<p>{{ $user->email }}</p>
				</li>
				<div class="divider"></div>
				<li>
					<h5 class="blue-text">Perfil</h5>
					<p>{{ $user->type }}</p>
				</li>
				<div class="divider"></div>
			</ul>

		</div>
	</div>
</div>


<div class="fixed-action-btn" style="bottom: 24px; right: 24px;">
	<a class="btn-floating btn-large red">
		<i class="material-icons">menu</i>
	</a>
	<ul>
		<li>
			{{ Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'delete')) }}
			<button class="btn-floating red" type="submit" onclick="return confirm('¿Esta seguro de querer eliminar el registro?')" ><i class="material-icons">delete</i></button>
			{{ Form::close() }}
		</li>
		<li><a class="btn-floating blue" href="{{ route('user.edit', $user->id) }}"><i class="material-icons">mode_edit</i></a></li>
	</ul>
</div>




@endsection