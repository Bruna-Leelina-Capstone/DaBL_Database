<?php
session_start();
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="dabl_interface_style_sheet.css">
</head>
<title> DaBL Member Options</title>
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

	//Checking form for user input
	$searchNameArray = array();
	$searchUIDArray = array();
	$_SESSION['foundName'] = "";
	$_SESSION['foundUID'] = "";

	if(isset($_POST['search'])){
		$data = $_POST['search'];
		$newName = "1111111";
		$oneName = "1111111";
		$newUID = "1111111";

		//Validates the input string for what type of data
		if (preg_match('/[A-Z][A-Z]\s/', $data) || preg_match("/[0-9][A-Z]\s/", $data) || preg_match("/[A-Z][0-9]\s/", $data) || preg_match("/[0-9][0-9]\s/", $data)){
			$newUID = $data;
			//die("in a-z a-z");
		} else if (strpos($data, ' ') !== false){
			//die("two word");
			//If the input string has a comma in it
			//Exploding the input to rebuild it backwards
			$namePiece = explode(" " , $data);
			$newName = $namePiece[1].", ".$namePiece[0];
			
			//If there is only letters throughout the input
		} else {
			//die("onename");
			$oneName = $data;
		}

		
		//Creating the query from either UID or name
		if($sql = mysqli_query($conn, "SELECT * FROM users
			WHERE name LIKE '%$newName%' OR name LIKE '%$oneName%' OR UID LIKE '%$newUID%'")) {

		//Checks how many results are found
			$count = mysqli_num_rows($sql);


		//If no person/UID found, sends to not found page
			if($count == "0"){
				header('Location: member_not_found.php');
				exit;

			} else if ($count == "1") {
				//die($count . " Count");
				$_SESSION['foundUID'] = $newUID;
				$_SESSION['foundName'] = $newName;

				header('Location: member_found.php');
				exit;

			} else if ($count > "1"){
				//die($count . " Count");
				$count = 0;
				while ($row = mysqli_fetch_array($sql, MYSQLI_NUM)){
					$searchNameArray[$count] = $row[0];
					$searchUIDArray[$count] = $row[1];
					$count = $count + 1;
				}

				$_SESSION['foundName'] = $searchNameArray;
				$_SESSION['foundUID'] = $searchUIDArray;


				header('Location: multiple_found.php');
				exit;

			} else {
				die("YOU shouldnt die here");
			} 
		} 
	}

	?>


	<h1><p> Member Options </p></h1>

	<h2><p> Add New Member? 
	<a href="add_new_member.php" class="button">Add Member</a>
	</p></h2>
	
	<br>

	<!-- Search form for members -->
	<h2><form action = "" method = "POST">Find Member(by Name or UID) <input type = "text" name = "search" required>
	<input type = "submit">


	</form></h2>

	<br>

	<a href="frontpage.php" class="button">Back</a>

	</body>
	</html>