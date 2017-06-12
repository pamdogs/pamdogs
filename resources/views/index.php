<!DOCTYPE html>
<html lang="es" ng-app="Pamdogs">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PamDogs - </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link href="css/business-frontpage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="css/form.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:#f1f1f1">


      <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="/">Inicio</a>
       <a href="/registro">Regístrate</a>
       <a href="/login">Iniciar Sesión</a>
       <a href="#">Contacto</a>
      </div>


    <div id="main">

      <!-- Navigation -->
      <nav id="nav-top" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
                  <ul class="nav navbar-nav">
                    <a href="/"><img id="logo" src="img/img5.png"></a>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="user-info"><span><b>José Requena</b> <img class="avatar-menu" src="img/user-39x39.png" alt="user-avatar"></span></li>
                    <li><span id="button-menu" class="glyphicon glyphicon-menu-hamburger" onclick="openNav()"></span></li>
                  </ul>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>


      <!-- section content -->

      <div ui-view></div>


      <!-- Footer -->
      <footer>
        <div class="container-fluid">


          <div class="row">
              <div class="col-lg-2">
                <img src="img/bombillo.png" class="center-block">
              </div>
              <div class="col-lg-8">
                <div class="col-lg-4">
                  <img src="img/house.png" class="center-block">
                  <p class="text-center bold">Acerca de PamDogs</p>
                  <ul class="text-center">
                    <li><a href="#">Nuestra Historia</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                  </ul>
                </div>
                <div class="col-lg-4 text-center">
                  <img src="img/pamdogs_footer.png" class="center-block">
                  <p class="bold">CONTÁCTANOS</p>
                  <p>+57 310-7767012</p>
                  <p>+575-3037010</p>
                  <p>servicios@pamdogs.com</p>
                  <p class="text-center"><img src="img/facebook_footer.png" alt=""><img src="img/ig_footer.png" alt=""></p>
                </div>
                <div class="col-lg-4">
                  <img src="img/map-location.png" class="center-block">
                  <p class="text-center bold">Ciudades Disponibles</p>
                  <ul class="text-center">
                    <li>Bogotá</li>
                    <li>Barranquilla</li>
                    <li>Medellín</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2">
                <img src="img/arrow.png" class="center-block">
                <img src="img/google-play-badge.png" class="center-block">
                <img src="img/icon-itunes-app-store.png" class="center-block">
              </div>
          </div>
          <!-- /.row -->
        </div>
      </footer>

    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom -->
    <script src="js/custom.js"></script>
    <script src="js/sweetalert.js"></script>

    <!-- AngularJS -->
    <script src="app/components/angular.min.js"></script>
    <script src="app/components/angular-route.min.js"></script>
    <script src="app/components/angular-resource.min.js"></script>
    <script src="app/components/angular-animate.min.js"></script>
    <script src="app/components/angular-messages.min.js"></script>
    <script src="app/components/angular-ui-router.min.js"></script>
    <script src="app/components/satellizer.min.js"></script>
    <script src="app/components/SweetAlert.min.js"></script>

    <script src="app/app.js"></script>


    <script src="app/controllers/main.js"></script>
    <script src="app/controllers/authController.js"></script>
    <script src="app/services/MainService.js"></script>



</body>

</html>
