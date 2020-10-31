<?php
	include 'connectdb.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
	      <a class="navbar-brand" style="align=center" href="index.php">Worldgrow Organic Farm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">กลับไปหน้าหลัก</a></li>
          </ul>
        </div>
	    </div>
	  </nav>
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
        <div class="col-md-50">
        <h3 align="center">  เพิ่ม ข้อมูลสินค้าใหม่</h3>

       <div class="form-group">
            <div class="col-sm-50"></div>
       <div class="col-sm-100" align="center">
       <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
       </div>
       </div>

       <form action="action/add_product_db.php"  method="post" enctype="multipart/form-data" name="add_product" id="add_product">
            
       <table width="600" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
                <td colspan="1000" align="center">&nbsp;</td>
        </tr>
        <tr>
                <td width="120" align="center">ชื่อสินค้า :</td>
                <td colspan="2"><label for="product_name"></label>
                <input name="product_name" type="text" required id="product_name" size="50"/></td>
        </tr>
        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td> <!-- space -->
         </tr>
         <tr>
                <td width="120" align="center" >รายละเอียดสินค้า:</td>
                <td colspan="50">
                <textarea name="product_detail" id="product_detail" class="ckeditor" cols="80" rows="5"></textarea>
                </td>
        </tr>

        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
                <td align="right" valign="middle" >ราคาขาย:</td>
                <td width="190"><label for="price"></label>
                <input type="number" name="price" id="price" required/></td>
                <td width="500">&nbsp; </td>
        </tr>
        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
                <td align="right" valign="middle">ประเภทสินค้า :</td>
                <td colspan="2">
                <label for=""></label>
                <select name="producttype_id" id="producttype_id" required="required">
                <option value="">กรุณาเลือกประเภท</option>
                <option value="1">ผัก</option>
                <option value="2">ผลไม้</option>
                <option value="3">น้ำผลไม้</option>
                <option value="4">ของแห้ง</option>
                <option value="5">สะอาด</option>
                </select>
                </td>
        </tr>
        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
                <td align="right" valign="middle" >จำนวน:</td>
                <td width="190"><label for="quantity"></label>
                <input type="number" name="quantity" id="quantity" required/></td>
        </tr>
        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
                <td align="right" valign="middle">รูปภาพสินค้า:</td>
                <td colspan="2"><label for="product_img"></label>
                <input name="product_img" type="file" required class="bg-warning" id="product_img" size="40" /></td>
        </tr>
        <tr>
                <td>&nbsp;</td>
                <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">เพิ่มสินค้า</button></td>
        </tr>

            </table>
        </form>
               
    
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