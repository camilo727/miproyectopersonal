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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Agregar tipo de sexo
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?php echo base_url(); ?>index.php/Admini_Con/agregar_generos" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sexo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Digirte el tipo de sexo que quiere alcansar como son: hombre, mujeres, niño, niña</p>
                                    <input type="text" class="form-control" placeholder="Por ejemeplo: Niño" name="genero" id="">
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
                <h6 class="m-0 font-weight-bold text-dark">GENERO</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>PRENDA</th>
                                <th>Modificar</th>
                                <th>Elminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($traer_genero as $traer) { ?>
                                <tr>
                                    <td><?php echo $traer->Id_genero ?></td>
                                    <td><?php echo $traer->Genero ?></td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal<?php echo $traer->Id_genero ?><?php echo $traer->Genero ?>">
                                            Modificar
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal<?php echo $traer->Id_genero ?><?php echo $traer->Genero ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="<?php echo base_url(); ?>index.php/Admini_Con/modificar_genero" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modificar</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Desea modificar <b><?php echo $traer->Genero ?></p></b>
                                                            <input type="text" class="form-control" name="genero" placeholder="Digite la prenda por cual quiere modificar">
                                                            <input type="hidden" name="Id_genero" value="<?php echo $traer->Id_genero?>">
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
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal1<?php echo $traer->Id_genero ?><?php echo $traer->Genero ?>">
                                            Eliminar
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modal1<?php echo $traer->Id_genero ?><?php echo $traer->Genero ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="<?php echo base_url(); ?>index.php/Admini_Con/eliminar_genero" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Desea elminar <b><?php echo $traer->Genero ?></b></p>
                                                            <input type="hidden" name="Id_genero" value="<?php echo $traer->Id_genero ?>">
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->