<?php
	session_start();
	require_once('base.php');
?>
<html>
	<head>
		<title>TEST</title>
	</head>
	<body>
		<center>
		<?php
			if(!isset($_SESSION))
				header("Location: index.php");

			echo $_SESSION['current_user'];
			if(isset ($_GET['msg'])){
				echo "<h4 style=\"color:red\"> " . $_GET['msg'] . "</h4>";
			}
		?>
		<form action="addNewNotice.php" method="POST" class="col-sm-2" align="center">
			

			<label for="title" align="center" style="color: white"><b>Title</b></label>
			<input type="text" class="form-control" name="Title"><br>

			<label for="Description" align="center" style="color: white"><b>Description</b></label>
			<textarea type="text" class="form-control" name="description" maxlenght="1000" rows="10" cols="30"></textarea><br>

				
			<label for="Description" align="center" style="color: white"><b>Click to make private</b></label><br>

			<label class="switch">
			  <input type="checkbox" name="public" value="1">
			  <span class="slider"></span><br><br>
			</label>
			<br><br>
			<input class="btn btn-primary btn-lg active" role="button" type="submit" name="submit" value="Post Notice" aria-pressed="true">
		</form>
		</center>
	</body>
</html>
