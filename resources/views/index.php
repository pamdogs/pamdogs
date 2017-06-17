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





    <div id="main" ng-controller="AuthController as auth">




      <!-- section content -->
      <div ui-view="header"></div>
      <div ui-view="content"></div>
      <div ui-view="footer"></div>



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
    <script src="app/components/ngStorage.min.js"></script>

    <script src="app/app.js"></script>


    <script src="app/controllers/main.js"></script>
    <script src="app/controllers/authController.js"></script>
    <script src="app/services/MainService.js"></script>



</body>

</html>
