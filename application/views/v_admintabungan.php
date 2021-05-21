    <!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Tabungan</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/linearicons.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css">                  
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.min.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">

            <!--===============================================================================================-->
              <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/icons/logo5.png"/>
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/themify/themify-icons.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animate/animate.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animsition/css/animsition.min.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/select2/select2.min.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/slick/slick.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/lightbox2/css/lightbox.min.css">
            <!--===============================================================================================-->
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/css/util.css">
              <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/css/main.css">
            <!--===============================================================================================-->
        </head>
        <body>

              <header id="header" id="home">
                <div class="container">
                    <div class="row align-items-center justify-content-between d-flex">
                      <div id="logo">
                        <a href="index.html"><img src="<?php echo base_url() ?>assets/images/icons/logo5.png" alt="" title="" /></a>
                      </div>
                      <nav id="nav-menu-container">
                        <ul class="nav-menu">
                          <li class="menu-active"><a href="<?php echo base_url() ?>dashboard">Dashboard</a></li>
                          <?php if($this->session->userdata('level') <= 2) { ?>
                          <li><a href="<?php echo base_url() ?>admin_pinjaman">Simpan Pinjam</a></li>
                          <li><a href="<?php echo base_url() ?>admin_tabungan">Tabungan</a></li>
                          <?php } ?>
                          <?php if($this->session->userdata('level') == 4 || $this->session->userdata('level') == 1) { ?>
                          <li><a href="<?php echo base_url() ?>admin_sampah">Retribusi Sampah</a></li>
                          <?php } ?>
                          <?php if($this->session->userdata('level') == 3 || $this->session->userdata('level') == 1) { ?>
                          <li><a href="<?php echo base_url() ?>admin_penyewaan">Penyewaan Alat</a></li>
                          <li><a href="<?php echo base_url() ?>admin_ppob">PPOB</a></li>
                          <?php } ?>
                          <?php if($this->session->userdata('level') == 4 || $this->session->userdata('level') == 1) { ?>
                          <li><a href="<?php echo base_url() ?>admin_bansos">Bantuan Sosial</a></li>
                          <?php } ?>
                          <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                              <li><a href="<?php echo base_url(). 'petugas/logout'?>">Logout</a></li>
                              <!-- <li><a href="elements.html">Tabungan Nasabah</a></li> -->
                            </ul>
                          </li>
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header>
              <!-- #header -->

            <!-- start banner Area -->
            <section class="banner-area" id="home"> 
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-center">
                        <div class="banner-content col-lg-7">
                            <h1>
                                Unit Usaha BUMDes             
                            </h1>
                            <p class="pt-20 pb-20">
                                Tabungan
                            </p>
                        </div>                                          
                    </div>
                </div>
            </section>
            <!-- End banner Area -->        

            <!-- Start price Area -->
            <section class="price-area section-gap" id="price">
              <div class="container">
                <div class="row d-flex justify-content-center">
                  <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                      <h1 class="mb-10">Unit Tabungan BUMDes</h1>
                      <p>Berikut ini adalah menu dari unit tabungan BUMDes</p>
                    </div>
                  </div>
                </div>          
                <div class="row">
                  <div class="col-lg-6">
                    <div class="single-price">
                      <div class="top-sec d-flex justify-content-between">
                        <div class="top-left">
                          <h4>Data</h4>
                          <p>Tabungan BUMDes</p>
                        </div>
                      </div>
                      <div class="bottom-sec">
                        <p>
                          Data Tabungan BUMDes
                        </p>
                      </div>
                      <div class="end-sec">
                        <ul>
                          <li>Data Pembukaan Rekening Bank BUMDes dapat dilihat <a href="https://docs.google.com/spreadsheets/d/1kc8bgFbRRMCGMDJIJ6CKY4bz-dQkxz1Ie2JOR8pJAnw/edit?usp=sharing" class="txt4">Disini</a></li>
                        </ul>
                        <ul>
                          <li>Formulir Pembukaan Rekening Bank BUMDes dapat dimuat <a href="https://docs.google.com/spreadsheets/d/1WQCy42bO57UXTgWfcmeKvf1-iAO6zQpfyxSW8W1tRg8/edit?usp=sharing" class="txt4">
                          disini</a></li>
                        </ul>
                        <ul>
                          <li>Data Penarikan Dana BUMDes dapat dilihat <a href="https://docs.google.com/spreadsheets/d/19bxXjYkpgC3G0_Dd8HcOqMea9j254UCVNApXmtZ1Hpg/edit?usp=sharing" class="txt4">Disini</a></li>
                        </ul>
                        <ul>
                          <li>Formulir Penarikan Dana BUMDes dapat dimuat <a href="https://docs.google.com/spreadsheets/d/1WQCy42bO57UXTgWfcmeKvf1-iAO6zQpfyxSW8W1tRg8/edit?usp=sharing" class="txt4">
                          disini</a></li>
                        </ul>
                        <ul>
                          <li>Data Setoran Tabungan BUMDes dapat dilihat <a href="https://docs.google.com/spreadsheets/d/1cKek7HMKNJUdgfVpy-p8lbDRXIMPE784YeW70igEtQo/edit?usp=sharing" class="txt4">Disini</a></li>
                        </ul>
                        <ul>
                          <li>Formulir Setoran Tabungan BUMDes dapat dimuat <a href="https://docs.google.com/spreadsheets/d/1WQCy42bO57UXTgWfcmeKvf1-iAO6zQpfyxSW8W1tRg8/edit?usp=sharing" class="txt4">
                          disini</a></li>
                        </ul>
                      </div>                
                    </div> 
                  </div>
                  <div class="col-lg-6">
                    <div class="single-price">
                      <div class="top-sec d-flex justify-content-between">
                        <div class="top-left">
                          <h4>Data</h4>
                          <p>Tabungan Nasabah BUMDes</p>
                        </div>
                      </div>
                      <div class="bottom-sec">
                        <p>
                          Data Tabungan Nasabah BUMDes
                        </p>
                      </div>
                      <div class="end-sec">
                        <ul>
                          <li>Data Pembukaan Rekening Nasabah BUMDes dapat dilihat <a href="https://docs.google.com/spreadsheets/d/13ZfOQ4_MutlD2bMLUU8O6EKH_zobU1rtjSozVBDaP7M/edit?usp=sharing" class="txt4">Disini</a></li>
                        </ul>
                        <ul>
                          <li>Formulir Pembukaan Rekening Nasabah dapat dimuat <a href="https://docs.google.com/spreadsheets/d/1WQCy42bO57UXTgWfcmeKvf1-iAO6zQpfyxSW8W1tRg8/edit?usp=sharing" class="txt4">
                          disini</a></li>
                        </ul>
                        <ul>
                          <li>Data Penarikan Dana Nasabah dapat dilihat <a href="https://docs.google.com/spreadsheets/d/15_uxsWrYAuc5mcwmQzmAbjBGD-xR2Q0BxSneWOQDE0I/edit?usp=sharing" class="txt4">Disini</a></li>
                        </ul>
                        <ul>
                          <li>Formulir Penarikan Dana Nasabah dapat dimuat <a href="https://docs.google.com/spreadsheets/d/1WQCy42bO57UXTgWfcmeKvf1-iAO6zQpfyxSW8W1tRg8/edit?usp=sharing" class="txt4">
                          disini</a></li>
                        </ul>
                        <ul>
                          <li>Data Setoran Tabungan Nasabah dapat dilihat <a href="https://docs.google.com/spreadsheets/d/1X5nKB9oDLAr1qxLlYp_BG2fMcb1K5seLUCj5MeQrzKs/edit?usp=sharing" class="txt4">Disini</a></li>
                        </ul>
                        <ul>
                          <li>Formulir Setoran Tabungan Nasabah dapat dimuat <a href="https://docs.google.com/spreadsheets/d/1WQCy42bO57UXTgWfcmeKvf1-iAO6zQpfyxSW8W1tRg8/edit?usp=sharing" class="txt4">
                          disini</a></li>
                        </ul>
                      </div>                
                    </div> 
                  </div>                            
                </div>
              </div>  
            </section>
            <!-- End price Area -->

            <!-- start footer Area -->      
              <!-- Footer -->
            <footer class="bg1">
              <div class="container p-t-40 p-b-70">
                <div class="row">
                  <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                      Contact Us
                    </h4>

                    <ul class="m-b-70">
                      <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        BUMDes Bangun Bersama Desa Kepunduhan
                      </li>

                      <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        (+1) 96 716 6879
                      </li>

                      <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                        bumdes.kepunduhan@gmail.com
                      </li>
                    </ul>

                    <!-- - -->
                    <h4 class="txt13 m-b-32">
                      Opening Times
                    </h4>

                    <ul>
                      <li class="txt14">
                        09:30 AM – 11:00 PM
                      </li>

                      <li class="txt14">
                        Every Day
                      </li>
                    </ul>
                  </div>

                  <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                      Latest twitter
                    </h4>

                    <div class="m-b-25">
                      <span class="fs-13 color2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </span>
                      <a href="#" class="txt15">
                        @colorlib
                      </a>

                      <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays the featured image in the slider.
                        <a href="#" class="txt15">
                          https://buff.ly/2zaSfAQ
                        </a>
                      </p>

                      <span class="txt16">
                        21 Dec 2017
                      </span>
                    </div>

                    <div>
                      <span class="fs-13 color2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </span>
                      <a href="#" class="txt15">
                        @colorlib
                      </a>

                      <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays
                        <a href="#" class="txt15">
                          https://buff.ly/2zaSfAQ
                        </a>
                      </p>

                      <span class="txt16">
                        21 Dec 2017
                      </span>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-38">
                      Gallery
                    </h4>

                    <!-- Gallery footer -->
                    <div class="wrap-gallery-footer flex-w">
                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-01.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-02.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-03.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-04.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-05.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/<?php echo base_url() ?>assets/images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-06.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-07.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-08.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-09.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-10.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-11.jpg" alt="GALLERY">
                      </a>

                      <a class="item-gallery-footer wrap-pic-w" href="<?php echo base_url() ?>assets/images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
                        <img src="<?php echo base_url() ?>assets/images/photo-gallery-thumb-12.jpg" alt="GALLERY">
                      </a>
                    </div>

                  </div>
                </div>
              </div>

              <div class="end-footer bg2">
                <div class="container">
                  <div class="flex-sb-m flex-w p-t-22 p-b-22">
                    <div class="p-t-5 p-b-5">
                      <a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                      <a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                      <a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                    </div>

                    <div class="txt17 p-r-20 p-t-5 p-b-5">
                      Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </div>
                  </div>
                </div>
              </div>
            </footer>    

            <script src="<?php echo base_url() ?>assets/js3/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="<?php echo base_url() ?>assets/js3/vendor/bootstrap.min.js"></script>          
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="<?php echo base_url() ?>assets/js3/easing.min.js"></script>            
            <script src="<?php echo base_url() ?>assets/js3/hoverIntent.js"></script>
            <script src="<?php echo base_url() ?>assets/js3/superfish.min.js"></script> 
            <script src="<?php echo base_url() ?>assets/js3/jquery.ajaxchimp.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js3/jquery.magnific-popup.min.js"></script> 
            <script src="<?php echo base_url() ?>assets/js3/owl.carousel.min.js"></script>          
            <script src="<?php echo base_url() ?>assets/js3/jquery.sticky.js"></script>
            <script src="<?php echo base_url() ?>assets/js3/jquery.nice-select.min.js"></script>            
            <script src="<?php echo base_url() ?>assets/js3/parallax.min.js"></script>      
            <script src="<?php echo base_url() ?>assets/js3/mail-script.js"></script>   
            <script src="<?php echo base_url() ?>assets/js3/main.js"></script>
        </body>
    </html>



