<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
                  <a href="#visimisi">Visi Misi</a>
                </li>
                <li>
                  <a href="#unitusaha">Unit Usaha</a>
                </li>
                <li>
                  <a href="#event">Event</a>
                </li>
                <li>
                  <a href="<?php echo base_url() ?>blog">Blog</a>
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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/img/home/2.jpeg);">
		<h2 class="tit6 t-center">
			Blog
		</h2>
	</section>


	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="index.html" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Blog
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail.html">
									<img src="<?php echo base_url() ?>assets/img/home/7.jpeg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										8
									</span>

									<span class="txt31">
										Aug, 2020
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9">Persiapan Penyaluran Bansos Non Tunai</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Agustus, 2020
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Bansos, Covid
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<p>
									Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
								</p>

								<a href="blog-detail.html" class="dis-block txt4 m-t-30">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail.html">
									<img src="<?php echo base_url() ?>assets/img/home/20.jpeg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										9
									</span>

									<span class="txt31">
										Aug, 2020
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9">Penataan Bantuan Sosial Non Tuna</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										9 Agustus, 2020
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Bansos, Covid
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<p>
									Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
								</p>

								<a href="blog-detail.html" class="dis-block txt4 m-t-30">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail.html">
									<img src="<?php echo base_url() ?>assets/img/home/4.jpeg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										10
									</span>

									<span class="txt31">
										Aug, 2020
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9">Pendistribusian Bantuan Sosial Non Tunai</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										10 Agustus, 2020
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Bansos, Covid
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<p>
									Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
								</p>

								<a href="blog-detail.html" class="dis-block txt4 m-t-30">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						

						
						<!-- Pagination -->
						<div class="pagination flex-l-m flex-w m-l--6 p-t-25">
							<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
							<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<!-- Search -->
						<div class="search-sidebar2 size12 bo2 pos-relative">
							<input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search" placeholder="Search">
							<button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
						</div>

						<!-- Categories -->
						<div class="categories">
							<h4 class="txt33 bo5-b p-b-35 p-t-58">
								Categories
							</h4>

							<ul>
								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Simpan Pinjam
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Tabungan
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Retribusi Persampahan
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Penyewaan Alat
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										PPOB
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Bantuan Sosial
									</a>
								</li>
							</ul>
						</div>

						<!-- Most Popular -->
						<div class="popular">
							<h4 class="txt33 p-b-35 p-t-58">
								Most popular
							</h4>

							<ul>
								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/img/home/3.jpeg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Bantuan Sosial
										</a>

										<span class="txt14">
											5 days ago
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/img/home/5.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Simpan Pinjam
										</a>

										<span class="txt14">
											3 Agustus, 2020
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/img/home/4.jpeg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											PPOB
										</a>

										<span class="txt14">
											1 Agustus, 2020
										</span>
									</div>
								</li>
							</ul>
						</div>


						<!-- Archive -->
						<div class="archive">
							<h4 class="txt33 p-b-20 p-t-43">
								Archive
							</h4>

							<ul>
								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										uly 2018
									</a>

									<span class="txt29">
										(9)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										June 2018
									</a>

									<span class="txt29">
										(39)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										May 2018
									</a>

									<span class="txt29">
										(29)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										April  2018
									</a>

									<span class="txt29">
										(35)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										March 2018
									</a>

									<span class="txt29">
										(22)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										February 2018
									</a>

									<span class="txt29">
										(32)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										January 2018
									</a>

									<span class="txt29">
										(21)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										December 2017
									</a>

									<span class="txt29">
										(26)
									</span>
								</li>
							</ul>
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
