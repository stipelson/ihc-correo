		<div class="row">

			<div class="input-field col s6">
				<i class="material-icons prefix">account_circle</i>
				{!! Form::text('first_name', null, array('class'=>'validate', 'required'=>true)) !!}
				{!! Form::label('first_name', 'Nombre') !!}
			</div>
			<div class="input-field col s6">
				{!! Form::text('last_name', null, array('class'=>'validate', 'required'=>true)) !!}
				{!! Form::label('last_name', 'Apellido') !!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<i class="fa fa-lock prefix" aria-hidden="true"></i>
				{!! Form::password('password', array('class'=>'validate', 'required'=>'required')) !!}
				{!! Form::label('password', 'Contraseña') !!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix">email</i>
				{!! Form::email('email', null, array('class'=>'validate', 'required'=>true)) !!}
				{!! Form::label('email', 'Correo electronico') !!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::checkbox('admin', '1', null ,['id'=>'admin']) !!}
				{!! Form::label('admin', 'Administrador') !!}
			</div>
		</div><br>
		<div class="divider"></div>

		<div class="row">
			<div class="col m12">
				<p class="right-align">
					<a href="{{ route('user.index') }}" class="btn btn-large waves-effect waves-light white red-text text-darken-2">Cancelar
						<i class="fa fa-times right" aria-hidden="true"></i>
					</a>
					<button class="btn btn-large waves-effect waves-light green" type="submit" name="submit">Guardar
						<i class="material-icons right">send</i>
					</button>
				</p>
			</div>
		</div>