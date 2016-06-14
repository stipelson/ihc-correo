@extends('templates.dashboard')

@section('titulo')
 Crear Usuario
@endsection

@section('miga')

<div class="nav-wrapper right blue-text">
	<div class="col s12 blue-text">
		<a href="{{ route('correo.index') }}" class="breadcrumb blue-text text-darken-2">Correspondencia</a>
		<a href="{{ route('user.index') }}" class="breadcrumb blue-text text-darken-2">Usuarios</a>
		<a href="{{ route('user.create') }}" class="breadcrumb blue-text text-darken-2">Crear usuario</a>
	</div>
</div>

@endsection


@section('content')

@if(count($errors) > 0)
	<script>
	@foreach($errors->all() as $error)

	Materialize.toast('{{ $error }}', 10000);

	@endforeach
	</script>
@endif

<div class="section white z-depth-1" style="padding:25px 25px 0px 25px;">
	<div class="row">
		{!! Form::open(['route'=>'user.store', 'method'=>'POST', 'files' => true, 'class' => 'col s12']) !!}

			@include('user.partial.form_create')

		{!! Form::close() !!}
	</div>
</div>

@endsection