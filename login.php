<html>
  <title>Login Screen</title>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <?php
      $servername = "localhost";
      $password = "test";

      if($_POST['password'] == $password){
        header('Location: index.php');
      }
      else {

      }
    ?>

    <div class="toolsDiv loginDiv">
      <div class="centerDiv loginDivPosition">
        <h1 class="lightType"> DaBL CaTS Admin Interface </h1>
        <form action="" method="POST">
          <input type="password" name="password" class="primaryTextBox" placeholder="access database">
          <input type="submit" class="primaryButton largeButton sideSpacing" name="AccessDatabase">
        </form>
      </div>
    </div>

  </body>
</html>
