@extends('templates.dashboard')

@section('titulo')
Correspondencia
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
<script>
	@foreach($errors->all() as $error)

	Materialize.toast('{{ $error }}', 10000);

	@endforeach
</script>
@endif

<div class="section white z-depth-1" style="padding:25px 25px 0px 25px;">
	<div class="row">
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s6"><a href="#test1">Sin recibir</a></li>
					<li class="tab col s6"><a href="#test2">Recibidos</a></li>

				</ul>
			</div>
			<div id="test1" class="col s12">Test 1</div>
			<div id="test2" class="col s12">Test 2</div>


		</div>

	</div>
</div>

@endsection