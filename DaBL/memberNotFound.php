   
<html>
  <title>Member Not Found</title>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>

    <div class="nav2-rec" >
      <nav class="nav2">
        <li><a class="home" href="stats-page.php">Home</a></li>
        <li><a class="memOpt" href="index.php">Member Options</a></li>
        <li><a class="tableOpt" href="tableOptions.php">Table Options</a></li>
      </nav>
    </div>  
    <div class="toolsDiv">
      <!-- <div class="background"> -->
      <div class="bottomHeight centerDiv">
        <h2 class="lightType"> DaBL CaTS Admin Interface </h2>
        <h1 class="lightType"> MEMBER OPTIONS </h1>
        <form>
          <input type="text" class="primaryTextBox" placeholder="search members" name="viewMember">
          <input type="submit" class="primaryButton sideSpacing" name="searchMember">
        </form>
      </div>
    </div>
    <div class="whiteDiv">
      <div class="headingContainer centerDiv">
        <h2> Member Not Found </h2>
        <p> The name or UID that you searched cannot be found. Want to add a new member? </p>
        <!-- move js to script file -->
        <button onclick="location.href = 'addMember.php';" class="primaryButton largeButton topSpacing"> Add New Member </button>
      </div>
    </div>
  </body>
</html>

