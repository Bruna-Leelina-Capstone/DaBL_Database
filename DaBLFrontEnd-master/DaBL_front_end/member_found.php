<?php
session_start();
?>

<html>
<head>
	<title>DaBL Member Found</title>
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
	//$data = array();
	//$newName = array();

	$data = $_SESSION['foundUID'];
	$newName = $_SESSION['foundName'];

	//$UID = $data[0];
	//$name = $newName[0];

//Creating the query from either UID or name
	$sql = mysqli_query($conn, "SELECT * FROM users
		WHERE name LIKE '%$newName%' OR UID LIKE '%$data%' ");

	//Printing out the found members name as title
	while($row = mysqli_fetch_array($sql)){

		echo "<h2>"."Found Member: " . $row['0'] . ": ". $row['1'] . "</h2>";

		//Saving information from successful search
		$selectedMemberType = $row[3];
		$selectedWaiver = $row[6];
		$selectedSeries = $row[7];
		$selectedUPrint = $row[8];
		$selectedJaguar = $row[9];
		$selectedBantam = $row[10];
		$selectedPLS = $row[11];

		$flag = True;
	}

	//Getting information from form
	//Will update all information, even if nothing is changed
	//if (isset($_POST['memberType'])
	//	&& isset($_POST['safetyTF'])
	//	&& isset($_POST['seriesTF'])
	//	&& isset($_POST['uprintTF'])
	//	&& isset($_POST['jaguarTF'])
	//	&& isset($_POST['bantamTF'])
	//	&& isset($_POST['plsTF'])
	//	&& $flag){

		//Creating the query and filling it with updated form data
		//$sql = "UPDATE users SET 
	//membertype = '$_POST[memberType]',
	//waiver = '$_POST[safetyTF]',
	//series1pro = '$_POST[seriesTF]',
	//uprintseplus = '$_POST[uprintTF]',
	//jaguarvlx = '$_POST[jaguarTF]',
	//bantamtools = '$_POST[bantamTF]',
	//pls475 = '$_POST[plsTF]' 
	//WHERE UID = '$data' OR name = '$newName'";

	//Query successfully placed into database
	//Create popup instead of echo
	//if ($conn->query($sql) === TRUE){
	//	header("Refresh:0");
	//	echo nl2br("Record updated successfully");
	//} else {
		//Save location of page before sending it to the failure page so the back button and bring it back here
		//Have error message be brought to next page
	//	header('Location: failure_menu.php');
	//	exit;

	//}
//}
$conn->close();

?>

<!--<p><?=$selectedMemberType?></p>-->
<form action = "" method = "POST"> 
	<fieldset id = "memberButtons">
		Member Type:
		<input type = "radio" name = "memberType" value = "Student"  id = "student"> Student
		<input type = "radio" name = "memberType" value = "Specialist" id="specialist"> Specialist
		<input type = "radio" name = "memberType" value = "Faculty" id="faculty"> Faculty
		<input type = "radio" name = "memberType" value = "Masters" id="masters"> Masters
		<input type = "radio" name = "memberType" value = "PostBacc" id="postbacc"> PostBacc
		<input type = "radio" name = "memberType" value = "Research" id="research"> Research
		<input type= "radio" name= "memberType" value = "Manager" id="manager"> Manager
	</fieldset>
	<br>

	<script>
		var input = <?php echo json_encode($selectedMemberType)?>;

		switch (input) {
			case 'Student':
			document.getElementById("student").checked = true;
			break;
			case 'Specialist':
			document.getElementById("specialist").checked = true;
			break;
			case 'Faculty':
			document.getElementById("faculty").checked = true;
			break;
			case 'Masters':
			document.getElementById("masters").checked = true;
			break;
			case 'PostBacc':
			document.getElementById("postbacc").checked = true;
			break;
			case 'Research':
			document.getElementById("research").checked = true;
			break;
			case 'Manager':
			document.getElementById("manager").checked = true;
			break;
		}
	</script>

	<!--Safety Waiver Radio Buttons-->
	<fieldset id = "waiverButtons">
		Signed safety waiver:
		<input type = "radio"  name = "safetyTF" id = waiverTrue value = "1"> Yes
		<input type = "radio" name = "safetyTF" id = waiverFalse value = "0"> No

	</fieldset>
	<br>

	<script>
		if(<?=$selectedWaiver?>){
			document.getElementById("waiverTrue").checked = true;
		} else {
			document.getElementById("waiverFalse").checked = true;
		}
	</script>

	<fieldset id = "seriesButtons">
		<!--Series1pro Radio Button-->
		Series1Pro Competent:
		<input type = "radio" name = "seriesTF" id = seriesTrue value = "1" required> Yes
		<input type = "radio" name = "seriesTF" id = seriesFalse value = "0"> No
	</fieldset>
	<br>

	<script>
		if(<?=$selectedSeries?>){
			document.getElementById("seriesTrue").checked = true;
		} else {
			document.getElementById("seriesFalse").checked = true;
		}
	</script>

	<fieldset id = "uPrintButtons">
		<!--uprintseplus Radio Button-->
		UPrintsEPlus Competent:
		<input type = "radio" name = "uprintTF" id = uprintTrue value = "1" required> Yes
		<input type = "radio" name = "uprintTF"  id = uprintFalse value = "0"> No
	</fieldset>
	<br>

	<script>
		if(<?=$selectedUPrint?>){
			document.getElementById("uprintTrue").checked = true;
		} else {
			document.getElementById("uprintFalse").checked = true;
		}
	</script>

	<fieldset id = "jaguarButtons">
		<!--jaguarvlx Radio Button-->
		JaguarVLX Competent:
		<input type = "radio" name = "jaguarTF" id = jaguarTrue value = "1" required> Yes
		<input type = "radio" name = "jaguarTF" id = jaguarFalse value = "0"> No
	</fieldset>
	<br>

	<script>
		if(<?=$selectedJaguar?>){
			document.getElementById("jaguarTrue").checked = true;
		} else {
			document.getElementById("jaguarFalse").checked = true;
		}
	</script>

	<fieldset id = "bantamButtons">
		<!--bantamtools Radio Button-->
		BantamTools Competent:
		<input type = "radio" name = "bantamTF" id = bantamTrue value = "1" required> Yes
		<input type = "radio" name = "bantamTF" id = bantamFalse value = "0"> No
	</fieldset>
	<br>

	<script>
		if(<?=$selectedBantam?>){
			document.getElementById("bantamTrue").checked = true;
		} else {
			document.getElementById("bantamFalse").checked = true;
		}
	</script>

	<fieldset id = "plsButtons">
		<!--pls475 Radio Button-->
		PLS475 Competent:
		<input type = "radio" name = "plsTF" id = plsTrue value = "1" required> Yes
		<input type = "radio" name = "plsTF" id = plsFalse value = "0"> No
	</fieldset>
	<br>

	<script>
		if(<?=$selectedPLS?>){
			document.getElementById("plsTrue").checked = true;
		} else {
			document.getElementById("plsFalse").checked = true;
		}
	</script>

	<!--<input type = "submit" class = "button" value = "Update"/>-->
</form> </h2>

<a href = "edit_member.php" class = "button">Edit Member</a>

<br><br>

<a href = "member_options.php" class = "button">Search Again</a>

<a href="frontpage.php" class = "button">Back to Main Menu</a>

</body>
</html>