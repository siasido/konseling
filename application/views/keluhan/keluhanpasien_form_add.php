
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Keluhan Pasien</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Keluhan</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->

            <?=$error?? ""?>


            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                        <div class="card card-body">
                            <h3 class="mb-0">Tambah Keluhan</h3>
                            <p class="text-muted mb-4 font-13"> Lengkapi form berikut untuk menambah keluhan pasien:</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?=site_url('keluhanpasien/simpankeluhan')?>" enctype="multipart/form-data" method="post">
                                        <input type="hidden" name="userid" value="<?=$this->session->userdata('userid')?>">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="gejala">Gejala yang dialami</label>
                                                    <textarea class="form-control" id="gejala" name="gejala" rows="3" class="form-control <?=form_error('gejala') ? 'is-invalid' : null ?>"
                                                    placeholder="Contoh : mual-mual, gelisah, dsb"><?php echo set_value('gejala'); ?></textarea>
                                                    
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('gejala'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="lamakeluhan">Lama Gejala</label>
                                                    <input type="text" class="form-control <?=form_error('lamakeluhan') ? 'is-invalid' : null ?>" id="lamakeluhan" name="lamakeluhan"  value="<?php echo set_value('lamakeluhan'); ?>" placeholder="Contoh: 2 minggu">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('lamakeluhan'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>

                                        <div class="row">
                                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button>
                                            <a href="<?=site_url('psikolog/index')?>" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                


            </div>
            <!-- End Container fluid  -->

                    