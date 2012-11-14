<?php
// Read 'sample.csv' file into an array of lines
$lines = file('data/sample.csv',FILE_IGNORE_NEW_LINES);

// Display the lines
echo '$lines: ';
print_r($lines);

// Loop over lines, displaying formatted contact data
foreach($lines as $line) {
	// Break the comma-separated values (CSV) into an array of parts
	$parts = explode(',',$line);

	// Construct full name
	$last_name = $parts[0];
	$first_name = $parts[1];
	$name = "$first_name $last_name";

	// Get email address
	$email = $parts[2];

	echo "<h4>$name</h4>";
	echo "<a href=\"mailto:$email\">$email</a>";
}
?>