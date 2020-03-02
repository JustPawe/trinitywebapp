<?php
	require_once('base.php');
?>
<html>
	<head>
		<title>TEST</title>
	</head>
	<body>
	<center>
		<?php
			if(isset ($_GET['msg'])){
				echo "<h4 style=\"color:red\"> " . $_GET['msg'] . "</h4>";
			}
		?>

		<form action="../Noticeboard/register.php" method="POST" align="center" class="col-sm-2">
			<h1 style="text-align:centre";>Enter Your Details:</h1>

			<label for="text" align="center">First Name:</label>         
			<input type="text" class="form-control" name="first_name"><br>
			<label for="text" align="center">Last Name:</label>
			<input type="text" class="form-control" name="last_name"><br>
			<label for="email" align="center">Email Address:</label>
			<input type="email" class="form-control" name="email"><br>
			<label for="password" align="center">Password:</label>
			<input type="password" class="form-control" name="password"><br>
			<label for="password" align="center">Confirm Password:</label>
			<input type="password" class="form-control" name="confirmpassword"><br>

			<a href="noticeboard.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login</a>

		</form>
	</center>
	</body>
</html>
