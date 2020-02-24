<?php
	session_start();
	require_once('base.php');
?>
<html>
	<head>
		<title>TEST</title>
	</head>
	<body>
		<?php
			if(isset ($_GET['msg'])){
				echo "<h4 style=\"color:red\"> " . $_GET['msg'] . "</h4>";
			}
		?>
		<form action="../Noticeboard/addNewNotice.php" method="POST">
			<input type="text" name="title"><br><br>
			<input type="text" name="description" maxlenght="1000"><br><br>
			<label class="switch">
			  <input type="checkbox" name="public" value="1">
			  <span class="slider"></span>
			</label>
			<input type="submit" value="Log In">
		</form>
	</body>
</html>