<?php
	session_start();
	require_once('config.php');

	$id = mysql_sanitize($link, $_POST["post_id"]);
	
	// get uploader id for the post id
	$uploaderId = $link->query("SELECT uploader_id FROM notices WHERE id = '$id' limit 1")->fetch_object()->uploader_id;
	
	if($uploaderId === $_SESSION['current_user'])
	{
		if (delete_notice($link, $id))
		{
			echo 'Notice deleted.';
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
	function delete_notice($link, $id)
	{
		$query = "DELETE FROM notices WHERE id = '$id'";
				
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