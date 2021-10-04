<!DOCTYPE html>
<html>
<head>
<style>

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>
<body>

<h1>The login Form</h1>

<form action="/action_page.php">
 <fieldset>
  <legend>LOGIN:</legend>
  <label for="fname">User Name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Password :</label> 

  <input type="text" id="lname" name="lname"><br>
  <hr>
  <input type="radio" id="male" name="fav_language" value="MALE">
  <label for="male">Remember Me</label><br>
  


 <input type="submit" value="Submit">  

<span class="psw"> <a href="#">Forgot password?</a></span>
<br>
 
 </fieldset>
</form>

</body>
</html>