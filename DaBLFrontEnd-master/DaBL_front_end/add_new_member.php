<html>
<title> DaBL Add New Member</title>
<head>
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

//Getting info from form, and adding to table
	if (isset($_POST['firstName'])
		&& isset($_POST['lastName'] )
		&& isset($_POST['UID'])
		&& isset($_POST['safetyTF'])
		&& isset($_POST['seriesTF'])
		&& isset($_POST['uprintTF'])
		&& isset($_POST['jaguarTF'])
		&& isset($_POST['bantamTF'])
		&& isset($_POST['plsTF'])){

		$concatName = $_POST['lastName'] . ", " . $_POST['firstName'];

		//Creating the query and filling it with form data
		$sql = "INSERT INTO users (name, UID, membersince, membertype, waiver, series1pro, uprintseplus, jaguarvlx, bantamtools, pls475) VALUES 
	('$concatName',
	'$_POST[UID]',
	CURRENT_TIMESTAMP(),
	'$_POST[memberType]',
	'$_POST[safetyTF]',
	'$_POST[seriesTF]',
	'$_POST[uprintTF]',
	'$_POST[jaguarTF]',
	'$_POST[bantamTF]',
	'$_POST[plsTF]')";

	//Query successfully placed into database
	//Create popup instead of echo
	if ($conn->query($sql) === TRUE){
		echo nl2br("New Record created successfully");
	} else {
		//Save location of page before sending it to the failure page so the back button and bring it back here
		header('Location: failure_menu.php');
		exit;

	}
}

$conn->close();
?> 

<h1><p>Add New Member</p></h1>



<h2> <form action = "" method = "POST">
	First Name: <input type = "text" name = "firstName" required>
	<br>
	Last Name: <input type = "text" name = "lastName" required>
	<br>
	UID: <input type = "text" name = "UID" required>
	<br>

	<!--Member Type Radio Buttons-->
	
	<fieldset id = "memberButtons">
		Member Type:
		<input type = "radio" name = "memberType" value = "Student" required> Student
		<input type = "radio" name = "memberType" value = "Specialist"> Specialist
		<input type = "radio" name = "memberType" value = "Faculty"> Faculty
		<input type = "radio" name = "memberType" value = "Masters"> Masters
		<input type = "radio" name = "memberType" value = "PostBacc"> PostBacc
		<input type = "radio" name = "memberType" value = "Research"> Research
		<input type= "radio" name= "memberType" value = "Manager"> Manager
	</fieldset>
	<br>

	<!--Safety Waiver Radio Buttons-->
	<fieldset id = "waiverButtons">
		Signed safety waiver:
		<input type = "radio" name = "safetyTF" value = "1"> Yes
		<input type = "radio" name = "safetyTF" value = "0" checked = "checked"> No
	</fieldset>
	<br>

	<fieldset id = "seriesButtons">
		<!--Series1pro Radio Button-->
		Series1Pro Competent:
		<input type = "radio" name = "seriesTF" value = "1" > Yes
		<input type = "radio" name = "seriesTF" value = "0" checked = "checked"> No
	</fieldset>
	<br>

	<fieldset id = "uPrintButtons">
		<!--uprintseplus Radio Button-->
		UPrintsEPlus Competent:
		<input type = "radio" name = "uprintTF" value = "1"> Yes
		<input type = "radio" name = "uprintTF" value = "0" checked = "checked"> No
	</fieldset>
	<br>

	<fieldset id = "jaguarButtons">
		<!--jaguarvlx Radio Button-->
		JaguarVLX Competent:
		<input type = "radio" name = "jaguarTF" value = "1" > Yes
		<input type = "radio" name = "jaguarTF" value = "0" checked = "checked"> No
	</fieldset>
	<br>

	<fieldset id = "bantamButtons">
		<!--bantamtools Radio Button-->
		BantamTools Competent:
		<input type = "radio" name = "bantamTF" value = "1"> Yes
		<input type = "radio" name = "bantamTF" value = "0" checked = "checked"> No
	</fieldset>
	<br>

	<fieldset id = "plsButtons">
		<!--pls475 Radio Button-->
		PLS475 Competent:
		<input type = "radio" name = "plsTF" value = "1"> Yes
		<input type = "radio" name = "plsTF" value = "0" checked = "checked"> No
	</fieldset>
	<br>

	<input type = "submit" class = "button"/>
</form> </h2>

<a href="member_options.php" class = "button">Back</a> </p>

</body>
</html>

