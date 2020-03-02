<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body style="background-color: #484848">
	
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #404040; border-bottom:1px solid white;" >
		  <a class="navbar-brand" href="#">Noticeboard</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			<?php

			  if(isset($_SESSION))
			  {
				echo "<li class=\"nav-item\">";
				echo "<a class=\"nav-link\" href=\"./noticeboard.php\">Noticeboard</a>";
				echo "</li>";

				echo "<li class=\"nav-item\">";
				echo "<a class=\"nav-link\" href=\"./myNotices.php\">My Notices</a>";
				echo "</li>";

				echo "<li class=\"nav-item\">";
				echo "<a class=\"nav-link\" href=\"./create.php\">Create Notices</a>";
				echo "</li>";

				echo "<li class=\"nav-item\">";
				echo "<a class=\"nav-link\" href=\"./logout.php\">Log out</a>";
				echo "</li>";

		
						
			  }

			
			?>
			</ul>
		  </div>
		</nav>
	
	</body>
</html>
