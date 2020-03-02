<?php
	require_once('base.php');
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
	<center>
		<?php
			if(isset ($_GET['msg'])){
				echo "<h4 style=\"color: red\"> " . $_GET['msg'] . "</h4>";
			}
		?>
		<form action="login.php" method="POST" align="center" class="col-sm-2">
			<h1 style="text-align:centre";>Enter Your Details:</h1>

			<label for="email" align="center">Email Address</label>
			<input type="email" class="form-control" name="email"><br>


			<label for="password" align="center">Password</label>
			<input type="password" class="form-control" name="password"><br>

			<input class="btn btn-primary btn-lg active" role="button" type="submit" name="submit" value="Log In" aria-pressed="true">
			<a href="signup.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sign Up</a>
		</form>
	</center>
	</body>
</html>
