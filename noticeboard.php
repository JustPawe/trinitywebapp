<?php
	session_start();
	require_once('base.php');
?>
<html>
	<head>
		<title>Noticeboard</title>
	</head>

	<body>
		<h1> Noticeboard</h1>
		
		<?php
		
			if(!isset($_SESSION))
				header("Location: index.php");
			//Connect to Database
			require_once('config.php');
			
			$allNotices = $link->query("SELECT * FROM notices WHERE public = '1'")->fetch_all(MYSQLI_ASSOC);
			
			//$myNotices = $link->query("SELECT * FROM notices WHERE uploader_id ='" . $_SESSION['current_user'] . "'")->fetch_all(MYSQLI_ASSOC);
			
			
			//This prints out the title of the first notice 
			//[0] refers to the first notice
			//['title'] refers to the title field
			foreach($allNotices as $notice){
				echo $notice['title'] . "<br>";
			}
			
			
		
		?>
	
	</body>
</html>