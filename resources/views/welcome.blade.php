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

@if(count($errors) > 0)
<script>
	@foreach($errors->all() as $error)

	Materialize.toast('{{ $error }}', 10000);

	@endforeach
</script>
@endif


<div class="section white z-depth-1" style="padding:25px 25px 0px 25px;">

	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab col s5"><a href="#test1">Sin recibir</a></li>
				<li class="tab col s5"><a href="#test2">Recibidos</a></li>
				<li class="tab col s2 disabled"><a href="#test3">Disabled Tab</a></li>
			</ul>
		</div>
		<div id="test1" class="col s12"><br><br>
			<div class="row">
				<a href="{{ route('correo.todasleidas', 1) }}" class="waves-effect waves-light btn right">Marcar todos recibidos</a>
			</div>

			<ul class="collection">

				@foreach($correoSinLeer as $correo)

				<li class="collection-item avatar">
					<i class="fa fa-archive circle" aria-hidden="true"></i>
					<span class="grey-text">{{ $correo->identificador }}</span>
					<div class="row">
						<div class="col m3">
							<span class="title">Destinatario: {{ $correo->destinatario }}</span>
						</div>
						<div class="col m9">
							<p> {{ $correo->comment }} <br>
								Registrado por: <i class="tiny material-icons">email</i>{{ $correo->user->email }}
							</p>
						</div>
					</div>

					<a href="{!! route('correo.cambiarestado', $correo->id) !!}" class="secondary-content tooltipped black-text"  data-position="left" data-delay="50" data-tooltip="Marcar como recibida"><i class="fa fa-eye fa-2x"></i></a>

				</li>

				@endforeach
			</ul>
		</div>

		<div id="test2" class="col s12"><br><br>
			<ul class="collection">
				@foreach($correoLeido as $correo)
				<li class="collection-item avatar">
					<i class="fa fa-archive circle" aria-hidden="true"></i>
					<span class="grey-text">{{ $correo->identificador }}</span>
					<div class="row">
						<div class="col m3">
							<span class="title">Destinatario: {{ $correo->destinatario }}</span>
						</div>
						<div class="col m9">
							<p> {{ $correo->comment }} <br>
								Registrado por: <i class="tiny material-icons">email</i>{{ $correo->user->email }}
							</p>
						</div>
					</div>
					<a href="{!! route('correo.cambiarestado', $correo->id) !!}" class="secondary-content tooltipped" data-position="left" data-delay="50" data-tooltip="Marcar como no recibida"><i class="fa fa-eye fa-2x"></i></a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>

</div>

<!-- Modal Trigger -->
<div class="fixed-action-btn" style="bottom: 24px; right: 24px;">
	<a class="modal-trigger btn-floating btn-large waves-effect waves-light red" href="#modal1""><i class="material-icons">add</i></a>
</div>

<!-- Modal Structure create new correo-->
<div id="modal1" class="modal">
	{!! Form::open(['route'=>'correo.store', 'method'=>'POST', 'class' => 'col s12']) !!}
	<div class="modal-content">
		<h4>Nueva correspondencia</h4>
		<p>

			@include('correo.partial.form_create')

		</p>
	</div>
	<div class="modal-footer">
		<button type="submit" class="waves-effect btn-flat green white-text">Guardar</button>
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
	</div>
	{!! Form::close() !!}
</div>


<script type="text/javascript">
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
   });
  </script>
  @endsection