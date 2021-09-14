<input type="hidden" value="<?=$this->session->flashdata('success')?>" id="success-trigger">
<input type="hidden" value="<?=$this->session->flashdata('danger')?>" id="danger-trigger">
<input type="hidden" value="<?=$this->session->flashdata('warning')?>" id="warning-trigger">
            
    <!-- Bread crumb and right sidebar toggle -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Master Soal</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                <li class="breadcrumb-item active">List Soal</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->


    <!-- Container fluid  -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Soal</h4>
                        <div class="text-right">
                            <a href="<?=site_url('mastersoal/add')?>" class="btn btn-info"><i class="fas fa-plus"></i>
                                Tambah Soal
                            </a>
                        </div>
                        
                        <div class="table-responsive">
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No.Soal</th>
                                        <th rowspan="2">Tipe Soal</th>
                                        <th rowspan="2">Isi Soal</th>
                                        <th  colspan="2">Opsi Jawaban 1</th>
                                        <th colspan="2">Opsi Jawaban 2</th>
                                        <th colspan="2">Opsi Jawaban 3</th>
                                        <th colspan="2">Opsi Jawaban 4</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <!-- <th></th>
                                        <th></th>
                                        <th></th>  -->
                                        <th>Opsi</th>
                                        <th>Nilai</th>
                                        <th>Opsi</th>
                                        <th>Nilai</th>
                                        <th>Opsi</th>
                                        <th>Nilai</th>
                                        <th>Opsi</th>
                                        <th>Nilai</th>
                                        <!-- <th></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php $no=1; foreach ($row as $key => $res) { ?>
                                        <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$res->typesoal?></td>
                                        <td><?=$res->isisoal?></td>
                                        <td><?=$res->opsi1?></td>
                                        <td><?=$res->nilaiopsi1?></td>
                                        <td><?=$res->opsi2?></td>
                                        <td><?=$res->nilaiopsi2?></td>
                                        <td><?=$res->opsi3?></td>
                                        <td><?=$res->nilaiopsi3?></td>
                                        <td><?=$res->opsi4?></td>
                                        <td><?=$res->nilaiopsi4?></td>
                                        <td>
                                            <a href="<?=site_url('mastersoal/edit/'.$res->idsoal)?>" class="btn waves-effect waves-light btn-warning"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                            <i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?=site_url('mastersoal/delete/'.$res->idsoal)?>" class="btn waves-effect waves-light btn-danger"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                            <i class="fas fa-trash-alt"></i></a>
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
    <!-- End Container fluid  -->