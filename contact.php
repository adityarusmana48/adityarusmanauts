
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Biodata</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li><a href="index.php"><span>Home</span></a></li>
						<li><a href="gallery.php"><span>Gallery</span></a></li>
						<li><a href="about.php"><span>About</span></a></li>
						<li class="fh5co-active"><a href="contact.php"><span>Contact</span></a></li>
						<li><a href="portofolio.php"><span>Portofolio</span></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(images/person3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Selamat Datang</h1>
							<p>Di Kontak Saya</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
include "koneksi.php";
$query="SELECT * FROM contact";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) < 0) {
  echo "<tr><td colspan='4'>Data profil tidak terdapat pada database</td></tr>";
}
else {
 while($row =mysqli_fetch_array($result)){

?>		

		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2>Contact Info</h2>

						<p>Google : <?php echo $row["google"]?></p> <br>
						<p>YouTube : <?php echo $row["youtube"]?></p> <br>
						<p>Facebook : <?php echo $row["facebook"]?></p> <br>
						<p>Instagram : <?php echo $row["instagram"]?></p> <br>

						<ul class="fh5co-social">
							<li><a href="https://www.google.com/search?safe=strict&sxsrf=ALeKk02m3boKjDMF8zHAIXSaF7_H_c285A%3A1604229423756&ei=L5meX_DVLYXWz7sP37qC0As&q=adityarus_&oq=adityarus_&gs_lcp=CgZwc3ktYWIQAzIFCAAQzQIyBQgAEM0COgcIIxCwAhAnOgQIABANOgYILhANEApQvSVYvSVg5yhoAHAAeACAAaoBiAGpApIBAzAuMpgBAKABAaoBB2d3cy13aXrAAQE&sclient=psy-ab&ved=0ahUKEwiwqcOnnOHsAhUF63MBHV-dALoQ4dUDCAw&uact=5"><i class="icon-google"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCHyVQLQxWcFZwr63v0l4sYA"><i class="icon-youtube"></i></a></li>
							<li><a href="https://www.facebook.com/aditya.naklapres"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/adityarus_/?igsh"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-7">
						<?php echo '<img src="images/'.$row['gambar'].'" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">'?>
					</div>
				</div>
			</div>
		</div>
		
	</div> <!-- END fh5co-wrap -->
<?php
}
}
?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-copyright text-center">
					<p><small>&copy; 2020 Created By Aditya Rusmana</a></small></p>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

