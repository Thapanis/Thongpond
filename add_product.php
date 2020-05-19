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
        <div class="col-md-50">
        <h3 align="center">  เพิ่ม ข้อมูลสินค้าใหม่</h3>
   
    <form  name="register" action="add_admin_db.php" method="POST" id="register">
       <div class="form-group">
            <div class="col-sm-50"></div>
       <div class="col-sm-100" align="center">
       <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
       </div>
       </div>

       
        <form action="add_product_db.php"  method="post" enctype="multipart/form-data" name="" id="">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
                <td colspan="3" align="center">&nbsp;</td>
        </tr>
        <tr>
                <td width="129" align="center" valign="top">ชื่อสินค้า :</td>
                <td colspan="10"><label for="product_name"></label>
                <input name="product_name" type="text" required id="product_name" size="50"/></td>
        </tr>
        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td> <!-- space -->
         </tr>
         <tr>
                <td width="120" align="center" >รายละเอียดสินค้า :</td>
                <td colspan="10">
                <textarea name="p_detial" id="p_detial" class="ckeditor" cols="80" rows="5"></textarea>
                </td>
        </tr>

        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
                <td align="right" valign="middle" >ราคาขาย :</td>
                <td width="190"><label for="product_price"></label>
                <input type="number" name="product_price" id="product_price" required/></td>
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
                <select name="t_id" id="t_id" required="required">
                <option value="">กรุณาเลือกประเภท</option>
                <option value="ผัก">vegetable</option>
                <option value="ผลไม้">Fruits</option>
                <option value="น้ำผลไม้">Juice</option>
                <option value="ของแห้ง">Dried</option>
                <option value="สะอาด">Organic</option>
                </select>
                </td>
        </tr>
        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
                <td align="right" valign="middle" >จำนวน :</td>
                <td width="190"><label for="product_price"></label>
                <input type="number" name="product_price" id="product_price" required/></td>
                <td width="500">&nbsp; </td>
        </tr>
        <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
                <td align="right" valign="middle">รูปภาพสินค้า1 :</td>
                <td colspan="2"><label for="p_img1"></label>
                <input name="p_img1" type="file" required class="bg-warning" id="p_img1" size="40" /></td>
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