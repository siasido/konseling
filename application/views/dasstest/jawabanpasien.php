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

<!-- Container fluid  -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-body">
                <h4 class="card-title">Detail Jawaban Ujian</h4>
                <h6 class="card-subtitle"> Nama Pasien : <?=$pasien->nama?> </h6>
                <form class="form-horizontal mt-4" action="<?=site_url('dasstest/simpan')?>" method="post">

                    <?php $no=1; foreach ($soal as $key => $res) { ?>
                        
                        <div>
                            <label for="example-email"> <span class="help"><?=$no.'. ' .$res->isisoal?></span></label>
                            
                        
                            <div class="form-group row pt-3" style="margin-left:5px;">
                                <div class="col-sm-12">
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            
                                            <input onclick="javascript: return false;" id="radio1" name="jawaban<?=$res->idsoal?>" <?=set_value('jawaban'.$res->idsoal, $res->jawaban ) == $res->nilaiopsi1 ? 'checked' : '' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi1?></span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input onclick="javascript: return false;" id="radio1" name="jawaban<?=$res->idsoal?>" <?=set_value('jawaban'.$res->idsoal, $res->jawaban ) == $res->nilaiopsi2 ? 'checked' : '' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi2?></span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input onclick="javascript: return false;" id="radio1" name="jawaban<?=$res->idsoal?>" <?=set_value('jawaban'.$res->idsoal, $res->jawaban ) == $res->nilaiopsi3 ? 'checked' : '' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi3?></span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input onclick="javascript: return false;" id="radio1" name="jawaban<?=$res->idsoal?>" <?=set_value('jawaban'.$res->idsoal, $res->jawaban ) == $res->nilaiopsi4 ? 'checked' : '' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi4?></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php $no++; } ?>

                    <div class="row">
                        <?php if($this->session->userdata('role') == 'admin') { ?>
                            <a href="<?=site_url('keluhanpasien/listkeluhan')?>" class="btn btn-inverse waves-effect waves-light">Kembali</a>
                        <?php } else { ?>
                            <a href="<?=site_url('keluhanpasien/keluhansaya')?>" class="btn btn-inverse waves-effect waves-light">Kembali</a>
                        <?php } ?>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>