
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Keluhan Pasien</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">List Keluhan Pasien</li>
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
                                <h4 class="card-title">Data Keluhan Pasien</h4>
                                <div class="text-right">
                                    <a href="<?=site_url('keluhanpasien/add')?>" class="btn btn-info"><i class="fas fa-plus"></i>
                                        Tambah Keluhan
                                    </a>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                            <?php if($this->session->userdata('role') == 'admin'){
                                                // echo '<th>Pasien</th>';
                                                // echo '<th>Jenis Kelamin</th>';
                                                // echo '<th>No.HP</th>';
                                            } ?>
                                                <th>Nama</th>
                                                <th>No.Handphone</th>
                                                <th>Alamat</th>
                                                <th>Gejala</th>
                                                <th>Lama Gejala</th>
                                                <th>Tanggal Diajukan</th>
                                                <!-- <th>Status</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $res) { ?>
                                                <tr>
                                                <?php if($this->session->userdata('role') == 'admin'){
                                                    // echo "<td>$res->nama</td>";
                                                    // echo "<td>$res->gender</td>";
                                                    // echo "<td>$res->noHandphone</td>";
                                                } ?>
                                                <td><?=$res->nama?></td>
                                                <td><?=$res->noHandphone?></td>
                                                <td><?=$res->alamat?></td>
                                                <td><?=$res->gejala?></td>
                                                <td><?=$res->lamakeluhan?></td>
                                                <td><?=$res->tglpengajuan?></td>
                                                <!-- <td>
                                                    <?php switch ($res->statuskeluhan) {
                                                            case 0:
                                                                echo "Silahkan mulai ujian";
                                                                break;
                                                            case 1:
                                                                echo "Sudah test dass. silahkan lihat hasil test";
                                                                break;
                                                            default:
                                                                echo "-";
                                                            }

                                                    ?>
                                                </td> -->
                                                <td>
                                                
                                                    
                                                    <?php switch ($res->statuskeluhan) {
                                                            case 0:
                                                                if($this->session->userdata('role') == 'admin'){
                                                                    echo '<button class="btn btn-info">Menunggu Hasil Test</button>';
                                                                } else {
                                                                    echo '<a href="'.site_url("dasstest/test/").$res->idkeluhan.'" class="btn btn-info"><i class="mr-2 mdi mdi-timer"></i>
                                                                        Mulai Test
                                                                    </a>';
                                                                }
                                                                break;
                                                            case 1:
                                                                

                                                                if($this->session->userdata('role') == 'admin'){
                                                                    echo '<a style="margin-right:5px" href="'.site_url("dasstest/lihatjawabandetailv2/$res->idkeluhan/$res->userid").'" class="btn btn-info"><i class="mr-2 mdi mdi-timer"></i>
                                                                        Lihat Detail Jawaban
                                                                    </a>';

                                                                    echo '<a href="'.site_url("dasstest/lihathasildetail/$res->idkeluhan/$res->userid").'" class="btn btn-info"><i class="mr-2 mdi mdi-timer"></i>
                                                                        Lihat Hasil
                                                                    </a>';
                                                                    
                                                                } else {
                                                                    echo '<a style="margin-right:5px" href="'.site_url("dasstest/lihatjawabandetailv1/$res->idkeluhan/$res->userid").'" class="btn btn-info"><i class="mr-2 mdi mdi-timer"></i>
                                                                        Lihat Detail Jawaban
                                                                    </a>';

                                                                    echo '<a href="'.site_url("dasstest/lihathasil/$res->idkeluhan/$res->userid").'" class="btn btn-info"><i class="mr-2 mdi mdi-timer"></i>
                                                                        Lihat Hasil
                                                                    </a>';
                                                                }
                                                                
                                                                break;
                                                            default:
                                                                echo "-";
                                                            }
                                                    ?>

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