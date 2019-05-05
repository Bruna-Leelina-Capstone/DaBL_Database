
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

<cfquery name="dablTest" datasource="dablTest" >

  SELECT * FROM users
 
</cfquery>

    
    <div class="nav3-rec" >
        <nav class="nav3">
            <li><a class="home" href="stats-page.cfm">Home</a></li>
            <li><a class="memOpt" href="index.php">Member Options</a></li>
            <li><a class="tableOpt" href="table-options.cfm">Table Options</a></li>
        </nav>
    </div>
    <form method="get" action="test.html">
        <button style="font-size:20px;color: #3EC1EA; margin-left: 93%;"><i class="fa fa-power-off"></i></button>
    </form>
    

    <div class="toolsDiv">
      <div class="bottomHeight centerDiv">
        <h2 class="lightType"> DaBL CaTS Admin Interface </h2>
        <h1 class="lightType"> TABLE OPTIONS </h1>
      </div>
    </div>
  
    <div class="search">
        <div class="select">
            <select name="search" id="search">
                <option value="options" selected="selected">select a table to view</option>
                <option value="1">users</option>
                <option value="2">access log</option>
                <option value="3">tools</option>
                <option value="4">workshops</option>
                <option value="5">projects</option>
                <option value="6">sewing</option>
                <option value="7">series1pro</option>
                <option value="8">uprintseplus</option>
                <option value="9">pls475</option>
                <option value="10">jaguarvlx</option>
                <option value="11">bantamtools</option>
            </select>
        </div>
    </div>
    <!-- <div class="searchbtn">
    <form>
      <input type="submit" class="primaryButton sideSpacing">
    </form>
    </div> -->
    <div class="divider"></div>

    <div class="whiteDiv">
        <div class="headingContainer centerDiv">
            <h2> Table View </h2>
            <p> To view a table, simply select a table option from the dropdown above. </p>
        </div>

        <div class="backup-box">
            <div class="backup-pos">
                <h4 class="backup"> DATABASE BACKUP?</h4>  
                <p> Want to backup the entire database? Backup all tables here or individually backup through the dropdown.</p> 
                <button href="open-table.cfm" class="primaryButton largeButton topSpacing"> BACKUP ALL </button>
            </div>
        </div>
    </div>   
       
    
  </body>

  <style>
    
      
    .divider {
      margin: 25px;
    }
    body {
      margin: 0;
      font-family: Montserrat;
      background-size: cover;
      background-image: url(tool_rack_header.jpg);
    }
      
    .nav1-rec {
      background-color: #FFFFFF;
      width: 100%;
    }
    
    .nav2-rec {
      background-color: #FFFFFF;
      width: 100%
    }
    
    .nav3-rec {
      background-color: #FFFFFF;
      width: 100%
    }
    .nav3 li {
        margin-right: 20px;
        display: inline;
    }
    
    .nav3 .tableOpt {
        color: #F36D0C;
    }
    
    .nav1 li {
        
      margin-right: 20px;
      display: inline;
    }
    
    nav {
      padding: 10px 0px 10px 100px;
        
    }
    
    .nav1 .home {
      color: #F36D0C;
    }
    
    a:hover {
      color: #000000;
    } 
      
    a {
      text-decoration: none;
      color: #676767;
        
    }

    button{
      opacity: 0.5;
      position: relative;
      bottom: 32px;
      border: none;
      outline: 0;
    }

    button:hover{
      opacity: 1;
    }

    /*.options {
        color: #F5F5F5;
    }*/
      
    /* TYPOGRAPHY */
    h1 {
      font-size: 48px;
      margin: 0px;
      color: #333333;
    }
    h2 {
      /*text-align: center;*/
      font-size: 24px;
      margin: 0px;
      padding-bottom: 5px;
      font-style: italic;
      color: #333333;
    }
    h3 {
      /*text-align: center;  */
      font-size: 22px;
      margin: 0px;
      color: #333333;
      text-transform: uppercase;
    }
      
    .blackType {
      color: #333333;  
    }
    
      
    h5 {
      font-size: 25px; 
      margin: 0px;
      color: #3EC1EA;
      font-weight: bold;
      text-align: center; 
    }
      
    p {
      font-size: 16px;
      margin: 0px;
      padding-top: 15px;
    }
     
    .ctaContainer>p {
      padding-top: 10px !important;
      text-align: center;
    }
    .topSection, .bottomSection > p {
      padding-top: 5px;
    }
    .orangeType {
      color: #F36D0C !important;
    }
    .lightType {
      color: #f5f5f5 !important;
      text-align: left;
      font-style: normal;
      margin-bottom: 10px;
    }

    /* form typography */
    label {
      font-size: 12px;
      margin: 0px;
      color: #333333;
      font-weight: 600;
      text-transform: uppercase;
    }
    .container {
      font-weight: normal;
      text-transform: none;
    }
    
    /* SPACING and LAYOUT */
    .sideSpacing {
      margin-left: 25px;
      margin-right: 25px;
    }
    .topSpacing {
      margin-top: 45px;
    }
    .centerDiv {
      width: 80%;
      margin-left: 10%;
      margin-right: 10%;
    }
    .memberDiv {
      padding-top: 45px;
      padding-bottom: 45px;
    }
    .formSpacing {
      margin-top: 20px;
    }
    .divSplit {
      display: flex;                  /* establish flex container */
      flex-direction: row;            /* default value; can be omitted */
      flex-wrap: nowrap;              /* default value; can be omitted */
      justify-content: space-between; 
        /* switched from default (flex-start, see below) */
    }
    .topSection {
      width: 50%;
      padding-right: 25px;
    }
    .bottomSection {
      width:7%;
      padding-right: 25px;
    }
    /* BACKGROUNDS */
    .whiteDiv {
      background-color: #ffffff;
      height: 60%;
    }
    .greyDiv {
      background-color: #f5f5f5;
    }
    .ctaContainer {
      padding-top: 15px;
      padding-bottom: 25px;
      text-align: center;
    }
    .toolsDiv {
      position: relative;
      height: 35%;
      width: 100%;
    }

      
    .bottomHeight {
      position: absolute;
      bottom: 0px;
      margin-bottom: 50px;
    }

    .search{
        font-size: 13px;
        width: 40%;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 30px;
        overflow: hidden;
        position: relative;
        height: 35px;
        border-width:1.5px;
        border-radius: 30px;
        border-color: #333333;
        background-color: #f5f5f5;
        opacity: .85;
        margin-top: -50px; 
        left: 10%;  
    }

    .search .select{
        width: 120%;
        /* can't get icon to show up*/
        /*    background:url(images/arrow.png) no-repeat;    */
    }

    .search .select select{
        border: 0;
        width: 80%;
        height: 35px;
        padding-left: 25px;
        font-size: 18px;
        font-style: italic;
        color: #777777;
        text-transform: lowercase;
        cursor: pointer;
        outline: 0;
    }

    .headingContainer {
      padding-top: 45px;
      padding-bottom: 45px;
    }
    .primaryButton {
      height: 35px;
      width: 130px;
      border-width:0px;
      border-radius: 30px;
      background-color: #F36D0C;
      color: #f5f5f5;
      font-align: center;
      font-size: 18px;
      font-weight: medium;
      text-transform: uppercase;
    }
    .primaryButton:hover{
      background-color: #F6944D;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .largeButton {
      width: 230px !important;
    }
    .backup {
        font-size: 16pt;
    }
    .backup-box {
        background-color: #F5F5F5;
        height: 50%;
        text-align: center;
    }
    .backup-pos {
        padding: 20px;
    }

    .backup-pos p {
        padding-top: 5px;
    }
    .searchbtn {
      margin-left: 50%;
    }




  </style>

</html>