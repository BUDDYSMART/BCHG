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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><img src="../../img/BUDDY-B.png"> <a href="index.html">BE SMART</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <br><br>

  <main id="main">	
	 <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>SMART Market</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">ทั้งหมด</li>
              <li data-filter=".filter-food">อาหาร / เครื่องดื่ม</li>
              <li data-filter=".filter-fashion">แฟชั่น</li>
			  <li data-filter=".filter-other">อื่นๆ</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

		<?
		$row = 1;
        if (($handle = fopen("market.txt", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			//$num = count($data);
			$num = 200;
			// 0 = รหัส
			// 1 = ชื่อร้าน
			// 2 =ราคา
			// 3 = ประเภท
			// 4 = Line
			// 5 = เบอร์โทร
			if($row>=2){
			?>
			<div class="col-lg-4 col-md-6 portfolio-item filter-<?=$data[3]?>">
            <div class="portfolio-wrap">
              <img src="img/<?=$data[0]?>.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
				  <h4>ร้าน <?=$data[1]?></h4>
                  <p>ราคา <?=$data[2]?> บาท</p>
                  <div class="portfolio-links">
                    <a href="viewmarket.php?view=<?=$data[1]?>&id=<?=$data[0]?>&price=<?=$data[2]?>&line=<?=$data[4]?>&phone=<?=$data[5]?>" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
			<?
			}
			$row++;	
			}
			fclose($handle);
		}
		?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->




 

    

  


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <small>&copy; Copyright <strong><span>By Corporate People Service</span></strong></small>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/groups/benchachinda.society" class="facebook"><i class="bx bxl-facebook"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

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