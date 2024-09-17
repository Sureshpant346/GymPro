<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>GYM-PR0 | Contact Us</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Contact US</h2>
					<h3> <img src="contact_1876505.png" height="150" weight="150" >  </h3>
				</div>
			</div>
		</div>
	</section>

	<div class="contact-container">
            <form ction="https://api.web3forms.com/submit" method="POST" class="contact-left">
              <div class="conatct-left-title">
                <h2> Get in touch</h2>
                <hr>
              </div>
              <input type="hidden" name="access_key" value="b8428770-9618-472f-ab29-86939433ba50">
              <input type="text" name="name" placeholder="your name" class="contact-inputs" required>
              <input type="email" name="email" placeholder="email" class="contact-inputs" required>
              <textarea nmae="message" placeholder="Your message" class="contact-inputs" required></textarea>
              <button type="submit"> Submit <img src="icon.png" alt=""> </button>
            </form>
            <div class="class-conatct-right">
                <img src="31644-7-bodybuilding-clipart.png" height="700" weight="700" alt="">
            </div>
          </div>

		  <section class="pricing-section spad">
		<div class="container">

			<div class="row">

				<div class="col-lg-12 col-sm-6">
					<h2> Contact Us:</h2>
<p><strong>Email:</strong> sureshpant346@gmail.com</p>
<p><strong>Contact No:</strong> 9849913240</p>
<p><strong>Address:</strong> Kathmandu, Kritipur </p>
				</div>
			</div>
		</div>
	</section>

	
<!-- Footer Section -->
<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->


	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
