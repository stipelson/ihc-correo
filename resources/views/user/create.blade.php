@extends('templates.dashboard')

@section('titulo')
Crear Usuario
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

@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible hidden" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>¡Error! </strong>
	@foreach($errors->all() as $error)

	<li>{!! $error !!}</li>

	@endforeach
</div>
@endif



<div class="section white z-depth-1" style="padding:25px 25px 0px 25px;">
	<div class="row">
		{!! Form::open(['route'=>'user.store', 'method'=>'POST', 'files' => true]) !!}
			<div class="row">
				<div class="input-field col s6">
					<input id="first_name" type="text" class="validate">
					<label for="first_name">Primer Nombre</label>
				</div>
				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Segundo Nombre</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="password" type="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="email" type="email" class="validate">
					<label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input type="checkbox" id="test5" />
					<label for="test5">Administrador</label>
				</div>
			</div><br>
			<div class="divider"></div>

			<div class="row">
				<div class="col m12">
					<p class="right-align">
						<button class="btn btn-large waves-effect waves-light" type="button" name="action">Guardar
							<i class="material-icons right">send</i>
						</button>
					</p>
				</div>
			</div>

		{!! Form::close() !!}
	</div>
</div>

@endsection