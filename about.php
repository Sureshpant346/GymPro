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
	<title>GYM-PRO | About</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
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
	<h1>About US</h1>
<h2> <img src="banner-young-fitness.png"> </h2>
</div>
</div>
</div>
</section>



<!-- Pricing Section -->
<section class="pricing-section spad">
<div class="container">
<div class="section-title text-center">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<br>
<br>
<br>
<h2>About Us</h2>
</div>
<div class="row">

<div class="col-lg-12 col-sm-6">
<p>Introducing GymPro, the comprehensive solution for gym management tailored to streamline operations and enhance member experiences. GymPro offers a seamless platform equipped with features designed to optimize every aspect of gym administration, from membership management to class scheduling and beyond. With its user-friendly interface, GymPro empowers gym owners and managers to efficiently handle tasks such as tracking attendance, managing memberships, and handling payments, all in one centralized system.

GymPro doesn't just cater to the administrative side of gym management; it also prioritizes member engagement and satisfaction. Through its integrated communication tools, members can easily book classes, receive updates on promotions or schedule changes, and interact with trainers and fellow members, fostering a sense of community within the gym. Furthermore, GymPro's analytics capabilities provide valuable insights into member preferences and trends, enabling gyms to tailor their offerings and maximize member retention. With GymPro, gyms can elevate their operations and provide a superior experience for both staff and members alike.</p>
</div>
</div>
</div>
</section>

<!-- Footer Section -->
<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->


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

	

	                                                                              
	