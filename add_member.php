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

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    

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

	<!--?php include('h.php');?-->
    <!--?php include('datatable.php');?-->

    <script type="text/javascript">
      function checkmyform(){
        if(document.getElementById("admin_pass").value != document.getElementById("admin_conpass").value){
          alert("Password not match.");
          return false;
        }

        document.getElementById("register").submit();
      }
    </script>
    
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
        <div class="col-md-100">
        <h3 align="center">  เพิ่ม สมาชิก </h3>
   
    <form  name="register" action="action/add_user.php" method="POST" id="register" class="form-horizontal">
       <div class="form-group">
       <div class="col-sm-100">  </div>
       <div class="col-sm-100" align="center">
       <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
       </div>
       </div>
       <div class="form-group">
            <div class="col-sm-100" align="left"> ชื่อ : </div>
            <div class="col-sm-100" align="left">
            <input  name="admin_firstname" type="text" required class="form-control" id="admin_firstname" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
        </div>
        
        <div class="form-group">
        <div class="col-sm-100" align="left"> นามสกุล : </div>
          <div class="col-sm-100" align="left">
            <input  name="admin_lastname" type="text" required class="form-control" id="admin_lastname" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-100" align="left"> ที่อยู่ : </div>
          <div class="col-sm-100" align="center">
            <input  name="admin_addr" type="text" required class="form-control" id="admin_addr" />
          </div>
        </div>

        <div class="form-group">
            <div class="col-sm-100" align="left"> เบอร์โทรศัพท์ : </div>
            <div class="col-sm-100" align="left">
            <input  name="admin_tel" type="text" required class="form-control" id="admin_tel" placeholder="" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-100" align="left"> ชื่อผู้ใช้งาน : </div>
            <div class="col-sm-100" align="left">
            <input  name="admin_user" type="text" required class="form-control" id="admin_user" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-100" align="left"> รหัสผ่าน : </div>
            <div class="col-sm-100" align="left">
            <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-100" align="left"> ยืนยันรหัสผ่าน : </div>
            <div class="col-sm-100" align="left">
            <input  name="admin_conpass" type="password" required class="form-control" id="admin_conpass" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
        </div>

        <input  name="admin_role" type="hidden" id="admin_role" value="A" />
    
      <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="button" class="btn btn-primary" id="btn" onclick="checkmyform();"> บันทึก</button>
          </div>
           
      </div>
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
<!--?php  include('f.php');?-->