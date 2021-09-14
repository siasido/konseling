<!DOCTYPE html>
<style type="text/css">
  .posisi{
    position: absolute;
    left: 250px;
    right: 250px;
  }
</style>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Konsultasi Psikologi</title>


  <!-- css -->
  <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/plugins/cubeportfolio/css/cubeportfolio.min.css')?>">
  <link href="<?php echo base_url('asset/css/nivo-lightbox.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/nivo-lightbox-theme/default/default.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('asset/css/owl.carousel.css')?>" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url('asset/css/owl.theme.css')?>" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url('asset/css/animate.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet">

  <!-- boxed bg -->
  <!-- template skin -->
  <link id="t-colors" href="<?php echo base_url('asset/color/default.css')?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <style>


.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 14px;
    line-height: 1
    6px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    /* background: url("<?=base_url()?>assets/src/assets/images/background/user-info.jpg"); */
    background-size: cover;
    height: 70px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 250px;
    height: 200px;
    max-width: 250px;
    max-height: 200px;
    -webkit-border-radius: 20%;
    -moz-border-radius: 20%;
    border-radius:5%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 14px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}

.btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

  </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('dashboard/beranda')?>">
              <img src="<?=base_url('assets/logo1.png')?>" width="55%" style="margin-top: 0xpx" alt="">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('dashboard/beranda')?>">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('dashboard/layanankonseling')?>">Konseling</a></li>
                <li><a href="<?php echo base_url('dashboard/layananpsikotest')?>">Psikotes</a></li>
              </ul>
            </li>
            <li class="active"><a href="<?php echo base_url('dashboard/halamandokter')?>">Psikiater</a></li>
            <li><a href="<?php echo base_url('dashboard/login')?>">Masuk/Registrasi</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>


    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="container">
        <div class="row">
          <?php foreach ($row as $key => $res) { ?>
            <div class="col-lg-4 col-sm-6">

              <div class="card hovercard">
                  <div class="cardheader">
                    <!-- <img alt="" src="<?=base_url('uploads/psikolog/'.$res->foto)?>"> -->
                  </div>
                  <div class="avatar">
                      <img alt="" src="<?=base_url('uploads/psikolog/'.$res->foto)?>">
                  </div>
                  <div class="info">
                      <div class="title">
                          <a target="_blank" href="https://scripteden.com/"><?=$res->nama?></a>
                      </div>
                      <div class="desc"><?=$res->spesialisasi?></div>
                      <div class="desc"><?=$res->email?></div>
                  </div>
                  <div class="bottom">
                     
                  </div>
              </div>

            </div>
          <?php } ?>
        </div>

      </div>

      

    </section>
    <!-- /Section: works -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-2 col-md-3">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <!-- <h5>Tentang</h5>
                <p>
                  Aplikasi ini memberikan fasilitas layanan konsultasi psikologi secara <i>online</i> yang dapat membantu siapapun yang membutuhkan bantuan dalam menyelesaikan segala masalah kesehatan mental.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Kontak</h5>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                    </span> 08157100888
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Alamat</h5>
                <p>Jl. Dr. Cipto no 1, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - Medicio Theme. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="<?php echo base_url ('asset/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/jquery.easing.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/wow.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/jquery.scrollTo.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/jquery.appear.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/stellar.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/nivo-lightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url ('asset/js/custom.js'); ?>"></script>

</body>

</html>
