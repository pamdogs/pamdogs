@extends('main.template')

@section('title', 'Inicio')

@section('css')
  <link href="{{ url('css/business-frontpage.css') }}" rel="stylesheet">
@endsection

@section('content')
  <!-- Image Background Page Header -->
  <!-- Note: The background image is set within the business-casual.css file. -->
  <header class="business-header">
      <div class="container">
          <div class="banner-text row">
              <div class="col-lg-12">
              <h1 class="paytone banner-title">Un cuidador con un click.</h1>
                  <div>
                      <h3 style="color:black; font-size: 30px;text-shadow:4px 0px 8px rgba(0,0,0,0.11);font-weight:bold;">Los mejores cuidadores de tu localidad</h3>
                  </div>
              </div>
          </div>
          <div id="buscador" class="row">
              <div class="col-lg-12">
                <input type="text" name="ubicacion" value="" placeholder="Direccion" class="input-buscador">
                <input type="date" name="desde" value="" placeholder="Desde" class="input-buscador">
                <input type="date" name="hasta" value="" placeholder="Hasta" class="input-buscador">
                <button type="button" name="button">Encuentra un cuidador</button>
              </div>
          </div>
      </div>

  </header>

  <!-- Page Content -->
  <div class="container">
      <hr>

      <div class="row">
          <div class="col-sm-4">
              <img class="img-circle img-responsive img-center" src="img/img2.png" alt="">
              <h2 align="center" style="font-weight:bold;">Busca el servicio que necesitas</h2>
              <h3 align="center">Revisa los perfiles y las calificaciones de cuidadores cerca de ti.</h3>
          </div>
          <div class="col-sm-4">
              <img class="img-circle img-responsive img-center" src="img/img3.png" alt="">
              <h2 align="center" style="font-weight:bold;">Reserva y paga un cuidador</h2>
              <h3 align="center">Llama y conoce al cuidador de tu preferencia.</h3>
          </div>
          <div class="col-sm-4">
              
              <img class="img-circle img-responsive img-center" src="img/img4.png" alt="">
              <h2 align="center" style="font-weight:bold;">Despreocúpate</h2>
              <h3 align="center">Recibirás fotos de tu mascota, póliza de seguro y atención al cliente 24/7.</h3>

          </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <h2 class="paytone" style="font-weight: bold">PamDogs garantiza tu tranquilidad mientras tu mascota esta fuera de casa.</h2>
        </div>
        <div class="col-xs-6">
          <img src="{{ url('img/shield-big.png') }}" class="img-responsive">
        </div>
        <div class="col-xs-6">

          
        </div>
      </div>

      <hr>



  </div>
  <!-- /.container -->
@endsection
