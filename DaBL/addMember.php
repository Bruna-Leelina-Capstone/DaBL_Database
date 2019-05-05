 


<html>
  <title>Login Screen</title>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
     <cfquery name="addMem" datasource="dablTest">
      insert into users values('#user_name#','#uid#','#previous_uid#', '#member_type#', '#member_since#', '#last_access#', '#waiver#') 
    </cfquery> 
  

    <div class="toolsDiv">
      <!-- <div class="background"> -->
      <div class="bottomHeight centerDiv">
        <h2 class="lightType"> DaBL CaTS Admin Interface </h2>
        <h1 class="lightType uppercase"> Add New Member </h1>
        <button onclick="location.href = 'index.php';" class="secondaryButton largeButton topSpacing"> Member Search</button>
      </div>
    </div>
    <div class="whiteDiv">
      <div class="memberDiv centerDiv">
        <h2> New Member Info </h2>
        <form>
          <div class="formTop formSpacing divSplit">
            <div class="topSection thirds">
              <label for="firstName"> FIRST NAME <br/> </label>
              <input id="firstName" type="text" class="newMemberTextBox" placeholder="first name">
            </div>

            <div class="topSection thirds">
              <label for="lastName"> LAST NAME <br/> </label>
              <input id="lastName" type="text" class="newMemberTextBox" placeholder="last name">
            </div>

            <div class="topSection thirds">
              <!-- <label for="title"> MEMBER TITLE <br/> </label>
              <select id="title" class="newMemberTextBox" placeholder="member title">
                <option value="student">Student</option>
                <option value="specialist">Specialist</option>
                <option value="faculty">Faculty</option>
                <option value="postbacc">PostBacc</option>
                <option value="research">Research</option>
                <option value="manager">Manager</option>
              </select> -->
              <label for="uid"> UID <br/> </label>
              <input id="uid" type="text" class="newMemberTextBox infoTextBox" placeholder="uid">
            </div>
          </div>

          <div class="formMiddle formSpacing divSplit">
            <div class="topSection thirds">
              <label for="title"> MEMBER TITLE <br/> </label>
              <select id="title" class="newMemberTextBox" placeholder="member title">
                <option value="student">Student</option>
                <option value="specialist">Specialist</option>
                <option value="faculty">Faculty</option>
                <option value="postbacc">PostBacc</option>
                <option value="research">Research</option>
                <option value="manager">Manager</option>
              </select>
              <!-- <label for="uid"> UID <br/> </label>
              <input id="uid" type="text" class="newMemberTextBox infoTextBox" placeholder="uid"> -->
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
          <br/>
          <input type="submit" class="primaryButton" name="AddMember">
          <input type="reset" value="cancel" class="secondaryButton sideSpacing" name="AddCancel" onClick="#">
        </form>

        
      </div>
    </div>

  </body>
</html>

