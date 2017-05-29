@extends('main.template')

@section('title', 'Inicio')

@section('content')
  <!-- Image Background Page Header -->
  <!-- Note: The background image is set within the business-casual.css file. -->
  <header class="business-header">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  </br></br><h1 style="color:black; font-size: 55px;"><strong>Un cuidador con un click.</strong></h1>
                  <div>
                      <h3 style="color:black; font-size: 30px; text-indent: 1em"><strong>Los mejores cuidadores de tu localidad</strong></h3>
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
              <h2 align="center"><strong>Busca</strong></h2><br>
              <img class="img-circle img-responsive img-center" src="img/img2.png" alt=""><br>
              <h3 style="font-family: comic sans" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in efficitur nunc. Nullam feugiat malesuada ipsum, ac semper nibh placerat nec</h3>
          </div>
          <div class="col-sm-4">
              <h2 align="center"><strong>Reserva y Paga</strong></h2><br>
              <img class="img-circle img-responsive img-center" src="img/img3.png" alt=""><br>
              <h3 style="font-family: comic sans" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in efficitur nunc. Nullam feugiat malesuada ipsum, ac semper nibh placerat nec</h3>
          </div>
          <div class="col-sm-4">
              <h2 align="center"><strong>Dueño y Mascota Felices</strong></h2><br>
              <img class="img-circle img-responsive img-center" src="img/img4.png" alt=""><br>
              <h3 style="font-family: comic sans" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in efficitur nunc. Nullam feugiat malesuada ipsum, ac semper nibh placerat nec</h3>
          </div>
      </div>
      <!-- /.row -->

      <hr>



  </div>
  <!-- /.container -->
@endsection
