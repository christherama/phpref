<?php
// Display a message indicating whether it's an odd or even day

// Get the current day number
$day_num = date('j');

if($day_num % 2 == 0) { // if divisible by two
	echo 'Today is an <em>even</em> day!';
} else {
	echo 'Today is quite an <em>odd</em> day...';
}
?>