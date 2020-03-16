<?php
	session_start();
	require_once('base.php');
?>
<html>
	<head>
		<title>Noticeboard</title>
	</head>

	<body>
	<center>
		<h1>Noticeboard</h1>
		<div class="jumbotron black-text" style="background-color: #f9f7d5; width: 600px; color: black">
			<u><h1 align="left">NOTICE TITLE</h1></u>
			<h3>Notice that this is a notice in the place of a notice.</h3>
		</div>
		
		<?php
		
			if(!isset($_SESSION))
				header("Location: index.php");
			//Connect to Database
			require_once('config.php');

			$allNotices = $link->query("SELECT * FROM notices WHERE public = '1'")->fetch_all(MYSQLI_ASSOC);
		
			$jumbotronOpen = "<div class=\"jumbotron black-text\" style=\"background-color: #f9f7d5; width: 600px; color: black\">";
			
			//This prints out the title of the first notice 
			//[0] refers to the first notice
			//['title'] refers to the title field

			foreach($allNotices as $notice){

				$name = $link->query("SELECT * FROM users WHERE id ='" . $_SESSION['current_user'] . "'")->fetch_object()->name;
				echo $jumbotronOpen;
				echo "<u><h1 align=\"left\">" . $notice['title'] . "</h1></u>";
				echo "<h3>" . $notice['description'] . "</h3>";
				echo "<b><h1>" . $name . "</h1></b>";
				echo "</div>";

			}
			
			
		
		?>
	</center>
	</body>
</html>
