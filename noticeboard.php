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
		<div class="jumbotron" style="background-color: pink; width: 600px">
			<u><h1 style="background-color: white" align="left">NOTICE TITLE</h1></u>
			<h3 style="color: gray">Notice that this is a notice in the place of a notice.</h3>
			<h2>The Person Who Wrote This</h2>
		</div>
		
		<?php
		
			if(!isset($_SESSION))
				header("Location: index.php");
			//Connect to Database
			require_once('config.php');
			echo $_SESSION['LAST_ACTIVITY'];

			$allNotices = $link->query("SELECT * FROM notices WHERE public = '1'")->fetch_all(MYSQLI_ASSOC);
		
			$jumbotronOpen = "<div class=\"jumbotron\" style=\"width: 600px\">";
			
			//This prints out the title of the first notice 
			//[0] refers to the first notice
			//['title'] refers to the title field

			foreach($allNotices as $notice){
				// echo $jumbotronOpen . $notice['title'] . "<br>";

			}
			
			
		
		?>
	</center>
	</body>
</html>
