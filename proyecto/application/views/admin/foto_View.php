<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">ONEIDA MARIA SANCHES ADMIN </h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Agregar las foto</h6>
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ya existe esta el codigo de esta foto <strong>¡ YA EXISTE !</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php } ?>
                <form action="<?php echo base_url(); ?>index.php/Admini_Con/agregarfoto" method="post">
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
                    <br>
                    <input type="submit" class="btn btn-primary">


                </form>
            </div>
        </div>
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