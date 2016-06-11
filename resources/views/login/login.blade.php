@extends('templates.login')

@section('content')

<div class="container">
	<div class="row">
		<div class="col s12 m6 offset-m3">
			<div class="container">
				<h2 class="center-align">Login</h2>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="pass" type="password" class="validate">
								<label for="pass">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<p>
									<input type="checkbox" id="remember">
									<label for="remember">Remember me</label>
								</p>
							</div>
						</div>
						<div class="divider"></div>
						<div class="row">
							<div class="col m12">
								<p class="right-align">
									<button class="btn btn-large waves-effect waves-light" type="button" name="action">Login

									</button>
								</p>
							</div>
						</div>
					</form>
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