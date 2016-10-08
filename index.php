<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Главная</title>


<link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">


<link rel="stylesheet" href="css/style.css">


<script src="libs/jquery/jquery-3.1.1.min.js"></script>


</head>
<body>
<div class="page_preloader">
<div class="spinner">
	<img src="img/ring-alt.svg">
</div>
</div>
<?php require ("sidebar.php"); ?>
<main class="main_content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-6 main_carousel main_left_column full_screen_column">
				<div class="carousel_wrapper">
					<ul>
						<li>
							<img src="img/1.png">
						</li>
						<li>
						<img src="img/1.png"></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 full_screen_column">
				<div class="row">
					<div class="col-xs-12 col-md-12 main_right_column"></div>
					<div class="col-xs-12 col-md-6"></div>
					<div class="col-md-6 col-xs-12"></div>
				</div>
			</div>
		</div>
	</div>
</main>
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
</body>
</html>
