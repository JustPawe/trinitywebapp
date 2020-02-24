<?php
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
		<form action="login.php" method="POST">
			<input type="email" name="email"><br><br>
			<input type="password" name="password"><br><br>
			<input type="submit" value="Log In">
		</form>
	</body>
</html>