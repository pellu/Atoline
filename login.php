<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Atoline</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/png" href="img/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="img/favicon-160x160.png" sizes="160x160" />
  <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
  <link rel="apple-touch-icon-precomposed" href="img/favicon-180x180.png" />

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php">
        <img src="img/logo_w.png" width="150px"></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Connectez-vous pour utiliser Atoline</p>
        <form action="demo.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" value="Connexion" class="btn btn-primary btn-block btn-flat">
            </div>
          </div>
        </form>
        <a href="register.php" class="text-center">S'inscrire</a>
      </div>
    </div>

    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
      });
    </script>
  </body>
  </html>
