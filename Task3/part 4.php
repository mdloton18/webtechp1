<!DOCTYPE html>
<html>
<head>
<style>

input {
  margin: 5px;
}
</style>
</head>
<body>

<h1>JSON file named data.json</h1>

<form action="/action_page.php">
 <fieldset>
  <legend>RESGISTRATION</legend><br>
  <label for="fname">Name :</label>
  <input type="text" id="fname" name="fname"><br><br><hr>
  <label for="lname">Email :</label> 
   <input type="text" id="lname" name="lname"> <label for="lname">i</label>
   <br><br><hr>
  <label for="User name">User name :</label>
  <input type="User name" id="User name" name="User name"><br><br><hr>
  <label for="Password">Password :</label>
  <input type="Password" id="Password" name="Password"><br><hr><br>

  <label for="Password">Confirm Password :</label>
  <input type="Password" id="Password" name="Password"><br><hr><br>

  <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
                     </fieldset><br> 
                     <fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset> 
 
  <input type="submit" value="Submit">
  <button class="btn success">Reset</button>
  </fieldset>
</form>

</body>
</html>