<?php
session_start();
?>

<html>
<head>
	<title>DaBL Member Found</title>
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


	//Bringing the data from search page over
	$data = array();
	$newName = array();

	$data = $_SESSION['foundUID'];
	$newName = $_SESSION['foundName'];


	//Printing out the found members name as title
	$count = 0;
	for($j = 0; $j < sizeof($data); $j++){
		$count++;

		echo "<h2>"."Found Member: " . $data[$j] . ": ". $newName[$j] . "</h2>" . "<br>";

	}
	$conn->close();

	?>

	<script>
		var count = <?php echo $count ?>;
		var names = new Array();
    <?php foreach($newName as $key => $val){ ?>
        names.push('<?php echo $val; ?>');
    <?php } ?>

    var uids = new Array();
    <?php foreach($data as $key => $val){ ?>
        uids.push('<?php echo $val; ?>');
    <?php } ?>

		var f = document.createElement("form");
		f.setAttribute('method',"post");

//create input element
var i = document.createElement("input");
i.type = "text";
i.name = "user_name";
i.id = "user_name1";

for(var j = 0; j < count; j++){
	var field = document.createElement("fieldset");
	var label = document.createElement("label");
	var c = document.createElement("input");
	c.type = "radio";
	c.id = "radio1";
	c.name = "radio1";
	label.appendChild(c);
	label.appendChild(document.createTextNode(names[j]));
	label.appendChild(document.createTextNode(": "));
	label.appendChild(document.createTextNode(uids[j]));
	label.appendChild(document.createElement("BR"));

	f.appendChild(label);
}

//create a button
var s = document.createElement("input");
s.type = "submit";
s.name = "button";
s.value = "Submit";

// add all elements to the form
//f.appendChild(i);
f.appendChild(s);

// add the form inside the body
//$("body").append(f);   //using jQuery or
document.getElementsByTagName('body')[0].appendChild(f); //pure javascript

</script>

<br><br>

<a href = "member_options.php" class = "button">Search Again</a>

<a href="frontpage.php" class = "button">Back to Main Menu</a>
</body>
</html>