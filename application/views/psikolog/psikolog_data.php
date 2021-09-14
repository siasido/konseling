
            <!-- Bread crumb and right sidebar toggle -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Psikolog</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">List Psikolog</li>
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
                                <h4 class="card-title">Data Psikolog</h4>
                                <div class="text-right">
                                    <a href="<?=site_url('psikolog/add')?>" class="btn btn-info"><i class="fas fa-plus"></i>
                                        Tambah Psikolog
                                    </a>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>Spesialisasi</th>
                                                <th>No.Handphone</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $res) { ?>
                                                <tr>
                                                <td><?=$res->nama?></td>
                                                <td><?=$res->gender?></td>
                                                <td><?=$res->spesialisasi?></td>
                                                <td><?=$res->noHandphone?></td>
                                                <td><?=$res->email?? "-" ?></td>
                                                <td><?=$res->alamat?? "-" ?></td>
                                                <td>
                                                    <div class="el-element-overlay">
                                                        <div class="el-card-item pb-3">
                                                            <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                                                            <?php if ($res->foto != null) { ?>
                                                                <a class="image-popup-vertical-fit" href="<?=base_url('uploads/psikolog/'.$res->foto)?>"> <img src="<?=base_url('uploads/psikolog/'.$res->foto)?>" class="d-block position-relative" width="70px" alt="user"> </a>
                                                            <?php } else { ?>
                                                                <a class="image-popup-vertical-fit" href="<?=base_url('assets/no_image.jpg')?>"> <img src="<?=base_url('assets/no_image.jpg')?>" class="d-block position-relative" width="70px" alt="user"> </a>
                                                            <?php } ?>
                                                                
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </td>
                                                <td>
                                                    <a href="<?=site_url('psikolog/edit/'.$res->idpsikiater)?>" class="btn waves-effect waves-light btn-warning"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                    <i class="fas fa-pencil-alt"></i></a>
                                                    <!-- <a href="<?=site_url('psikolog/delete/'.$res->idpsikiater)?>" class="btn waves-effect waves-light btn-danger"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                    <i class="fas fa-trash-alt"></i></a> -->
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