
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
                                                <th>Tgl Keluhan</th>
                                                <th>Tingkat Kecemasan</th>
                                                <th>Tingkat Depresi</th>
                                                <th>Tingkat Stress</th>
                                                <th>Saran Tindakan</th>
                                                <?php if ($row['intervensi'] == 'Konseling & Psikoedukasi') { ?>
                                                    <th>Keterangan</th>
                                                <?php } ?>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?=$row['tglKeluhan']?></td>
                                                <td><?=$row['tingkatKecemasan']?></td>
                                                <td><?=$row['tingkatDepresi']?></td>
                                                <td><?=$row['tingkatStress']?></td>
                                                <td><?=$row['intervensi']?></td>
                                                <?php if ($row['intervensi'] == 'Konseling & Psikoedukasi') { ?>
                                                    <td> Psikoedukasi merupakan suatu tindakan yang bertujuan untuk mengatasi masalah yang dialami oleh masyarakat, masalah yang dihadapi seperti penyakit fisik maupun gangguan jiwa. Contoh dari penyakit fisik yaitu berupa hipertensi, kanker, penyakit kulit, TBC dan sebagainya. Sedangkan gangguan jiwa seperti depresi, skizofrenia dan kecemasan. Terapi psikoedukasi bisa dilakukan dengan pemberian informasi seperti melalui website atau email dan juga bisa berupa konseling atau pemberian pendidikan kesehatan baik secara individu atau kelompok[8].
Konseling merupakan suatu upaya untuk meminta bantuan profesional terhadap penanganan suatu kasus yang sedang ditangani seseorang yang lebih ahli.</td>
                                                <?php } ?>
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