<?php
// Make an array
$names = array('Samantha','Charlie','Susie');

// Display entire array
echo '$names: ';
print_r($names);
echo '<br/>';

// Display value at key (position) #1 (keys start at 0)
echo $names[1];
echo '<br/>';

// Assign a new value at key #0
$names[0] = 'Cookie Monster';

// Verify change by displaying entire array
echo '$names: ';
print_r($names);

// Display all names in an unordered list
echo '<ul>';
foreach($names as $n) {
	echo "<li>$n</li>";
}
echo '</ul>';
?>