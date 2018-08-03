<?php
//include the database connection file
require('db.php');

//if details are submitted send to the database

if(isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_strings($conn,$username);
	$password = stripslashes($_REQUEST['username']);
	$password = mysqli_real_escape_strings($conn,$password);
	$location = stripslashes($_REQUEST['username']);
	$location = mysqli_real_escape_strings($conn,$location);
	$reg_date = date(Y-m-d H:i:s);

	$query = "INSERT INTO `users`(username, password, location,reg_date)
	VALUES('$username','".md5($password}"','$location','$reg_date')";

		$result = mysqli_query($conn,$query);
		if($result){
			echo"you have successgully registered";
		}}else{
			?>
			<div class="form">
			<form method="post" action="">
			<input type="text" name="username" placeholder="username"/>
			<input type="text" name="password" placeholder="password"/>
			<input type="text" name="location" placeholder="location"/>
			</form>
		<?php
	}
	?>
