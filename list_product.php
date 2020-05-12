<!--?php include('access.php');?-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">worldgrowthailand@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">login</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	<!--?php include('h.php');?-->
    <!--?php include('datatable.php');?-->
  </head>
  <body>
  <div class="container">
  <div class="row">
         <?php include('banner.php');?>
   </div>
  	<div class="row">
    	<div class="col-md-2">
        <?php include('menu.php');?>        	 
      </div>


      <div class="col-md-10">
        <h3 align="center"> รายการสินค้า <a href="add_product.php" class="btn btn-primary"> + เพิ่มสินค้า </a> </h3>
           <table width="100%" border="1" cellspacing="0" class="display" id="example">
		    <thead>
          <tr align="center">
            <th width="10%">ภาพสินค้า</th>
            <th width="5%">id</th>
            <th width="10%">ชื่อสินค้า</th>
            <th width="50%">รายละเอียด</th>
            <th width="5%">ราคา</th>
            <th width="50%">ประเภทสินค้า</th>
            <th width="7%">จำนวนสินค้า</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
          </tr>
          
            <tr align="center">
            <th width="10%"></th>
            <th width="5%"></th>
            <th width="10%"></th>
            <th width="50%"></th>
            <th width="5%"></th>
            <th width="50%"></th>
            <th width="7%"></th>
            <th></th>
            <th></th>
            </tr>
            </thead>
          
            </table>
      </div>
    </div>
 </div>

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
<!--?php  include('f.php');?-->