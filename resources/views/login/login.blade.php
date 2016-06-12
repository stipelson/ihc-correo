@extends('templates.login')

@section('content')

@if (count($errors) > 0)
@foreach ($errors->all() as $err)
<script>
	Materialize.toast('{{ $err }}', 4000);
</script>
@endforeach
@endif

<div class="container">
	<div class="row">
		<div class="col s12 m6 offset-m3">
			<div class="container">
				<h2 class="center-align">TECATE</h2>
				<div class="row">
					{!! Form::open(['route'=>'authenticate', 'method'=>'POST']) !!}
						<div class="row">
							<div class="input-field col s12">
								{!!Form::email('email', null, array('class'=>'validate', 'required' => true))!!}
								{!!Form::label('email', 'Correo electrónico')!!}
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								{!!Form::password('password', ['required' => true, 'class'=> 'validate'])!!}
								{!!Form::label('password', 'Contraseña')!!}
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<p>
									<input type="checkbox" id="remember" name="remember" value="true" />
									<label for="remember">Recordarme</label>
								</p>
							</div>
						</div>
						<div class="divider"></div>
						<div class="row">
							<div class="col m12">
								<p class="right-align">
									<a class="left" href="{{ route('user.create') }}"> Crear una cuenta</a>
									<button class="btn btn-large waves-effect waves-light" type="submit" name="action">Login

									</button>
								</p>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class=" " style="bottom: 0px; right: 0px; position:fixed;">
	<a class="dropdown-button btn white black-text" href='#' data-activates='dropdown1'>
		Español <i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>

</div>

<ul id='dropdown1' class='dropdown-content'>
	<li><a href="#!">English</a></li>
</ul>



@endsection