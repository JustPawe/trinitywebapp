<?php
	require_once('config.php');

	$name = mysql_sanitize($link, $_POST["first_name"]);
	$surname = mysql_sanitize($link, $_POST["last_name"]);
	$email = mysql_sanitize($link, $_POST["email"]);
	$pass = mysql_sanitize($link, $_POST["password"]);
	$confirmpassword = mysql_sanitize($link, $_POST["confirmpassword"]);
	
	if (check_email($link, $email) && check_passwords($pass, $confirmpassword) && check_name($name))
	{
		// Hashes the password onto the database.
		$pass = password_hash($pass, PASSWORD_DEFAULT);
		
		if (new_user($link, $name, $surname, $pass, $email))
		{
			echo 'New User Registered Successfully.';
			// Redirects to the login page
			header("Location: index.php");
		}
		else
		{
			echo 'Error something went wrong';
		}
	}
	
	// function to sanitize inputs
	function mysql_sanitize($link, $string)
	{
		if(get_magic_quotes_gpc())
			$string = stripslashes($string);
		return $link->real_escape_string($string);
	}
	
	// controls for name
	function check_name($name)
	{
		if (!preg_match("/^[a-zA-Z]*$/",$name))
		{
		  $msg = "Your name has at least one unvalid character";
		  //header("Location: signup.php?msg=$msg");
		  return false;
		}
		// name is ok
		return true;
	}
	
	// controls for last name
	function check_lastname($lastname)
	{
		if (!preg_match("/^[a-zA-Z]*$/",$lastname))
		{
		  $msg = "Your last name has at least one unvalid character";
		  //header("Location: signup.php?msg=$msg");
		  return false;
		}
		// name is ok
		return true;
	}
	
	// controls for email
	function check_email($link, $email)
	{
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$msg = "Invalid email format.";
			//header("Location: signup.php?msg=$msg");
			return false;
		}

		// now check if the mail is already registered
		$result = $link->query("SELECT email FROM users WHERE email = '$email'");
		if(mysqli_num_rows($result)) 
		{
			$msg = "This email is already being used!";
			//header("Location: signup.php?msg=$msg");
			return false;
		}
		// now returns true - means you can proceed with this mail
		return true;
	}
	
	// controlls for password
	function check_passwords($pass, $confirmpassword)
	{
		if ($pass != $confirmpassword)
		{
			$msg = "Warning passwords do not match";
			//header("Location: signup.php?msg=$msg");
			return false;
		}
		else
			return true;
	}
	// function for creating a new user
	function new_user($link, $name, $surname, $pass, $email)
	{
		$query = "INSERT INTO users (name, last_name, password, email)
				  VALUES ('$name', '$surname', '$pass', '$email')";
		$result = $link->query($query);
		if($result)
			return true;
		else
		{
			$msg = "There is a connection problem please try again later.";
			//header("Location: signup.php?msg=$msg");
			return false;
		}
	}

	$link->close();
?>