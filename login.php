<?php

	require_once "config.php";
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	

	// Checks if the email is valid to prevent sql injection.
	if (filter_var($email, FILTER_VALIDATE_EMAIL))
	{

	// get password for that email
	$hash = $link->query("SELECT password FROM users WHERE email = '$email' limit 1")->fetch_object()->password;
	
	// no user
		if ($hash == null)
		{
		  $msg = "You are not registered, please register first!";
		  header("Location: index.php?msg=$msg");
		}
		//Wrong password
		else if (!password_verify($password, $hash))
		{
		  $msg = "Your password is incorrect!";
		  header("Location: index.php?msg=$msg");
		}
		// Login success
		else
		{
		  $id = $link->query("SELECT id FROM users WHERE email = '$email'")->fetch_object()->id;
		   
		  session_start();
		  $_SESSION['current_user'] = $id;
		  $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
		  
		  if (isset($_POST['rememberMe']))
			setcookie("email", $email, time() + (86400 * 30 * 31), "/"); //31 days
		  else
			setcookie("email", 'negative', 1, "/"); // expire 1 second after epoc (1 January 1970 00:00:00 UTC)
			
		  header("Location: noticeboard.php");
		}
	} 
	else
	{
		$msg = "Please enter a valid email address!";
		header("Location: index.php?msg=$msg");
	}
	mysqli_close($link);
	exit();
?>
