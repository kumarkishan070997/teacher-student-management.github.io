<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="signup.js">
	</script>
</head>
<body>
	<div class="form">
	<form method="POST" action="indexdata.php">
		<div class="formcontent">
			<h2 style="margin-bottom: -6px;">E-Mail:</h2><br>
			<input type="E-Mail" name="email" id="email"><br>
			<h2 style="margin-bottom: -6px;">Password:</h2><br>
			<input type="password" name="pass" id="pass"><br>
			<div id=rem><input type="checkbox" name="check">Remember me..</div>
			<div class="submit">
			<input type="submit" name="signin" value="Signin" onclick="myfun2()"><br>
			</div>
			<div class="submit2">
				<a href="signup.php" target="_blank"><input type="button" name="signup" value="Signup"></a><br>
			</div>
		</div>
	</form>
</div>
</body>
</html>
