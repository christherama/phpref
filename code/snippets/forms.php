<?php
// Display the form
echo '
<form action="./?ref=forms" method="post">
	<input type="text" name="first_name" placeholder="First Name" />
	<input type="text" name="last_name" placeholder="Last Name" />
	<input type="password" name="password" placeholder="password" />
	<input type="submit" value="Submit"/>
</form>';
echo "\n";

// If form data was submitted, process it. Otherwise, display a message
if(count($_POST) > 0) {
	// Display posted data
	echo '$_POST: ';
	print_r($_POST);

	// Display data that user entered in a table
	echo "<table>
	<tr>
		<th>First Name</th>
		<td>{$_POST['first_name']}</td>
	</tr>
	<tr>
		<th>Last Name</th>
		<td>{$_POST['last_name']}</td>
	</tr>
	<tr>
		<th>Password</th>
		<td>{$_POST['password']}</td>
	</tr>
</table>";
} else {
	echo '<p class="alert">Enter information into the form and click <em>Submit</em>.</p>';
}
?>