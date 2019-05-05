<!DOCTYPE html>
<html>
<Head>
	<title> Table Options </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <form method="get" action="test.html">
      <button style="font-size:20px;color: #3EC1EA; margin-left: 80%;"><i class="fa fa-power-off"></i></button>
    </form>

    <div class="toolsDiv">
      <div class="bottomHeight centerDiv">
        <h3 class="lightType"> DaBL CaTS Admin Interface </h3>
<!--        <div id="overlay"></div>-->
      </div>
    </div>

    <div class="nav3-rec" >
      <nav class="nav3">
        <li><a class="home" href="stats-page.cfm">Home</a></li>
        <li><a class="memOpt" href="index.php">Member Options</a></li>
        <li><a class="tableOpt" href="table-options.cfm">Table Options</a></li>
      </nav>
    </div> 

    <cfquery name="viewTable" datasource="dablTest"> 
        SELECT * from users
    </cfquery> 

	<table class="tableOpts">
		<br>
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>UID</th>
                    <th>Previous UID</th>
                    <th>Member Type</th>
                    <th>Member Since</th>
                    <th>Last Access</th>
                    <th>Waiver</th>
                    
                </tr>
            </thead>
            
            <Cfoutput query="viewTable">
                <tbody>
                    <tr>
                        <td>#user_name#</td>
                        <td>#uid#</td>
                        <td>#previous_uid#</td>
                        <td>#member_type#</td>
                        <td>#member_since#</td>
                        <td>#last_access#</td>
                        <td>#waiver#</td>
                        
                    </tr>
                </tbody>
            </CFOutput>
    </table>

    



<style>

.nav1-rec {
    background-color: #FFFFFF;
    width: 100%
}

.nav2-rec {
    background-color: #FFFFFF;
    width: 100%
}
    
.nav3-rec {
    background-color: #FFFFFF;
    width: 100%
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
    
a:hover {
    color: #000000;
} 
      
a {
    text-decoration: none;
    color: #676767;
} 
    
.nav2 li {
    margin-right: 20px;
    display: inline;
}
    
.nav2 .memOpt {
    color: #F36D0C;
}
    
.nav3 li {
    margin-right: 20px;
    display: inline;
}
    
.nav3 .tableOpt {
    color: #F36D0C;
}


/* TYPOGRAPHY */
h1 {
    font-size: 48px;
    margin: 0px;
    color: #333333;
}


h2 {
    font-size: 24px;
    margin: 0px;
    padding-bottom: 5px;
    font-style: italic;
    color: #333333;
}


h3 {
  font-size: 32px;
  margin: 0px;
  color: #333333;
  text-transform: uppercase;
}


h4 {
  font-size: 32px;
  margin: 0px;
  color: #333333;
  font-weight: 300;
  text-transform: uppercase;
}


p {
  font-size: 16px;
  margin: 0px;
  padding-top: 15px;
  color: #222222;
}

.uppercase {
  text-transform: uppercase !important;
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
}


.blueType {
  color: #3EC1EA !important;
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


/* BUTTONS */
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


.secondaryButton {
  height: 35px;
  width: 130px;
  border-width:0px;
  border-radius: 30px;
  background-color: #bbbbbb;
  color: #000000;
  font-align: center;
  font-size: 18px;
  font-weight: medium;
  text-transform: uppercase;
}


.secondaryButton:hover{
  background-color: #dddddd;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


.warningButton {
  height: 35px;
  width: 130px;
  border-width:0px;
  border-radius: 30px;
  background-color: #CA4217;
  color: #f5f5f5;
  font-align: center;
  font-size: 18px;
  font-weight: medium;
  text-transform: uppercase;
}


.warningButton:hover{
  background-color: #F94E18;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


.centerButton {
  margin: 0px auto;
  display: block;
}


/* FORM COMPONENTS */
.primaryTextBox {
  width: 440px;
  height: 35px;
  border-width:1.5px;
  border-radius: 30px;
  border-color: #333333;
  background-color: #f5f5f5;
  opacity: .85;
  font: #777777;
  padding-left: 25px;
  font-size: 18px;
  font-style: italic;
  text-transform: lowercase;
  cursor: pointer;
}


form {
  margin: 0px;
}


.newMemberTextBox {
  width: 100%;
  height: 35px;
  /* border-radius: 3px; */
  border-width:1.5px;
  border-color: #333333;
  background-color: #f5f5f5;
  font: #777777;
  padding-left: 25px;
  margin-right: 25px;
  margin-top: 5px;
  font-size: 12px;
  font-style: italic;
  text-transform: lowercase;
  cursor: pointer;
}

/* .newMemberDropDown {
  width: 100%;
  height: 35px;
  border-radius: 3px;
  border-width:1.5px;
  border-color: #333333;
  background-color: #f5f5f5;
  font: #777777;
  padding-left: 25px;
  margin-right: 25px;
  margin-top: 5px;
  font-size: 12px;
  font-style: italic;
  text-transform: lowercase;
  cursor: pointer;
} */


.infoTextBox {
  width: 100%;
  margin-right: 15px;
}


.checkmark {
  margin-right: 15px;
}


/* SPACING and LAYOUT */
.sideSpacing {
  margin-left: 25px;
  margin-right: 25px;
}


.topSpacing {
  margin-top: 25px;
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
  justify-content: space-between; /* switched from default (flex-start, see below) */
}


.topSection {
  width: 50%;
  padding-right: 25px;
}

.thirds {
  width: 33% !important;
}


.bottomSection {
  width:14.2%;
  padding-right: 25px;
}


/* BACKGROUNDS */
.whiteDiv {
  background-color: #ffffff;
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
  background-color: rgba(0,0,0,.25) !important;
  height: 65%;
  width: 100%;
}

/* .shortImageDiv {
  position: relative;|
  background-color: rgba(0,0,0,.25) !important;
  height: 30%;
  width: 100%;
} */

.bottomHeight {
  position: absolute;
  bottom: 0px;
  margin-bottom: 50px;
}

.headingContainer {
  padding-top: 45px;
  padding-bottom: 45px;
}

.loginDiv {
  height: 100% !important;
}

.loginDivPosition {
  position: absolute;
  bottom: 0px;
  margin-bottom: 20%;
}
      
   
    
    


</style>

</body>
</html>





