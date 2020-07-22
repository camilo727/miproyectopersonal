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
                <p> Agrega los usuarios que quiera que le administre</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Agregar usuarios
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?php echo base_url(); ?>index.php/Admini_Con/Agregar_tallaje" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">TALLA</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control" placeholder="Ejemplo: S" name="talla" id="">
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
                <h6 class="m-0 font-weight-bold text-dark">TALLA</h6>
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Esta talla <strong>¡ YA EXISTE !</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php } ?>
                <?php if ($this->session->flashdata('guardar')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Ingreso la talla <strong>¡ EXITOSAMENTE!</strong>
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
                                <th>Tallas</th>
                                <th>Modificar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($traer_talla as $traer) { ?>
                                <tr>
                                    <td><?php echo $traer->Id_talla ?></td>
                                    <td><?php echo $traer->talla ?></td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal<?php echo $traer->Id_talla ?><?php echo $traer->talla ?>">
                                            Modificar
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal<?php echo $traer->Id_talla ?><?php echo $traer->talla ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="<?php echo base_url(); ?>index.php/Admini_Con/modificar_tallaje" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modificar</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Desea modificaresta talla <b><?php echo $traer->talla ?></b></p>
                                                            <input type="text" class="form-control" name="talla" value="<?php echo $traer->talla ?>">
                                                            <input type="hidden" name="Id_talla" value="<?php echo $traer->Id_talla ?>">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <input type="submit" class="btn btn-warning" value="Modificar">
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