<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">ONEIDA MARIA SANCHES ADMIN </h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Approach -->
        <div class="card shadow mb-12">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">CONFIGURACION DE LOS ITEMS</h6>
            </div>
            <div class="card-body">
                <p> Agrege las tallas de los prenda que van a manejar</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Agregar usuario
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?php echo base_url(); ?>index.php/register_con/registre" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Usuarios</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        Nombre:
                                        <input type="text" class="form-control" name="nombre" required id="exampleFirstName" placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-12">
                                        Apellido
                                        <input type="text" class="form-control" name="apellido" required id="exampleLastName" placeholder="Apellido ">
                                    </div>
                                    <div class="col-sm-12">
                                        Correo:
                                        <input type="email" class="form-control" name="correo" required id="exampleInputEmail" placeholder="Correo  ">
                                    </div>
                                    <div class="col-sm-12">
                                        Contraseña:
                                        <input type="password" class="form-control" name="pass" required id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-12">
                                        Vuelva a escribir la contraseña:
                                        <input type="password" class="form-control" name="repit_pass" required id="exampleRepeatPassword" placeholder="Vuelva a escribir la contraseña">
                                    </div>
                                    <div class="col-sm-12">
                                        Usuario:
                                        <select class="form-control" id="exampleFormControlSelect1" name="id_roles">
                                            <option selected>Seleeciones el Usuario: </option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Cliente</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
                                    <input type="submit" class="btn btn-primary" value="Agregar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">USUARIO</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre del usuario</th>
                                <th>Apellido del usuario</th>
                                <th>Contraseña</th>
                                <th>Rol</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($traer_usuarios as $traer) { ?>
                                <tr>
                                    <td><?php echo $traer->Id_Usuarios ?></td>
                                    <td><?php echo $traer->Nombre ?></td>
                                    <td><?php echo $traer->Apellido ?></td>
                                    <td><?php echo $traer->New_pass ?></td>
                                    <td><?php echo $traer->rol ?></td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $traer->Id_Usuarios ?>">
                                            Eliminar
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?php echo $traer->Id_Usuarios ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="<?php echo base_url(); ?>index.php/Admini_Con/Eliminar_usuario" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Desea eliminar este usuario: <b><?php echo $traer->Nombre ?> <?php echo $traer->Apellido ?></b></p>
                                                            <input type="hidden" value="<?php echo $traer->Id_Usuarios ?>" name="Id_Usuarios">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                                        </div>
                                                    </div>
                                                </form>
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


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->