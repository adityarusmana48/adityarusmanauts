<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
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

    <?php
    include_once 'koneksi.php';
    $id_portofolio = $_GET['id_portofolio'];
    $data = mysqli_query($conn,"SELECT * FROM portofolio WHERE id_portofolio='$id_portofolio'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_portofolio.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id_portofolio" value="<?php echo $d['id_portofolio']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Nonakademik1</label>   
                     <input type="text" class="form-control" name="nonakademik1" value="<?php echo $d['nonakademik1']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Nonakademik2</label>   
                     <input type="text" class="form-control" name="nonakademik2" value="<?php echo $d['nonakademik2']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Nonakademik3</label>   
                     <input type="text" class="form-control" name="nonakademik3" value="<?php echo $d['nonakademik3']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Akademik1</label>   
                     <input type="text" class="form-control" name="akademik1" value="<?php echo $d['akademik1']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Akademik2</label>   
                     <input type="text" class="form-control" name="akademik2" value="<?php echo $d['akademik2']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Akademik3</label>   
                     <input type="text" class="form-control" name="akademik3" value="<?php echo $d['akademik3']; ?>">
                 </div>

                    <input type="submit" class="btn btn-primary">    
        </form>
    </div>
        <?php 
    }
    ?>

	
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
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>