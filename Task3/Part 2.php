<!DOCTYPE html>
<html>
<head>
<style>

legend {
  background-color: gray;
  color: #000000;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>
<body>

<h1>The password Change </h1><br>

<form action="/action_page.php">
 <fieldset>
  <legend>CHANGE PASSWORD:</legend>
  <label for="fname">Current Password :</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname" style="color: green;">New Password :</label> 
  <input type="text" id="lname" name="lname"><br><br>
  <label for="lname" style="color: #e40d0d;">Retype New Password :</label> 
  <input type="text" id="lname" name="lname"><br><br>
  <hr>  
 <input type="submit" value="Submit">  
 
 </fieldset>
</form>

</body>
</html>