<!-- <html>
  <title>Login Screen</title>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  ?
    <php
    $servername = "localhost";
    $username = "mainuser";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "test");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $q = "SELECT * FROM users";
    $r = mysqli_query($conn, $q);

    $row = mysqli_fetch_array($r);

    if ($r) {
      echo "<table><tr><th>Name </th><th>UID</th></th>";
      // while ($row = mysqli_fetch_array($r)){
         echo "<tr><td>" . $row["user_name"] ."</td><td>" . $row["uid"] . " ";
      // }
      echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
  </body>
</html> -->

<html>
  <title>Login Screen</title>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
      <?php
      $servername = "localhost";
      $username = "mainuser";
      $password = "password";

      // Create connection
      $conn = new mysqli($servername, $username, $password, "test");

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
    	//Bringing the data from search page over
    	// $data = $_SESSION['foundUID'];
    	// $newName = $_SESSION['foundName'];
      $data = "12345";
      $newName = "bob";
      //Creating the query from either UID or name
    	$sql = mysqli_query($conn, "SELECT * FROM users
    		WHERE user_name LIKE '%$newName%' OR uid LIKE '%$data%' ");

      //Printing out the found members name as title
    	while($row = mysqli_fetch_array($sql)){
    		//Saving information from successful search
        $nameVal = $row[0];
        $member_typeVal = $row[2];
        $uidVal = $row[1];
        $member_sinceVal = $row[3];
        $last_accessVal = $row[4];
        $current_projectsVal = $row[12];
        $total_projectsVal = $row[13];
        $waiverVal = $row[5];
    		$seriesVal = $row[6];
    		$uprintVal = $row[7];
    		$jaguarVal = $row[8];
    		$bantamVal = $row[9];
    		$plsVal = $row[10];
    		$sewingVal = $row[11];
        // if ($row[5]==1){
        //   $waiverVal = "complete";
        // } else if ($row[5]==0) {
        //   $waiverVal = "incomplete";
        // } else {
        //   $waiverVal = "N/A";
        // }
        //
        // if ($row[6]==1){
        //   $seriesVal = "certified";
        // } else if ($row[6]==0) {
        //   $seriesVal = "incomplete";
        // } else {
        //   $seriesVal = "N/A";
        // }
        //
        // if ($row[7]==1){
        //   $uprintVal = "certified";
        // } else if ($row[7]==0) {
        //   $uprintVal = "incomplete";
        // } else {
        //   $uprintVal = "N/A";
        // }
        //
        // if ($row[8]==1){
        //   $jaguarVal = "certified";
        // } else if ($row[8]==0) {
        //   $jaguarVal = "incomplete";
        // } else {
        //   $jaguarVal = "N/A";
        // }
        //
        // if ($row[9]==1){
        //   $bantamVal = "certified";
        // } else if ($row[9]==0) {
        //   $bantamVal = "incomplete";
        // } else {
        //   $bantamVal = "N/A";
        // }
        //
        // if ($row[10]==1){
        //   $plsVal = "certified";
        // } else if ($row[10]==0) {
        //   $plsVal = "incomplete";
        // } else {
        //   $plsVal = "N/A";
        // }
        //
        // if ($row[11]==1){
        //   $sewingVal = "certified";
        // } else if ($row[11]==0) {
        //   $sewingVal = "incomplete";
        // } else {
        //   $sewingVal = "N/A";
        // }
    	}
    $conn->close();
    ?>

    <div class="toolsDiv">
      <!-- <div class="background"> -->
      <div class="bottomHeight centerDiv">
        <h2 class="lightType"> DaBL CaTS Admin Interface </h2>
        <h1 class="lightType"> MEMBER OPTIONS </h1>
        <!-- <form>
          <input type="text" class="primaryTextBox" placeholder="search members" name="viewMember">
          <input type="submit" class="primaryButton" name="searchMember">
        </form> -->
        <button onclick="location.href = 'index.php';" class="secondaryButton largeButton"> Member Search</button>
      </div>
    </div>
    <div class="whiteDiv">
      <div class="memberDiv centerDiv">
        <h2> Member Info </h2>
        <div class="formTop formSpacing divSplit">
          <div class="topSection" id="memberInfo">
            <h3 class="orangeType"><?php echo $nameVal; ?></h3>
          </div>
          <div class="topSection">
            <h4><?php echo $member_typeVal; ?></h4>
          </div>
        </div>

        <div class="formMiddle formSpacing divSplit">
          <div class="bottomSection">
            <label> UID <br/> </label>
            <p><?php echo $uidVal; ?></p>
          </div>

          <div class="bottomSection">
            <label> MEMBER SINCE <br/> </label>
            <p><?php echo $member_sinceVal; ?></p>
          </div>

          <div class="bottomSection">
            <label> LAST ACCESS <br/> </label>
            <p><?php echo $last_accessVal; ?></p>
          </div>

          <div class="bottomSection">
            <label> current projects <br/> </label>
            <p><?php echo $current_projectsVal; ?></p>
          </div>

          <div class="bottomSection">
            <label> total projects <br/> </label>
            <p><?php echo $total_projectsVal; ?></p>
          </div>

          <div class="bottomSection">
            <label> waiver <br/> </label>
            <p><?php echo $waiverVal; ?></p>
          </div>
        </div>

        <div class="formBottom formSpacing divSplit">
          <div class="bottomSection">
            <label> series1pro <br/> </label>
            <p><?php echo $seriesVal; ?></p>
          </div>

          <div class="bottomSection">
            <label for="uprint"> uprintseplus <br/> </label>
            <p><?php echo $uprintVal; ?></p>
          </div>

          <div class="bottomSection">
            <label for="jaguar"> jaguarvlx <br/> </label>
            <p><?php echo $jaguarVal; ?></p>
          </div>

          <div class="bottomSection">
            <label for="bantam"> bantamtools <br/> </label>
            <p><?php echo $bantamVal; ?></p>
          </div>

          <div class="bottomSection">
            <label for="pls"> pls475 <br/> </label>
            <p><?php echo $plsVal; ?></p>
          </div>

          <div class="bottomSection">
            <label> sewing <br/> </label>
            <p><?php echo $sewingVal; ?></p>
          </div>
        </div>
        <button href=# class="primaryButton topSpacing"> Update </button>
        <button href=# class="secondaryButton topSpacing sideSpacing"> Delete </button>
      </div>
    </div>

  </body>
</html>
