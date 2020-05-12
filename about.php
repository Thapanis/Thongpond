<?php
	include 'connectdb.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WorldGrow Organic Farm at Maesai Chiangrai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    <div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">088 623 9445</span>
					    </div>
					    <div class="col-md pr-5 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">worldgrowthailand@gmail.com</span>
					    </div>
					    <div class="col-md-3 pr-1 d-flex topper align-items-center text-lg-right">
							<?php
								if(!isset($_SESSION["username"])){
									echo "<a class='text' href='/worldgrow/login/login.php'>LOGIN</a>";
								} else {
									echo "<span class='text'>USERNAME : ".$_SESSION["username"]."</span>";
									echo "&nbsp;&nbsp;";
									echo "<a class='text' href='action/logout.php'>LOGOUT</a>";
								}
							?>
					    </div>
				    </div>
			    </div>
		    </div>
		</div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">WorldGrow Organic Farm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="order.php">Order</a>
                <a class="dropdown-item active " href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
            <?php
					    if(isset($_SESSION["role"]) && $_SESSION["role"] == "A"){
                echo "<li class='nav-item'><a href='admin.php' class='nav-link'>Admin manage</a></li>";
              }
				    ?>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/aboutus.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>About us</span></p>
            <h1 class="mb-0 bread">About us</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">

				<div class="row">
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Welcome to WorldGrow Organic Farm at Maesai Chiangrai</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
                <!-- -->
						</div>
				</div>

        <div class="row">
          <div class="col-12">
            <p>Welcome to World Grow Organic farm, a 100% organic farming area. Here we do agriculture under compliance with international organic standards. 
              We grow vegetables and herbs and rely on the loving care of Mother Nature. Our hand-picked seeds are nourished by soil rich of organic nutrients, 
              hydrated with naturally clean water sources from the Tham Luang and Khun Nam Nang Non mountains, and nurtured by the fantastic climate of northern 
              Thailand to produce the highest quality vegetables and herbs. Consumers can be confident that all products from our farm are fresh, safe, clean, and 
              chemical free. It is our mission to provide the healthiest organic foods to our customers, while keeping the environment safe and clean.</p>
            <p>ที่นี่เราทำการเกษตรภายใต้มาตรฐานออร์แกนิคระดับสากล เราปลูกพืชผัก/สมุนไพร ด้วยใจรัก และอาศัยธรรมชาติในการดูแล อันได้แก่ ดินที่อุดมสมบูรณ์ไปด้วยอินทรียวัตถุ, 
              แหล่งน้ำธรรมชาติจากถ้ำหลวง ขุนน้ำนางนอน, เมล็ดพันธุ์ที่เราคัดสรรเอง ประกอบกับสภาพภูมิอากาศที่เอื้อต่อการเจริญเติบโตของพืชผัก/สมุนไพร เป็นอย่างดี เหล่านี้จึงเป็นต้นกำเนิดของ 
              เวิลด์โกรว์ ออร์แกนิค ฟาร์ม ที่ผู้บริโภคจะมั่นใจได้ว่า ผลิตภัณฑ์ที่มาจากฟาร์ม มีความสด สะอาด ปลอดภัย ไร้สารเคมี และมีมาตรฐาน อย่างแน่นอน</p>
            <h5><p style="text-align:center;">แผนการผลิตพืชอินทรีย์ Area 1</p></h5>
            <img src="images/about-area1.jpg" width="100%">
            <img src="images/about-area2.jpg" width="100%">
            <img src="images/about-area3.jpg" width="100%">
          </div>
        </div>

			</div>

      <br/><br/>
		</section>

  <footer class="ftco-footer ftco-section">
      <div class="container">
    <div class="row">
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
        </a>
      </div>
    </div>
    <div class="row mb-5">
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
      <h2 class="ftco-heading-2">WorldGrow</h2>
      <p> Consumers can be confident that all products from our farm are fresh, safe, clean, and chemical free. It is our mission to 
        provide the healthiest organic foods to our customers, while keeping the environment safe and clean.</p>
      <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
        <li class="ftco-animate"><a href="https://www.facebook.com/WGorganicfarm/"><span class="icon-facebook"></span></a></li>
      </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Contact us</h2>
        <div class="block-23 mb-3">
        <ul>
          <li><span class="icon icon-map-marker"></span><span class="text">39 Moo 1 Pongpha 57130, Thailand</span></li>
          <li><span class="icon icon-phone"></span><span class="text">088 623 9445</span></li>
          <li><span class="icon icon-envelope"></span><span class="text">worldgrowthailand@gmail.com , worldgrow@hotmail.co.th</span></li>
        </ul>
        </div>
      </div>
    </div>
    </div>
      </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>