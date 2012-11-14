<?php
/* 
 * COUNT DOWN TO THE NUMBER SPECIFIED IN THE QUERY STRING
 */

// Get the value of 'w' in the query string
$w = $_GET['w'];

// Don't kill the server
if($w > 1000) {
	$w = 1000;
}

echo "T-minus...";
while($w >= 0) {
	echo " $w";
	$w--; // change the value of $w
}
echo '<h3>BOOM!</h3>';
?>