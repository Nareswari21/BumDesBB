<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/icons/logo3.png"/>
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
<link rel  = "stylesheet" href = "<?=base_url()?>assets/leaflet/leaflet.css">
<style type = "text/css">
  #mapid { height: 520px; }

</style>
</head>
<body class="animsition">

	<!-- Header -->
	<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
      <div class="container h-full">
        <div class="wrap_header trans-0-3">
          <!-- Logo -->
          <div class="logo">
            <a href="index.html">
              <img src="<?php echo base_url() ?>assets/images/icons/logo3.png" alt="IMG-LOGO" data-logofixed="<?php echo base_url() ?>assets/images/icons/logo3.png">
            </a>
          </div>

          <!-- Menu -->
          <div class="wrap_menu p-l-45 p-l-0-xl">
                  <nav class="menu">
                    <ul class="main_menu">
                      <li>
                        <a href="<?php echo base_url() ?>welcome">Home</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() ?>welcome#visimisi">Visi Misi</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() ?>welcome#unitusaha">Unit Usaha</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() ?>welcome#event">Event</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() ?>welcome#teams">Our Teams</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url() ?>contact">Contact</a>
                      </li>
                    </ul>
                  </nav>
               </div>

          <!-- Social -->
          <div class="social flex-w flex-l-m p-r-20">
            <!-- <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a> -->

            <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
          </div>
        </div>
      </div>
    </div>
  </header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>welcome" class="txt19">Home</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>pinjaman" class="txt19">Pinjaman</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>tabungan" class="txt19">Tabungan</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>sampah" class="txt19">Sampah</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>penyewaan" class="txt19">Penyewaan</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>ppob" class="txt19">PPOB</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>bansos" class="txt19">Bansos</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo base_url() ?>contact" class="txt19">Contact</a>
      </li>

     <!--  <li class="t-center"> -->
        <!-- Button3 -->
        <!-- <a href="reservation.html" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
          Reservation
        </a>
      </li> -->
    </ul>

    <!-- - -->
    <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
      <!-- - -->
      <h4 class="txt20 m-b-33">
        Gallery
      </h4>

      <!-- Gallery -->
      <div class="wrap-gallery-sidebar flex-w">
        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/1.jpg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/1.jpg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/2.jpeg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/2.jpeg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/3.jpg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/3.jpg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/4.jpg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/4.jpg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/5.jpg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/5.jpg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/6.jpg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/6.jpg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/7.jpg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/7.jpg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/8.jpeg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/8.jpeg" alt="GALLERY">
        </a>

        <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/9.jpg" data-lightbox="gallery-footer">
          <img src="<?php echo base_url() ?>assets/images/galeri/9.jpg" alt="GALLERY">
        </a>
      </div>
    </div>
  </aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/bg_6.jpg);">
		<h2 class="tit6 t-center">
			Contact
		</h2>
	</section>



	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90 p-b-113">
		<!-- Map -->
		<div class="container">
			<div class="map bo8 bo-rad-10 of-hidden">
				<div id="mapid"></div>
			</div>
		</div>

		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Send us a Message
			</h3>

			<form class="wrap-form-reservation size22 m-l-r-auto">
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9">
							Name
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9">
							Phone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9">
							Message
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Submit
					</button>
				</div>
			</form>

			<div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="<?php echo base_url() ?>assets/images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

							<span class="txt23 size38">
								Desa Kepunduhan Kec. Kramat Kab. Tegal
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="<?php echo base_url() ?>assets/images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

							<span class="txt23 size38">
								(+1) 96 716 6879
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="<?php echo base_url() ?>assets/images/icons/clock-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Opening Hours
							</span>

							<span class="txt23 size38">
								08.00 - 13.00 <br/>Monday - Friday
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


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
              08.00 - 13.00 
            </li>

            <li class="txt14">
             Monday - Friday
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
            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/1.jpg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/1.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/2.jpeg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/2.jpeg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/3.jpg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/3.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/4.jpg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/4.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/5.jpg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/5.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/6.jpg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/6.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/7.jpg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/7.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/8.jpeg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/8.jpeg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="<?php echo base_url() ?>assets/images/galeri/9.jpg" data-lightbox="gallery-footer">
              <img src="<?php echo base_url() ?>assets/images/galeri/9.jpg" alt="GALLERY">
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


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

<script src="<?=base_url()?>assets/leaflet/leaflet.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
<script type="text/javascript">
  var map      = L.map('mapid').setView([-6.8954066,109.2089759], 15);
  var base_url = "<?=base_url()?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
</script>

<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js2/slick-custom.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/parallax100/parallax100.js"></script>
  <script type="text/javascript">
        $('.parallax100').parallax100();
  </script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url() ?>assets/js2/main.js"></script>

</body>
</html>
