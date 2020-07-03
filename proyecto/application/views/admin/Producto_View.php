    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ONEIDA MARIA SANCHES ADMIN </h1>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">agregar producto</h6>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar Foto
                        </button>

                        <form action="<?php echo base_url();?>index.php/Admini_Con/agregar_producto" method="post">
                            <b>Nombre del producto:</b>
                            <input class="col-xl-12 col-md-6 mb-4" type="text" required placeholder="Nombre del producto:" name="Nombre_Producto" id="">
                            <b>Descripcion del producto:</b>
                            <input class="col-xl-12 col-md-6 mb-4" type="text" required placeholder="Descripcion del producto:" name="Nombre_Descripcion" id="">
                            <b>Categoria:</b>
                            <select class="form-control" id="exampleFormControlSelect1" name="Id_categoria">
                                <option selected>Seleeciones el categoria: </option>
                                <?php foreach ($traer_prenda as $value) { ?>
                                    <option value="<?php echo $value->Id_Categoria; ?>"><?php echo $value->Categoria; ?></option>
                                <?php } ?>
                            </select>
                            <b>Genero:</b>
                            <select class="form-control" id="exampleFormControlSelect1" name="Id_genero">
                                <option selected>Seleeciones el genero: </option>
                                <?php foreach ($traer_genero as $value) { ?>
                                    <option value="<?php echo $value->Id_genero?>"><?php echo $value->Genero?></option>
                                <?php } ?>
                            </select>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Agregar producto">
                        </form>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="<?php echo base_url(); ?>index.php/Admini_Con/agregarfoto" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Primera foto</label>
                                                <input type="file" name="foto_primera" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Segunda foto</label>
                                                <input type="file" name="foto_segunda" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Tecera foto</label>
                                                <input type="file" name="foto_tecera" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Cuarta foto</label>
                                                <input type="file" name="foto_cuarta" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Quinta foto</label>
                                                <input type="file" name="foto_quinta" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <b>Digite el codigo de foto:</b>
                                            <input type="text" name="codigo_foto" id="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <input type="submit" class="btn btn-primary" value="Agregar Foto">
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


        </div>
        <!-- Content Row -->

        <div class="row">



        </div>
        <!-- Content Row -->
        <div class="row">







        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->