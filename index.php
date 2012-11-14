<?php
// Generate a random favicon color. Why? Because we can
$hex = '0123456789abcdef';
$colors = array($hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)]);
$rgb = implode('',$colors);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="http://placehold.it/32x32/<?php echo $rgb ?>/000000.png&amp;text=PHP" />

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Offside" />
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		
		<title>PHP Reference</title>
	</head>
	<body>
		<nav>
			<?php include('layout/nav.php');?>
		</nav>
		<div id="wrapper">
			<div id="content">
				<?php include('layout/content.php');?>
			</div>
		</div>
		<footer>
			<?php include('layout/footer.php');?>
		</footer>
	</body>
</html>