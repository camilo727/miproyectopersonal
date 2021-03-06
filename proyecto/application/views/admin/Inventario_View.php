<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>tienda</title>

    <!-- Custom fonts for this template-->

    <link href="../../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="../../../assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php
    $nombre = $this->session->userdata('Nombre');
    $Apellido = $this->session->userdata('Apellido');
    $rol = $this->session->userdata('rol');
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>index.php/Admini_Con/Admin_perfil">
                <div class="sidebar-brand-icon">
                    <?php echo $nombre; ?> <?php echo $Apellido; ?>
                </div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                CATEGORIA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Agregar</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin</h6>
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Admini_Con/Admin_categoria">Categoria</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Admini_Con/Admin_genero">Genero</a>
                        <a class="collapse-item" href="<?php echo base_url() ?>index.php/Admini_con/admin_foto">Producto</a>
                        <a class="collapse-item" href="<?php echo base_url() ?>index.php/Admini_con/admin_descuento">Descuento</a>
                        <a class="collapse-item" href="<?php echo base_url() ?>index.php/Admini_con/admin_tallaje">Tallaje</a>
                        <a class="collapse-item" href="<?php echo base_url() ?>index.php/Admini_con/admin_usuario">Usuarios</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#producto" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Lista Producto</span>
                </a>
                <div id="producto" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Producto:</h6>
                        <?php foreach ($traer_genero_nv as $value) { ?>
                            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Admini_Con/Producto_genero/<?php echo $value->Id_genero ?>"><?php echo $value->Genero; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#inventario" aria-expanded="true" aria-controls="collapsePages">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                    </svg>
                    <span>Lista inventario</span>
                </a>
                <div id="inventario" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">inventario:</h6>
                        <?php foreach ($traer_talla as $value) { ?>
                            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/Admini_Con/admini_inventario/<?php echo $value->Id_talla ?>"><?php echo $value->talla; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Ventas</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Producto</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar.." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar.." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    notificaciones
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    mensaje:
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../../../assets/img/peaple-3.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/register_con/login">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ONEIDA MARIA SANCHES ADMIN </h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">


                    </div>
                    <!-- Content Row -->

                    <div class="row">
                        <div class="container-fluid">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <?php foreach ($traer_una_talla as $value) { ?>
                                        <h6 class="m-0 font-weight-bold text-dark">Inventario del talla: <?php echo $value->talla ?>

                                        <?php  } ?> </h6>
                                </div>
                                <div class="card-body">
                                    <?php if ($this->session->flashdata('modificar')) { ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            Este producto del inventario haciodo modificado <strong>¡ EXITOXAMENTE !</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                    <?php } ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nombred del Producto</th>
                                                    <th>Foto del producto</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio de compra</th>
                                                    <th>Precio de venta </th>
                                                    <th>Talla</th>
                                                    <th>Descuento</th>
                                                    <th>Modificas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($traer_inventario as $value) { ?>
                                                    <tr>
                                                        <td><?php echo $value->Id_Inventario; ?></td>
                                                        <td>
                                                            <a data-toggle="modal" data-target="#exampleModal<?php echo $value->Id_producto ?>"> <?php echo $value->Nombre_Producto; ?></a>
                                                            <!-- Button trigger modal -->
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal<?php echo $value->Id_producto ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                        <div class="row no-gutters">
                                                                            <?php
                                                                            $Id_producto = $value->Id_producto;
                                                                            $producto = $this->Admin_model->traer_un_producto($Id_producto);
                                                                            ?>
                                                                            <div class="col-md-4">
                                                                                <img width="200px" height="200px" src="../../../assets/img/<?php echo $producto->Foto_primera; ?>" class="card-img" alt="...">
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title"><?php echo $producto->Nombre_Producto; ?></h5>
                                                                                    <p class="card-text">description: <?php echo $producto->Descripcion_producto; ?></p>
                                                                                    <p class="card-text">Categoria: <?php echo $producto->Categoria; ?></p>
                                                                                    <p class="card-text">Genero: <?php echo $producto->Genero; ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><img width="100px" height="90px" src="../../../assets/img/<?php echo $value->Foto_primera; ?>"></td>
                                                        <td><?php echo $value->Cantidad; ?></td>
                                                        <td><b>$</b><?php echo $value->Precio_Compra; ?></td>
                                                        <td><b>$</b><?php echo $value->Precio_venta; ?></td>
                                                        <td><?php echo $value->talla; ?></td>
                                                        <td><?php echo $value->descuento; ?> <b>%</b></td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?php echo $value->Id_Inventario; ?>">
                                                                Modificar
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal<?php echo $value->Id_Inventario; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <form action="<?php echo base_url()?>index.php/Admini_Con/Modificar_Inventario" method="post">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <input type="hidden" value=" <?php echo $value->Id_Inventario; ?>" name="Id_Inventario">
                                                                           
                                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                                    <b>Cantidades del elavoradas del producto: </b>
                                                                                    <input type="number" class="form-control" value="<?php echo $value->Cantidad; ?>" name="cantidad" />
                                                                                </div>
                                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                                    <b> Precio del producto en compra:</b>
                                                                                    <input type="number" class="form-control" value="<?php echo $value->Precio_Compra; ?>" step="any" name="precio_compra" />
                                                                                </div>
                                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                                    <b>Precio de venta del producto</b>
                                                                                    <input type="number" class="form-control" value="<?php echo $value->Precio_venta; ?>" step="any" name="precio_venta" />
                                                                                </div>
                                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                                    <b>Desea agregale descuento al producto:</b>
                                                                                    <select class="form-control" id="exampleFormControlSelect1" name="Id_descuento">
                                                                                        <option value="<?php echo $value->Id_descuento ?>"><?php echo $value->descuento ?><b>%</b></option>
                                                                                        <?php foreach ($traer_descuneto as $key) { ?>
                                                                                            <option value="<?php echo $key->Id_descuento ?>"><?php echo $key->descuento ?><b>%</b></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                                    <b>Seleciones la talla:</b>
                                                                                    <select class="form-control" id="exampleFormControlSelect1" name="Id_talla">
                                                                                        <option value="<?php echo $value->Id_talla ?>"><?php echo $value->talla ?></option>
                                                                                        <?php foreach ($traer_talla as $value) { ?>
                                                                                            <option value="<?php echo $value->Id_talla ?>"><?php echo $value->talla ?></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                <input type="submit"  class="btn btn-warning" value="Modificar">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <!-- Content Row -->
                    <div class="row">







                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Footer 
     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>-->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="../../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="../../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level plugins -->
    <script src="../../../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../assets/js/demo/chart-area-demo.js"></script>
    <script src="../../../assets/js/demo/chart-pie-demo.js"></script>
    <!-- Page level custom scripts -->
    <script src="../../../assets/js/demo/datatables-demo.js"></script>

</body>

</html>