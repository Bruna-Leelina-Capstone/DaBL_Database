<html>
<title>Login Screen</title>
<head>
	<link rel="stylesheet" type="text/css" href="dabl_interface_style_sheet.css">
</head>
<body>
	
	<?php
	$servername = "localhost";
	$username = "Deromedi";
	$password = "Marcusss1!";
	$dbname = "DaBL";

	if(isset($_POST['username'])
	&& isset($_POST['password'])){
		
	}
	?>
	
	<h2> <form action = "" method = "POST">
		Username: <input type = "text" name = "username" required>
		<br>
		Password: <input type = "text" name = "password" required>

		<input type = "submit" class = "button" name = 'submit'>
	</form></h2>

</body>
</html>