<?php
// The query string is stored into the super global array
// called $_GET

// For testing, if you want to display the entire query string,
// instead of echo or print, use print_r. This is best displayed 
// inside of a <pre> element to preserve whitespace (tabs)
echo '$_GET: ';
print_r($_GET);

// To display a parameter value, use the parameter name between
// square brackets => $_GET['parameterName']

// Display the value of the day parameter
echo 'Today is '.$_GET['day'].'<br/>';

// Display the value of the month parameter
echo "It's {$_GET['month']}!";
?>