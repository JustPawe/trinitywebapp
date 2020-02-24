<?php
	session_start();
	require_once('config.php');

	$title = mysql_sanitize($link, $_POST["title"]);
	$description = mysql_sanitize($link, $_POST["description"]);
	$id = mysql_sanitize($link, $_POST["post_id"]);
	
	$public = 0;
	if(isset($_POST["public"]))
		$public = mysql_sanitize($link, $_POST["public"]);
	
	if($uploaderId === $_SESSION['current_user'])
	{
		if (edit_notice($link, $title, $description, $public, $id))
		{
			echo 'New notice added.';
			// Redirects to the login page
			header("Location: noticeboard.php");
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
	
	// function for creating a new user
	function edit_notice($link, $title, $description, $public, $id)
	{
		$query = "UPDATE notices 
				  SET title = '$title', description = '$description', public = '$public'
				  WHERE id = '$id'";
		$result = $link->query($query);
		if($result)
			return true;
		else
		{
			$msg = "There is a connection problem please try again later.";
			header("Location: noticeboard.php?msg=$msg");
			return false;
		}
	}

	$link->close();
?>