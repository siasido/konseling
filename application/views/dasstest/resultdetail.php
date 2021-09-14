
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Dast Test</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Test DASS</li>
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
                                <h4 class="card-title">Hasil Tes DASS</h4>
                                <!-- <div class="text-right">
                                    <a href="<?=site_url('pasien/add')?>" class="btn btn-info"><i class="fas fa-plus"></i>
                                        Tambah Pasien
                                    </a>
                                </div> -->
                                
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Tgl Keluhan</th>
                                                <th rowspan="2">Nama Pasien</th>
                                                <th colspan="2">Kecemasan</th>
                                                <th colspan="2">Depresi</th>
                                                <th colspan="2">Stress</th>
                                                <th rowspan="2">Saran Tindakan</th>
                                            </tr>
                                            <tr>
                                                <th>Nilai</th>
                                                <th>Kategori</th>
                                                <th>Nilai</th>
                                                <th>Kategori</th>
                                                <th>Nilai</th>
                                                <th>Kategori</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?=$row['tglKeluhan']?></td>
                                                <td><?=$row['nama']?></td>
                                                <td><?=$row['nilaiKecemasan']?></td>
                                                <td><?=$row['tingkatKecemasan']?></td>
                                                <td><?=$row['nilaiDepresi']?></td>
                                                <td><?=$row['tingkatDepresi']?></td>
                                                <td><?=$row['nilaiStress']?></td>
                                                <td><?=$row['tingkatStress']?></td>
                                                <td><?=$row['intervensi']?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!-- End Container fluid  -->