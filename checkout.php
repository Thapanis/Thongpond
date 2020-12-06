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
									echo "<a class='text' href='/worldgrow/login/login.php'>เข้าสู่ระบบ</a>";
								} else {
									echo "<span class='text'>ผู้ใช้งาน : ".$_SESSION["username"]."</span>";
									echo "&nbsp;&nbsp;";
									echo "<a class='text' href='action/logout.php'>ออกจากระบบ</a>";
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
	      <a class="navbar-brand" href="index.php">Worldgrow Organic Farm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">หน้าหลัก</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ร้านค้า</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">ร้านค้า</a>
                <a class="dropdown-item" href="order.php">รายการสั่งซื้อ</a>
                <a class="dropdown-item active " href="checkout.php">ชำระเงิน</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">เกี่ยวกับ</a></li>
			  	<?php
					if(isset($_SESSION["role"]) && $_SESSION["role"] == "A"){
						echo "<li class='nav-item'><a href='admin.php' class='nav-link'>ผู้ดูแลระบบ</a></li>";
					}
				?>
	          <?php
					$sql = "SELECT o.order_id, o.quantity, o.totalprice, p.product_name, p.price FROM `order` o
					JOIN product p ON p.product_id = o.product_id ";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						echo "<li class='nav-item cta cta-colored'><a href='order.php' class='nav-link'><span class='icon-shopping_cart'></span>[". $result->num_rows ."]</a></li>";
					} else {
						echo "<li class='nav-item cta cta-colored'><a href='order.php' class='nav-link'><span class='icon-shopping_cart'></span>[0]</a></li>";
					}
				?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/shop-3.jpg');"></div>
	<section class="ftco-section">
		<div class="container">
		
		</div>
	</section>
							
		
    <section class="ftco-section">
      	<div class="container">
        	<div class="row justify-content-center">
          		<div class="col-xl-7 ftco-animate">
					<form action="#" class="billing-form">
						<h3 class="mb-4 billing-heading">รายละเอียดการเรียกเก็บเงิน</h3>
						<?php
							$sql = "SELECT member_id, member_fname, member_lname, address, phone FROM member WHERE member_name = '".$_SESSION["username"]."' ";			
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<div class='row align-items-end'>";
										echo "<div class='col-md-6'>";
											echo "<div class='form-group'>";
												echo "<label for='firstname'>ชื่อ: ".$row['member_fname']."</label>";
												// echo "<input type='text' name='fn_".$row['member_fname']."' value='" . $row["member_fname"] ."' min='0' />";
											echo "</div>";
										echo "</div>";
										echo "<div class='col-md-6'>";
											echo "<div class='form-group'>";
												echo "<label for='lastname'>นามสกุล: ".$row['member_lname']."</label>";
												// echo "<input type='text' name='fn_".$row['member_lname']."' value='" . $row["member_lname"] ."' min='0' />";
											echo "</div>";
										echo "</div>";
									echo "</div>";
									echo "<div class='row align-items-end'>";
										echo "<div class='col-md-12'>";
											echo "<div class='form-group'>";
												echo "<label for='streetaddress'>ที่อยู่: ".$row['address']."</label>";
												// echo "<input type='text' name='fn_".$row['address']."' value='" . $row['address'] ."' min='0' />";
											echo "</div>";
										echo "</div>";
									echo "</div>";
									echo "<div class='row align-items-end'>";
										echo "<div class='col-md-12'>";
											echo "<div class='form-group'>";
												echo "<label for='phone'>หมายเลขโทรศัพท์: ".$row['phone']."</label>";
												// echo "<input type='text' name='fn_".$row['phone']."' value='" . $row['phone'] ."' min='0' />";
											echo "</div>";
										echo "</div>";
									echo "</div>";
								}
							}
							// $conn->close();
						?>
					<div class="form-group">
						<div class="col-mt-4">
							<div class="radio">
								<label><input type="radio" name="optradio"></label>
									<tr>
										<td align="right" valign="middle">แนบสลิปโอนเงิน :</td>
										<td colspan="2"><label for="p_img1"></label>
										<input name="p_img1" type="file" required class="bg-warning" id="p_img1" size="40" /></td>
									</tr>
								</div>
							</div>
						</div>
						<?php 
							$totalPrice = 0; 
							echo "<a href='action/add_payment.php?total=".$totalPrice."&memberId=".$_SESSION["username"]."' class='btn btn-info' role='button'>เสร็จสิ้น</a>"; 
						?>
						<a href="order.php" class="btn btn-danger" role="button">ยกเลิก</a>
					</div>
					<div class="col-xl-5">
	          			<div class="row mt-5 pt-3">
	          				<div class="col-md-12 d-flex mb-5">
	          					<div class="cart-detail cart-total p-3 p-md-4">
	          						<h3 class="billing-heading mb-4">รายการสินค้าทั้งหมด</h3>
										<?php
											$sql = "SELECT o.totalprice FROM `order` o JOIN member m ON m.member_id = o.member_id WHERE m.member_name = '".$_SESSION["username"]."' AND pay_id = 0 ";	
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
													$totalPrice += $row['totalprice'];
												}
											}

											echo "<p class='d-flex'>";
												echo "<span>ยอดรวมสินค้า:</span>";
												echo "<span>฿".$totalPrice."</span>";
											echo "</p>";
											echo "<p class='d-flex'>";
												echo "<span>รวมการจัดส่ง:</span>";
												echo "<span>฿0</span>";
											echo "</p>";
											echo "<p class='d-flex'>";
												echo "<span>การชำระเงินทั้งหมด:</span>";
												echo "<span>฿".$totalPrice."</span>";
											echo "</p><hr>";
											echo "<p class='d-flex total-price'>";
												echo "<span>ทั้งหมด:</span>";
												echo "<span>฿".$totalPrice."</span>";
											echo "</p>";

											$conn->close();
										?>
									</div>
	          					</div>
        					</div>
      					</div>
					</div>
					</form>
				</div>
			</div>
		</div>
    </section> <!-- .section -->
	

	<footer class="ftco-footer ftco-section">
      	<div class="container">
			<div class="row">
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
					</a>
				</div>
			</div>
      	</div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>