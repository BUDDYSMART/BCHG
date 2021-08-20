<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BCHG : BE SMART</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/buddy-favicon.png" rel="icon">
  <link href="../../assets/img/buddy-touch.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.3.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .buddy-bg {
	  width: 100%;
	  height: 100vh;
	  position: relative;
	  background-image: url("assets/img/hero-bg2.jpg") top center;
	  background-size: cover;
	  position: relative;
	}
  </style>
</head>

<body>
  <br>
  <main id="main">
	<!-- ======= About Video Section ======= -->
    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-6 col-md-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="img/<?=$_GET['id'];?>.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 col-md-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>ร้าน <? echo $_GET['view']; ?></h3>
            <p class="fst-italic">
              
            </p>
            <ul>
              <li>ราคา  :  <?=$_GET['price'];?> บาท</li>
              <li>Line :  <?=$_GET['line'];?></li>
              <li>เบอร์ติดต่อ :  <a href="tel:<?=$_GET['phone'];?>"><?=$_GET['phone'];?></a></li>
			  
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->
  </main><!-- End #main -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });x
    });
  });
</script>
</body>
</html>