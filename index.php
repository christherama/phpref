<?php
// Generate a random favicon color. Why? Because we can
$hex = '0123456789abcdef';
$colors = array($hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)],$hex[rand(0,15)]);
$rgb = implode('',$colors);

// Get directory of current request, to facilitate URL rewriting (i.e. nice URLs)
$ROOT = '//'.$_SERVER['SERVER_NAME'].'/phpref';

// Change to true for nice URLs (also need to remove # at beginning of lines in .htaccess file)
$URL_REWRITING = false;
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="//placehold.it/32x32/<?php echo $rgb ?>/000000.png&amp;text=PHP" />

		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Offside" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo $ROOT; ?>/assets/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $ROOT; ?>/assets/bootstrap/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $ROOT; ?>/assets/styles.css?l=99" />
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="<?php echo $ROOT; ?>/assets/bootstrap/js/bootstrap.js"></script>
		
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