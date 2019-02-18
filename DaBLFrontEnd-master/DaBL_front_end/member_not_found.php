<?php
session_start();
?>

<html>
<head>
	<title>DaBL Member Not Found</title>
	<link rel="stylesheet" type="text/css" href="dabl_interface_style_sheet.css">
</head>
<body>

	<!
	Complete
	Needs redesign
	>

<?php  

	$servername = "localhost";
	$username = "Deromedi";
	$password = "Marcusss1!";
	$dbname = "DaBL";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
	if (mysqli_connect_errno()) {
		die("Connection failed badly: " . $conn->connect_error);
		exit();
	} 

	//Bringing the data from search page over
	$data = $_SESSION['foundUID'];
	$newName = $_SESSION['foundName'];

	echo "<h1>". $data . " not found" . "</h1>";

//Creating the query from either UID or name
	$sql = mysqli_query($conn, "SELECT * FROM users
		WHERE name LIKE '%$newName%' OR UID LIKE '%$data%' ");

	//Printing out the found members name as title
	while($row = mysqli_fetch_array($sql)){

		echo "<h2>"."Found Member: " . $row['0'] . ": ". $row['1'] . "</h2>";
	}

	?>

<a href="member_options.php" class = "button">Try Again</a>

<br> <br>

<a href="add_new_member.php" class = "button">Add New Member</a>

<br> <br>

<a href="frontpage.php" class = "button">Return to Main Menu</a>

</body>
</html>