<?php
	session_start();
	require_once('base.php');
?>
<html>
	<head>
		<title>Noticeboard</title>
	</head>

	<body>
	<centre>
		<h1> Noticeboard</h1>
		<div class="jumbtron" style=" width 600px">
		
		<?php
		
			if(!isset($_SESSION))
				header("Location: index.php");
			//Connect to Database
			require_once('config.php');
			
			$myNotices = $link->query("SELECT * FROM notices WHERE uploader_id ='" . $_SESSION['current_user'] . "'")->fetch_all(MYSQLI_ASSOC);
			
			
			//This prints out the title of the first notice 
			//[0] refers to the first notice
			//['title'] refers to the title field
			foreach($myNotices as $notice){
				echo $notice['title'] . "<br>";
			}
			
			
		
		?>
	</centre>
	</body>
</html>
