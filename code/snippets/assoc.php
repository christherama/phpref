<?php
// Make an associative array of cabinet members
$cabinet = array(
	'vice president'        => 'Joe Biden',
	'secretary of defense'  => 'Leon Panetta',
	'secretary of state'    => 'Hillary Clinton',
	'secretary of treasury' => 'Timothy Geithner'
);

// Display the entire array
echo '$cabinet: ';
print_r($cabinet);

// Iterate over the array, displaying as a table
echo '<table>';
foreach($cabinet as $position => $name) {
	echo "<tr><th>$position</th><td>$name</td></tr>";
}
echo '</table>';
?>