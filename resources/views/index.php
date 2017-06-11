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
       <a href="#">Iniciar Sesión</a>
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

      <div ng-view></div>


      <!-- Footer -->
      <footer>
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; Pamdogs 2017</p>
              </div>
          </div>
          <!-- /.row -->
      </footer>

    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom -->
    <script src="js/custom.js"></script>

    <!-- AngularJS -->
    <script src="app/components/angular.min.js"></script>
    <script src="app/components/angular-route.min.js"></script>
    <script src="app/components/angular-resource.min.js"></script>
    <script src="app/components/angular-animate.min.js"></script>
    <script src="app/components/angular-messages.min.js"></script>

    <script src="app/app.js"></script>
    <script src="app/router.js"></script>

    <script src="app/controllers/main.js"></script>
    <script src="app/services/MainService.js"></script>


</body>

</html>
