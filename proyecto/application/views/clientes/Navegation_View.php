<!DOCTYPE html>
<html lang="es">

<head>
    <title>Nombre de la empresa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Estilos Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500,700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Ir Arriba -->
    <div class="go-top">
        <span class="fas fa-angle-up"></span>
    </div>

    <!-- Menu de Navegacion -->
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
                        <a class="nav-link" href="<?php echo base_url();?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url();?>index.php/Cliente_Con/Hombre">Hombres</a>
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
                            <img src="assets/img/carrito.png" width="30" height="30">
                            <span class="badge badge-danger badge-counter">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/register_con/login">
                            <img src="assets/img/iniciar_secion.jpg" width="30" height="30">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    
    