<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PamDogs - @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="{{ url('css/business-frontpage.css') }}" rel="stylesheet">
    <link href="{{ url('css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:#f1f1f1">

    @section('sidebarnav')
      <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="#">Inicio</a>
       <a href="#">Regístrate</a>
       <a href="#">Iniciar Sesión</a>
       <a href="#">Contacto</a>
      </div>

    @show
    <div id="main">
      @section('menubar')
      <!-- Navigation -->
      <nav id="nav-top" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <!--<div class="navbar-header">
                  <img src="img/img5.png" width="136" height="36"></a>
              </div>-->
              <!-- Collect the nav links, forms, and other content for toggling -->
              <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->

                  <ul class="nav navbar-nav">
                    <img id="logo" src="img/img5.png"></a>
                      <!--<li>
                          <a href="#">Inicio</a>
                      </li>
                      <li>
                          <a href="{{ route('registro.index') }}">Registrate</a>
                      </li>
                      <li>
                          <a href="#">Iniciar Sesion</a>
                      </li>
                      <li>
                          <a href="#">Contacto</a>
                      </li>-->
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="user-info"><span><b>José Requena</b> <img class="avatar-menu" src="{{ url('img/user-39x39.png') }}" alt="user-avatar"></span></li>
                    <li><span id="button-menu" class="glyphicon glyphicon-menu-hamburger" onclick="openNav()"></span></li>
                  </ul>
              <!--</div>-->
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>
      @show


      @yield('content')


      @section('footer')
      <!-- Footer -->
      <footer>
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; Pamdogs 2017</p>
              </div>
          </div>
          <!-- /.row -->
      </footer>
      @show
    </div>
    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!-- Custom -->
    <script src="{{ url('js/custom.js') }}"></script>

</body>

</html>
