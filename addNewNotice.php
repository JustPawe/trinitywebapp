<?php
	session_start();
	require_once('config.php');

	$title = mysql_sanitize($link, $_POST["title"]);
	$description = mysql_sanitize($link, $_POST["description"]);
	
	$public = 0;
	if(isset($_POST["public"]))
		$public = mysql_sanitize($link, $_POST["public"]);
	

	if (new_notice($link, $title, $description, $public))
	{
		echo 'New notice added.';
		// Redirects to the noticeboard page
		header("Location: noticeboard.php");
	}
	else
	{
		echo 'Error something went wrong';
	}
	
	
	// function to sanitize inputs
	function mysql_sanitize($link, $string)
	{
		if(get_magic_quotes_gpc())
			$string = stripslashes($string);
		return $link->real_escape_string($string);
	}
	
	// function for creating a new user
	function new_notice($link, $title, $description, $public)
	{
		$query = "INSERT INTO notices (title, description, public, uploader_id)
				  VALUES ('$title', '$description', '$public', '" . $_SESSION['current_user'] ."' )";
		echo $query;
	}

	$link->close();
?>
