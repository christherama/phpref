<?php
// A simple loop displaying an unordered list of
// the first ten numbers
echo '<ul>';
for($i = 0; $i < 10; $i++) {
	echo '<li>Item #'.($i+1).'</li>';
}
echo "</ul>";

// A nested loop to display a multiplication table
echo '<h3>Multiplication Table</h3>';
echo '<table>';
for($a = 1; $a <= 10; $a++) {
	echo '<tr>';
	for($b = 1; $b <= 10; $b++) {
		$product = $a * $b;  // multiply two numbers
		echo "<td>$product</td>";
	}
	echo '</tr>';
}
echo '</table>';
?>