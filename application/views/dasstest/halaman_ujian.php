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
                <h4 class="card-title">Default Horizontal Forms</h4>
                <h6 class="card-subtitle"> All bootstrap element classies </h6>
                <form class="form-horizontal mt-4" action="<?=site_url('dasstest/simpan')?>" method="post">

                    <?php $no=1; foreach ($soal as $key => $res) { ?>
                        
                        <div>
                            <label for="example-email"> <span class="help"><?=$no.'. ' .$res->isisoal?></span></label>
                        
                            <div class="form-group row pt-3" style="margin-left:5px;">
                                <div class="col-sm-12">
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input id="radio1" required name="jawaban<?=$res->idsoal?>" value="<?=$res->nilaiopsi1?>" <?=set_value('jawaban'.$res->idsoal) == $res->nilaiopsi1 ? 'checked' : 'null' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi1?></span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input id="radio1" name="jawaban<?=$res->idsoal?>" value="<?=$res->nilaiopsi2?>" <?=set_value('jawaban'.$res->idsoal) == $res->nilaiopsi2 ? 'checked' : 'null' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi2?></span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input id="radio1" name="jawaban<?=$res->idsoal?>" value="<?=$res->nilaiopsi3?>" <?=set_value('jawaban'.$res->idsoal) == $res->nilaiopsi3 ? 'checked' : 'null' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi3?></span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="custom-control custom-radio">
                                            <input id="radio1" name="jawaban<?=$res->idsoal?>" value="<?=$res->nilaiopsi4?>" <?=set_value('jawaban'.$res->idsoal) == $res->nilaiopsi4 ? 'checked' : 'null' ?> type="radio" class="custom-control-input">
                                            <span class="custom-control-label"><?=$res->opsi4?></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php $no++; } ?>

                    <div class="row">
                        <button type="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button>
                        <a href="<?=site_url('dasstest/simpan')?>" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>