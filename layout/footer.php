<?php 
$year = 2011;
$currYear = date('y');
if($currYear > 11) {
	$year .= '-'.$currYear;
}
?>
<p>Copyright &copy; <?php echo $year; ?> Mr. Chris Ramey</p>