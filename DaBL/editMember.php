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
      $servername = "localhost";
      $username = "mainuser";
      $password = "password";
      $dbname = "test";
      // $conn = new mysqli($servername, $username, $password, $dbname);
      //
      // if ($conn->connect_error) {
      //     die("Connection failed: " . $conn->connect_error);
      //     exit();
      // }
      // echo "Connected successfully";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
      if (mysqli_connect_errno()) {
        die("Connection failed badly: " . $conn->connect_error);
        exit();
      }
      echo "Connected successfully";
    	$data = $_SESSION['foundUID'];
    	$newName = $_SESSION['foundName'];
      //Creating the query from either UID or name
    	$sql = mysqli_query($conn, "SELECT * FROM users
    		WHERE user_name LIKE '%$newName%' OR uid LIKE '%$data%' ");
      //Printing out the found members name as title
    	while($row = mysqli_fetch_array($sql)){
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
    	}
      //Getting information from form
      //Will update all information, even if nothing is changed
      if (isset($_GET['memberType'])
        && isset($_GET['waiverVal'])
        && isset($_GET['seriesVal'])
        && isset($_GET['uprintVal'])
        && isset($_GET['jaguarVal'])
        && isset($_GET['bantamVal'])
        && isset($_GET['plsVal'])
        && isset($_GET['sewingVal'])
        && isset($_GET['currentVal'])
        && isset($_GET['totalVal']){
        $sql = "UPDATE users SET
        member_type = '$_POST[memberType]',
        last_access = CURRENT_TIMESTAMP(),
        waiver = '$_POST[waiverVal]',
        series1pro = '$_POST[seriesVal]',
        uprintseplus = '$_POST[uprintVal]',
        jaguarvlx = '$_POST[jaguarVal]',
        bantamtools = '$_POST[bantamVal]',
        pls475 = '$_POST[plsVal]',
        pls475 = '$_POST[sewingVal]',
        pls475 = '$_POST[currentVal]',
        pls475 = '$_POST[totalVal]'
        WHERE uid = '$data' OR user_name = '$newName'";
        if ($conn->query($sql) === TRUE){
          header("Refresh:0");
          echo ("Record updated successfully");
        } else {
          //Save location of page before sending it to the failure page so the back button and bring it back here
          // Have error message be brought to next page
          // header('Location: failure_menu.php');
          exit;
        }
      }
    $conn->close();
    ?>

    <div class="toolsDiv">
      <!-- <div class="background"> -->
      <div class="bottomHeight centerDiv">
        <h2 class="lightType"> DaBL CaTS Admin Interface </h2>
        <h1 class="lightType"> MEMBER OPTIONS </h1>
        <button onclick="location.href = 'index.php';" class="secondaryButton largeButton"> Member Search</button>
      </div>
    </div>

    <div class="whiteDiv">
<!-- same ui as member found -->
      <div class="memberDiv centerDiv">
        <h2> Member Info </h2>
        <div class="formTop formSpacing divSplit">
          <div class="topSection" id="memberInfo">
            <h3 class="orangeType"><?php echo $nameVal; ?></h3>
          </div>
          <div class="topSection">
            <!-- <h4><php echo $member_typeVal; ?></h4> -->
            <h4><?php echo $uidVal; ?></h4>
          </div>
        </div>
<!-- same ui as add -->
        <form>
          <div class="formMiddle formSpacing divSplit">
            <div class="topSection thirds">
              <!-- <label for="uid"> UID <br/> </label>
              <input id="uid" type="text" class="newMemberTextBox infoTextBox" placeholder="uid"> -->
              <label for="title"> MEMBER TITLE <br/> </label>
              <select id="title" class="newMemberTextBox" placeholder="member title">
                <option value="student">Student</option>
                <option value="specialist">Specialist</option>
                <option value="faculty">Faculty</option>
                <option value="postbacc">PostBacc</option>
                <option value="research">Research</option>
                <option value="manager">Manager</option>
              </select>
            </div>

            <div class="topSection thirds">
              <label for="currentVal"> CURRENT PROJECTS <br/> </label>
              <input id="currentVal" type="text" class="newMemberTextBox infoTextBox" placeholder="current projects">
            </div>

            <div class="topSection thirds">
              <label for="totalVal"> TOTAL PROJECTS <br/> </label>
              <input id="totalVal" type="text" class="newMemberTextBox infoTextBox" placeholder="total projects">
            </div>
          </div>

          <div class="formBottom formSpacing divSplit">
            <div class="bottomSection">
              <label for="waiverVal"> WAIVER <br/> </label>
              <label class="container">Yes
                <input type="radio" name="waiverVal">
                <span class="checkmark"></span>
              </label>
              <label class="container">No
                <input type="radio" checked="checked" name="waiverVal">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="bottomSection">
              <label for="seriesVal"> SERIES1PRO <br/> </label>
              <label class="container">Yes
                <input type="radio" name="seriesVal">
                <span class="checkmark"></span>
              </label>
              <label class="container">No
                <input type="radio" checked="checked" name="seriesVal">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="bottomSection">
              <label for="uprintVal"> UPRINTSEPLUS <br/> </label>
              <label class="container">Yes
                <input type="radio" name="uprintVal">
                <span class="checkmark"></span>
              </label>
              <label class="container">No
                <input type="radio" checked="checked" name="uprintVal">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="bottomSection">
              <label for="jaguarVal"> JAGUARVLX <br/> </label>
              <label class="container">Yes
                <input type="radio" name="jaguarVal">
                <span class="checkmark"></span>
              </label>
              <label class="container">No
                <input type="radio" checked="checked" name="jaguarVal">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="bottomSection">
              <label for="bantamVal"> BANTAMTOOLS <br/> </label>
              <label class="container">Yes
                <input type="radio" name="bantamVal">
                <span class="checkmark"></span>
              </label>
              <label class="container">No
                <input type="radio" checked="checked" name="bantamVal">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="bottomSection">
              <label for="plsVal"> PLS475 <br/> </label>
              <label class="container">Yes
                <input type="radio" name="plsVal">
                <span class="checkmark"></span>
              </label>
              <label class="container">No
                <input type="radio" checked="checked" name="plsVal">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="bottomSection">
              <label for="sewingVal"> SEWING <br/> </label>
              <label class="container">Yes
                <input type="radio" name="sewingVal">
                <span class="checkmark"></span>
              </label>
              <label class="container">No
                <input type="radio" checked="checked" name="sewingVal">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
          <!-- <button href="updateMember.php" class="primaryButton topSpacing"> Update </button>
          <button href="deleteMember.php" class="secondaryButton topSpacing sideSpacing"> Delete </button> -->

          <!-- test -->
          <!-- <button onclick="location.href = 'index.php';" class="primaryButton topSpacing"> Update </button>
          <button onclick="location.href = 'index.php';" class="secondaryButton topSpacing sideSpacing"> Delete </button> -->
          <br/>
          <input type="submit" class="primaryButton" name="AddMember">
          <input type="reset" value="cancel" class="secondaryButton sideSpacing" name="AddCancel" onClick="#">
        </form>
      </div>
    </div>

  </body>
  </html>