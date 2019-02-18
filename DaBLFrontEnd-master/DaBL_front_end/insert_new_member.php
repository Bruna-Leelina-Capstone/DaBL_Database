<!
OUTDATED: DELETE ONCE COMPLETE
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

$sql = "INSERT INTO bantamtools (name, UID, timestamp) VALUES ('$_POST[name]','$_POST[UID]',CURRENT_TIMESTAMP())";

if (!mysql_query($sql,$conn)){
	die ('Error: ' . mysqli_error());
}
echo "1 record added"

$conn->close();

 ?>