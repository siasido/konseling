
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Master Soal</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Soal</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->

            <?=$error?? ""?>


            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12">
                        <div class="card card-body">
                            <h3 class="mb-0">Tambah Soal</h3>
                            <p class="text-muted mb-4 font-13"> Lengkapi form berikut untuk menambah soal:</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="<?=site_url('mastersoal/simpan')?>" method="post">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <input type="hidden" name="idsoal">
                                                    <label for="typesoal">Type Soal</label>
                                                    <select class="select2 form-control custom-select" name="typesoal" style="width: 100%; height:36px;" required>
                                                        <option value="">-- Pilih Kategori Soal --</option>
                                                        <option value="kecemasan"> Kategori Kecemasan </option>
                                                        <option value="depresi"> Kategori Depresi </option>
                                                        <option value="stress"> Kategori Stress</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('typesoal'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="isisoal">Isi Soal</label>
                                                    <textarea class="form-control" id="isisoal" name="isisoal" rows="3" class="form-control <?=form_error('isisoal') ? 'is-invalid' : null ?>"
                                                    placeholder="Apakah anda ..."><?php echo set_value('isisoal'); ?></textarea>
                                                    
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('isisoal'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="opsi1">Opsi Jawaban 1</label>
                                                    <textarea class="form-control" id="opsi1" name="opsi1" rows="3" class="form-control <?=form_error('opsi1') ? 'is-invalid' : null ?>"
                                                    placeholder="Apakah anda ..."><?php echo set_value('opsi1'); ?></textarea>
                                                    
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('opsi1'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="nilaiopsi1">Nilai Opsi Jawaban 1</label>
                                                    <input type="number" class="form-control <?=form_error('nilaiopsi1') ? 'is-invalid' : null ?>" id="nilaiopsi1" name="nilaiopsi1"  value="<?php echo set_value('nilaiopsi1'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nilaiopsi1'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="opsi2">Opsi Jawaban 2</label>
                                                    <textarea class="form-control" id="opsi2" name="opsi2" rows="3" class="form-control <?=form_error('opsi2') ? 'is-invalid' : null ?>"
                                                    placeholder="Apakah anda ..."><?php echo set_value('opsi2'); ?></textarea>
                                                    
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('opsi2'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="nilaiopsi2">Nilai Opsi Jawaban 2</label>
                                                    <input type="number" class="form-control <?=form_error('nilaiopsi2') ? 'is-invalid' : null ?>" id="nilaiopsi2" name="nilaiopsi2"  value="<?php echo set_value('nilaiopsi2'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nilaiopsi2'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="opsi3">Opsi Jawaban 3</label>
                                                    <textarea class="form-control" id="opsi3" name="opsi3" rows="3" class="form-control <?=form_error('opsi3') ? 'is-invalid' : null ?>"
                                                    placeholder="Apakah anda ..."><?php echo set_value('opsi3'); ?></textarea>
                                                    
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('opsi3'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="nilaiopsi3">Nilai Opsi Jawaban 3</label>
                                                    <input type="number" class="form-control <?=form_error('nilaiopsi3') ? 'is-invalid' : null ?>" id="nilaiopsi3" name="nilaiopsi3"  value="<?php echo set_value('nilaiopsi3'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nilaiopsi3'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="opsi4">Opsi Jawaban 4</label>
                                                    <textarea class="form-control" id="opsi4" name="opsi4" rows="3" class="form-control <?=form_error('opsi4') ? 'is-invalid' : null ?>"
                                                    placeholder="Apakah anda ..."><?php echo set_value('opsi4'); ?></textarea>
                                                    
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('opsi4'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <div class="form-group">
                                                    <label for="nilaiopsi4">Nilai Opsi Jawaban 4</label>
                                                    <input type="number" class="form-control <?=form_error('nilaiopsi4') ? 'is-invalid' : null ?>" id="nilaiopsi4" name="nilaiopsi4"  value="<?php echo set_value('nilaiopsi4'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nilaiopsi4'); ?>
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

                    