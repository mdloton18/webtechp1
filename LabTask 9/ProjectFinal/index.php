<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Landing Page</title>
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="home-header">
		<strong><span class="glyphicon glyphicon-"> AB Star Restaurant </strong>
	</div>
	<br><br><br><br>
	<center>
			<div><a href="view/home-page.php" class="btn login-btn">
					<?php
						if(isset($_SESSION['username']))
						{
							echo $_SESSION['username'];
						}
						else
						{
							echo "Login";
						}
					?>
				</a>
				<a href="view/registration-form.php" class="btn"> Registration
			</a>
			</div>
			<br>
		<br><br>
		<tr>
			<td><img src="resources/images/1.png" alt="Food" width="260px"></td>
			<td><img src="resources/images/r.PNG" alt="Food" width="280px"></td>
			<td><img src="resources/images/fires4.png" alt="Food" width="280px"></td>
			<td><img src="resources/images/2.png" alt="Food" width="260px"></td>
		</tr>
	</center>
 <?php include 'view/footer.php' ; ?>

</body>
</html>