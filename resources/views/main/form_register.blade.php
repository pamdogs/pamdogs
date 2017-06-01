@extends('main.template')

@section('title', 'Registrate')

@section('css')
  <link href="{{ url('css/form.css') }}" rel="stylesheet">

	<!-- Website Font style -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
@endsection

@section('content')
  <div class="container">
  	<div class="row main">
  		<div class="panel-heading">
        <div class="panel-title text-center">
        </div>
      </div>
  		<div class="main-login main-center">
  			<h1 class="title">Regístrate</h1>
  			<hr class="hr"/>
  			<button class="btn boton-facebook btn-lg btn-block login-button" type="submit">Resgistrate con Facebook</button>
  			<h6 align="center">Tomaremos algunos datos de tu perfil de Facebook para realizar tu registro.</h6>
  			<hr class="hr hr1" align="center" />
  			<center>
  				<form class="form-horizontal" method="post" action="#">
  					<div class="form-group">
  						<div class="col-lg-10">
  							<div class="input-group">
  								<input align="center" type="text" class="form-control" name="email" id="email"  placeholder="Direccion de Email"/>
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="col-lg-10">
  							<div class="input-group">
  								<input type="password" class="form-control" name="password" id="password"  placeholder="Constraseña"/>
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="col-lg-10">
  							<div class="input-group">
  								<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirmar contraseña"/>
  							</div>
  						</div>
  					</div>
  					<br>
  					<div class="form-group ">
  						<button type="button" class="btn boton btn-lg btn-block login-button"><strong>Registrar</strong></button>
  						<h6 align="center">¿Ya eres miembro? <a href="#">Accede aqui</a></h6>
  						<br>
  						<h6 align="center">Al registrarte estás aceptando nuestros <a href="#">Términos y Condiciones</a> al igual que nuestras <a href="#">Política de Privacidad</a>.</h6>
  					</div>
  				</form>
  			</center>
  		</div>
  	</div>
  </div>
@endsection
