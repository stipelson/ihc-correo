@extends('templates.dashboard')

@section('titulo')
Correspondencia
@endsection

@section('miga')

<div class="nav-wrapper right blue-text">
	<div class="col s12 blue-text">
		<a href="{{ route('correo.index') }}" class="breadcrumb blue-text text-darken-2">Correspondencia</a>
	</div>
</div>

@endsection

@section('content')

<div class="section white z-depth-1" style="padding:25px 25px 25px 25px;">
	<div class="row">



	</div>
</div>

<div class="fixed-action-btn" style="bottom: 24px; right: 24px;">
	<a class="btn-floating btn-large waves-effect waves-light red" href="#"><i class="material-icons">add</i></a>
</div>

@endsection