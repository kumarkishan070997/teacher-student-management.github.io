<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<script src="signup.js"></script>
</head>
<body>
	<div class="form">
	<form method="POST" action="signupdata.php">
		<div class="formcontent">
			<h2 style="margin-bottom: -6px;">You are :</h2><br>
			<select name="sts" id="select">
				<option>Student</option>
				<option>Teacher</option>
			</select>
			<h2 style="margin-bottom: -6px;">Name :</h2><br>
			<input type="text" name="name"><br>

			<h2 style="margin-bottom: -6px;">E-Mail:</h2><br>
			<input type="E-Mail" name="emails"><br>
			<h2 style="margin-bottom: -6px;">Password:</h2><br>
			<input type="password" name="pass1s" id="pass1"><br>
			<h2 style="margin-bottom: -6px;">Re-type Password:</h2><br>
			<input type="password" name="pass2" id="pass2"><br>
			<div class="submit">
			<input type="submit" name="signup" value="Signup"><br>
			</div>
		</div>
	</form>
</div>
</body>
</html>



