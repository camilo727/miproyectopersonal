<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mi tienda</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/css/styles.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-white">
<header id="header">
    <nav class="menu ">
      <div class="logo-box">
        <h1><a href="#">logo</a></h1>
        <span class="btn-menu"><i class="fas fa-bars"></i></span>
      </div>

      <div class="list-container">
        <ul class="lists nav nav-pills">
          <li class="nav-item">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar.." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-danger" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url(); ?>index.php/Cliente_Con/Hombre">Hombres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Mujers</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Junior & KIDS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Niños</a>
              <a class="dropdown-item" href="#">Niñas</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="#">
              <img src="../../assets/img/carrito.png" width="30" height="30">
              <span class="badge badge-danger badge-counter">0</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/register_con/login">
              <img src="../../assets/img/iniciar_secion.jpg" width="30" height="30">
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Olvido su contraseña</h1>
                                        <p class="mb-4">Enviaremos un correo electrónico para recuperar su contraseña!</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Restableser contraseña
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                    <a class="small" href="<?php echo base_url(); ?>index.php/register_con/view_registre">Crea su Cuenta</a>
                                    </div>
                                    <div class="text-center">
                                    <a class="small" href="<?php echo base_url(); ?>index.php/register_con/login">inicio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>

</body>

</html>