<?php
session_start();
?>

<html>
  <title>Login Screen</title>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <?php
    //   $servername = "localhost";
    //   $user = "root";
    //   $password = "";
    //   $dbname = "test";
    //
    //
    //   $mysqli = new mysqli($host, $dbname);
    //   if ($mysqli->connect_errno) {
    //     die("Error: " . $mysqli->connect_errno);
    //   }
    //
    //
    //   $conn = mysqli_connect($servername, $username, $password, $dbname);
    // // Check connection
    // 	if (mysqli_connect_errno()) {
    // 		die("Connection failed badly: " . $conn->connect_error);
    // 		exit();
    // 	}
    $servername = "localhost";
    $username = "mainuser";
    $password = "password";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // $conn = new mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //
        exit();
    }
    echo "Connected successfully";
    	//Checking form for user input
    	$searchNameArray = array();
    	$searchUIDArray = array();
      // $searchNameArray = $_GET['searchBox'];
      // $searchUIDArray = $_GET['searchBox'];
    	$_SESSION['foundName'] = "";
    	$_SESSION['foundUID'] = "";
    	// if(isset($_POST['search'])){
      echo "pre if1";
      if(isset($_GET['viewMember'])){
        echo "in if1";
    		// $data = $_POST['search'];
        $data = $_GET['viewMember'];
    		$newName = "1111111";
    		$oneName = "1111111";
    		$newUID = "1111111";

    		//Validates the input string for what type of data
        echo "pre if2";
    		if (preg_match('/[A-Z][A-Z]\s/', $data) || preg_match("/[0-9][A-Z]\s/", $data) || preg_match("/[A-Z][0-9]\s/", $data) || preg_match("/[0-9][0-9]\s/", $data)){
          echo "in if2";
    			$newUID = $data;
    			// die("in a-z a-z");
    		} else if (strpos($data, ' ') !== false){
          echo "else if1";
    			// die("two word");
    			//If the input string has a comma in it
    			//Exploding the input to rebuild it backwards
    			$namePiece = explode(" " , $data);
    			$newName = $namePiece[1].", ".$namePiece[0];

    			//If there is only letters throughout the input
          echo "pre else if";
    		} else {
    			// die("onename");
    			$oneName = $data;
          // echo "$oneName";
          // die($oneName);
    		}

    		//Creating the query from either UID or name
    		if($sql = mysqli_query($conn, "SELECT * FROM users
    			WHERE user_name LIKE '%$newName%' OR user_name LIKE '%$oneName%' OR uid LIKE '%$newUID%'")) {
          // die("if query");
    			$count = mysqli_num_rows($sql);

    			if($count == "0"){
            // die("if count 0");
    				header('Location: memberNotFound.php');
    				exit;
    			} else if ($count == "1") {
            // die("if count 1");
    				$_SESSION['foundUID'] = $newUID;
    				$_SESSION['foundName'] = $newName;

            header('Location: memberFound.php');
    				exit;

          // insert elseif (condition) for multiple found members{
          // start add
          } else if ($count > "1"){

    				$count = 0;
    			  while ($row = mysqli_fetch_array($sql, MYSQLI_NUM)){
    					$searchNameArray[$count] = $row[0];
    					$searchUIDArray[$count] = $row[1];
    					$count = $count + 1;
    				}

    				$_SESSION['foundName'] = $searchNameArray;
    				$_SESSION['foundUID'] = $searchUIDArray;

    				header('Location: multipleFound.php');
    				exit;
            // close add

    			} else {
    				die("should never reach this else statement, something went wrong");
    			}
    		}
    	}
    	?>

    <div class="toolsDiv">
      <!-- <div class="background"> -->
      <div class="bottomHeight centerDiv">
        <h2 class="lightType"> DaBL CaTS Admin Interface </h2>
        <h1 class="lightType"> MEMBER OPTIONS </h1>
        <form>
          <input type="text" class="primaryTextBox" placeholder="search members" name="viewMember" id="searchBox" required>
          <!-- <input type="submit" class="primaryButton sideSpacing" name="searchMember"> -->
          <input type="submit" class="primaryButton sideSpacing">
        </form>
      </div>
    </div>

    <div class="whiteDiv">
      <div class="headingContainer centerDiv">
        <h2> Member Info </h2>
        <p> To view a member’s info, look up a name or UID using the search bar above. </p>
      </div>
    </div>

    <div class="ctaContainer greyDiv">
      <h3> ADD A NEW MEMBER? </h3>
      <p> Want to add a new member? Skip the search process and head over to the new member sign up. </p>
      <button onclick="location.href = 'addMember.php';" class="primaryButton largeButton topSpacing"> Add New Member </button>
    </div>

  </body>
</html>
