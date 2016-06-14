		<div class="row">

			<div class="input-field col s6">
				<i class="fa fa-credit-card-alt prefix" aria-hidden="true"></i>
				{!! Form::text('identificador', null, array('class'=>'validate', 'required'=>true)) !!}
				{!! Form::label('identificador', 'ID') !!}
			</div>

		</div>
		<div class="row">
			<div class="input-field col s12">
				<i class="fa fa-paper-plane prefix" aria-hidden="true"></i>
				{!! Form::text('destinatario', null, array('class'=>'validate', 'required'=>'required')) !!}
				{!! Form::label('destinatario', 'Destinatario') !!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
			<i class="fa fa-comment-o prefix" aria-hidden="true"></i>
				{!! Form::textarea('comment', null, array('class' => 'materialize-textarea','id'=>'comment', 'length'=>"120")) !!}
				{!! Form::label('comment', 'Comentario') !!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::checkbox('leida', '1', null ,['id'=>'leida']) !!}
				{!! Form::label('leida', 'Recibida') !!}
			</div>
		</div>
