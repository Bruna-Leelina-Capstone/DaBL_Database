<!DOCTYPE html>
<html>

<!
Need to complete:
-Have dump button actually dump the table connected to it
-Find the table names in MySQL
-Have popup? asking if 'you really want to dump'
>

<head>
	<title>DaBL Table Options</title>
	<link rel="stylesheet" type="text/css" href="dabl_interface_style_sheet.css">
</head>
<body>

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


	//Finding the tables names
	//Yes it is way to much work for something that seems so easy but someone thought it would be a great idea to remove all the easy commands from php 7
	$sql = mysqli_query($conn, "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'dabl'");
	if($sql){
		//For some reason fetch_array will only grab the names of tables one at a time, therefore they are placed into a secondary array to store them
		$nameArray = array();
		$counter = 0;
		while($row = mysqli_fetch_array($sql)){
			$nameArray[$counter]=$row[0];
			$counter = $counter + 1;
		}
		
		//Testing secondary array
		//print_r($nameArray);
	} else {
		//Save location of page before sending it to the failure page so the back button and bring it back here
		die("Failure: " . $conn->error);
	}

	if(isset($_POST['dump1'])){
		$table1 = $nameArray[0];
		$backup_file1 = "/Xampp/htdocs/backup_accesslog.sql";

		$backupSQL1 = "SELECT * INTO OUTFILE '$backup_file1' FROM $table1";

		$return = mysqli_query($conn, $backupSQL1);
		sleep(1);
		// if ($return){
		// 	die('<br>Failure to back up data: ' . $conn->error);
		// } else {
		// 	echo "<br>" . $table1 . " Was dumped properly \n";
		// }
	}

	if(isset($_POST['dump2'])){
		$table2 = $nameArray[1];
		$backup_file2 = "/Xampp/htdocs/backup_bantamtools.sql";
		$backupSQL2 = "SELECT * INTO OUTFILE '$backup_file2' FROM $table2";
		sleep(1);
		$return = mysqli_query($conn, $backupSQL2);

		if ($return){
			die('Failure to back up data: ' . $conn->error);
		} else {
			echo $table2 . " Was dumped properly \n";
		}
	}

	if(isset($_POST['dump3'])){
		$table3 = $nameArray[9];
		$backup_file3 = "/Xampp/htdocs/backup_users.sql";
		$backupSQL3 = "SELECT * INTO OUTFILE '$backup_file3' FROM $table3";

		$return = mysqli_query($conn, $backupSQL3);
		sleep(1);
		if ($return){
			die('Failure to back up data: ' . $conn->error);
		} else {
			echo $table3 . " Was dumped properly \n";
		}
	}
	?>

	<!--<p><?=$selectedMemberType?></p>-->

	<h1><p class = "header"> Table Options </p></h1>

	<form action = '' method="POST">
		<?=$nameArray[0]?>
		<input type = "submit" class = "button" name = "dump1" value = "Dump"/>
		
		<br> <br>

		<?=$nameArray[1]?>
		<input type = "submit" class = "button" name = "dump2" value = "Dump"/>

		<br> <br>

		<?=$nameArray[9]?>
		<input type = "submit" class = "button" name = "dump3" value = "Dump"/>
	</form>

	<br> <br>
	<a href="frontpage.php" class = "button">Main Menu</a>

</body>
</html>