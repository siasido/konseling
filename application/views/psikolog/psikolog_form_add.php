
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Psikolog</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Psikolog</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->

            <?=$error?? ""?>


            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                        <div class="card card-body">
                            <h3 class="mb-0">Tambah Psikolog</h3>
                            <p class="text-muted mb-4 font-13"> Lengkapi form berikut untuk menambah psikolog:</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?=site_url('psikolog/simpan')?>" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control <?=form_error('nama') ? 'is-invalid' : null ?>" id="nama" value="<?php echo set_value('nama'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nama'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3 mb-md-0">
                                            
                                                <div class="form-group">
                                                    <label for="gender">Jenis Kelamin</label>

                                                    <div class="col-12">
                                                        <div class="form-check form-check-inline">
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio1" value="Laki-laki" <?=set_value('gender') == 'Laki-laki' ? 'checked' : 'null' ?> name="gender" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Laki-Laki</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio2" value="Perempuan" <?=set_value('gender') == 'Perempuan' ? 'checked' : 'null' ?> name="gender" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Perempuan</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                   
                                                   <div class="invalid-feedback">
                                                        <?php echo form_error('gender'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="noHandphone">No.Handphone</label>
                                                    <input type="number" class="form-control <?=form_error('noHandphone') ? 'is-invalid' : null ?>" id="noHandphone" name="noHandphone"  value="<?php echo set_value('noHandphone'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('noHandphone'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control <?=form_error('email') ? 'is-invalid' : null ?>" id="email" name="email"  value="<?php echo set_value('email'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('email'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="spesialisasi">Spesialisasi</label>
                                                    <input type="text" class="form-control <?=form_error('spesialisasi') ? 'is-invalid' : null ?>" id="spesialisasi" name="spesialisasi"  value="<?php echo set_value('spesialisasi'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('spesialisasi'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" class="form-control <?=form_error('alamat') ? 'is-invalid' : null ?>"
                                                    placeholder="Alamat"><?php echo set_value('alamat'); ?></textarea>
                                                    
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('alamat'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" class="form-control" id="foto" name="foto" aria-describedby="fileHelp">
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

                    