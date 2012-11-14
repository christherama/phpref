<?php
/* 
 * DISPLAY WHETHER WE'RE IN THE FIRST OR LAST HALF OF THE MONTH
 */

// Get the current day number
$day_num = date('j');

if($day_num < 15) {  // first half
	echo "We're in the <em>first</em> half of the month!";
} elseif ($day_num > 15) { // last half
	echo "We're in the <em>last</em> half of the month!";
} else { // 15th of the month
	echo "Is the month halfway <em>complete</em>, or halfway <em>incomplete</em>...?";
}
?>