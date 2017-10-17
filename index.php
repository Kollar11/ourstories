<?php
/*
	file:	index.php
	desc:	Sample index for OurStories
*/
if(!empty($_GET['page'])) $page=$_GET['page'];else $page='';
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/ot.ico" type="image/x-icon">
  <meta name="description" content="">
  <title>Our Stories Along the Northern Lights Route</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <!--for map-->
  <link href="css/mapstyle.css" rel="stylesheet">
  <style>#map {height: 500px; width: 500px; }</style>
</head>
<body style="background-color: rgb(220, 255, 220);">
<nav class="navbar navbar-light mbr-navbar navbar-transparent navbar-fixed-top" id="menu-0" data-rv-view="0">
    <div class="container">
        <button class="navbar-toggler pull-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            <div class="hamburger-icon"></div>
        </button>

        <div class="clearfix"></div>
        <div class="collapse navbar-toggleable-sm" id="exCollapsingNavbar2">
            <span class="navbar-logo"><a href="index.php"><img src="images/ot.ico" alt="Home"></a></span>
            <span><a class="navbar-brand" href="index.php">OurStories</a></span>

            

            <ul class="nav navbar-nav pull-xs-right">
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php?page=map">Map</a></li>
				<li class="nav-item"><a class="nav-link" href="Login" data-toggle="modal" data-target="#loginform">Login</a></li></ul>
        </div>
    </div>
</nav>

<section class="mbr-section mbr-section-nopadding mbr-after-navbar" id="msg-box4-1" data-rv-view="2" style=" padding-top: 5rem; padding-bottom: 5rem;">
    
    <div class="container">
        <?php
		if($page=='map') include('map.html');
		else include('start.html');
		?>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="js/myscript.js"></script>
  <!--for map-->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJyMRA0og8zyH1WiqCVTOjC6CBVfDrEak"></script>
  <script src="js/jquery.googlemap.js"></script>
  <script src="js/myapp.js"></script>
  
</body>
</html>

<!--Modal form for login-->
<div id="loginform" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			 <h3>Login to adminsite</h3>
			 <form class="form-signin" id="formsignin">
			 Email: <input class="form-control" id="email" type="email" required />
			 Password: <input class="form-control" id="password" type="password" required />
			 <input class="btn btn-lg btn-primary btn-block" type="submit" id="submitbtn" value="Login" />
			 </form>
			</div>
			<div id="logininfo"></div>
			<div class="modal-footer">
				<button type="button" class="close" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>