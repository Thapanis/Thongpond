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
                <a class="dropdown-item active" href="order.php">รายการสินค้า</a>
                <a class="dropdown-item" href="checkout.php">ชำระเงิน</a>
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
					JOIN product p ON p.product_id = o.product_id WHERE o.pay_id = 0 ";
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

    <div class="hero-wrap hero-bread" style="background-image: url('images/shop-2.jpg');"></div>

    <section class="ftco-section ftco-cart">
			<div class="container">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">รายการสั่งสินค้าของคุณ</span>
					</div>		
				<div class="row">
    				<div class="col-md-12 ftco-animate">
    					<div class="cart-list">
	    					<table class="table">
						    	<thead class="thead-primary">
						      	<tr class="text-center">
						       		<th>&nbsp;</th>
									<th>No</th>
						       		<th>&nbsp;</th> 
									<th>ชื่อสินค้า</th>
									<th>ราคาต่อชิ้น</th>
									<th>จำนวน</th>
									<th>ราคารวม</th>
									<th></th>
						      	</tr>
						    	</thead>
						    	<tbody>
								<?php
									$sql = "SELECT o.order_id, o.quantity, o.totalprice, p.product_name, p.price FROM `order` o 
									JOIN product p ON p.product_id = o.product_id 
									JOIN member m ON m.member_id = o.member_id 
									WHERE m.member_name = '".$_SESSION["username"]."' 
									AND o.pay_id = 0 ";
									
									$totalPriceForPayment = 0;
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
										echo "<tr> ";
										echo "<td> <a href='action/del_order.php?id=" . $row["order_id"] . "' class='btn btn-danger'>ลบ</a></td>";
										echo "<td id ='orderId'>". $row["order_id"] ."</td>";
										echo "<td>  </td>";
										echo "<td>". $row["product_name"] ."</td>";
										echo "<td>฿". $row["price"] ." </td>";
										echo "<td><input type='number' id='qu_".$row["order_id"]."' value='" . $row["quantity"] ."' min='0' /></td>";
										echo "<td>฿". $row["totalprice"] ."</td>";
										echo "<td><a data-id='". $row["order_id"] ."' data-quantity='" . $row["quantity"] ."' data-price='" . $row["price"] ."' ' href='action/add_order.php?id=". $row["order_id"] .""."&quantity=". $row["quantity"] ."' class='btn btn-outline-success buttonClick'>บันทึก</td>";
										echo "</tr> ";

										$totalPriceForPayment += $row["totalprice"];
										}

										echo "<tr> ";
										echo "<td></td>";
										echo "<td></td>";
										echo "<td></td>";
										echo "<td></td>";
										echo "<td></td>";
										echo "<td>ราคารวม</td>";
										echo "<td>฿".$totalPriceForPayment."</td>";
										echo "<td></td>";
										echo "</tr> ";
									}

									$conn->close();
								?>
						    	</tbody>
							</table>
						  <p><center><a href="checkout.php" class="btn btn-success py-50 px-60">สั่งสินค้า</center></a></p>
					  </div>
    			</div>
    		</div>
    		<!--div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>$17.60</span>
    					</p>
    				</div>
    				<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section-->


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
			$('.buttonClick').click(function(e){
				var orderId = $(this).attr('data-id');
				var quantity = parseInt($('#qu_'+orderId).val());
				var price = parseInt($(this).attr('data-price'));
				$('.buttonClick').attr('href','action/update_order.php?id='+orderId+'&quantity='+quantity+'&price='+price);
		        //return window.location.href = 'action/add_order.php?id='+orderId+'&quantity='+quantity;
		    });
			
		    
		});
	</script>
    
  </body>
</html>