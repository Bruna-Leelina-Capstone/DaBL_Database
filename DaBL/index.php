

<html>
  <title>Member Options</title>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <cfquery name="dablTest" datasource="dablTest">

    <div class="nav2-rec">
      <nav class="nav2">
        <li><a class="home" href="stats-page.cfm">Home</a></li>
        <li><a class="memOpt" href="index.php">Member Options</a></li>
        <li><a class="tableOpt" href="table-options.cfm">Table Options</a></li>
      </nav>
    </div>

    
      <form method="get" action="test.html">
        <button id="powerbtn" style="font-size:20px;color: #3EC1EA; margin-left: 93%;"><i class="fa fa-power-off"></i></button>
      </form>
   

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
        <p> To view member info, look up a name or UID using the search bar above. </p>
      </div>
    </div>

    <div class="ctaContainer greyDiv">
      <h3> ADD A NEW MEMBER? </h3>
      <p> Want to add a new member? Skip the search process and head over to the new member sign up. </p>
      <button onclick="location.href = 'addMember.php';" class="primaryButton largeButton topSpacing"> Add New Member </button>
    </div>

  </body>

  <style>

    #powerbtn{
      opacity: 0.5;
      position: relative;
      bottom: 32px;
      border: none;
      outline: 0;
    }

    #powerbtn:hover{
      opacity: 1;
    }

    

  </style>
</html>

