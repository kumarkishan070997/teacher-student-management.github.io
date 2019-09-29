<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="profiledata.php">
			<div class="all">
			<div id="submit1">
			<input type="submit" name="profile" value="My profile"></div>
			<div id="select">
			<select name="proselect" style="position: absolute;border: none;background: transparent;height: 40px;width: 75%; color: #fff; font-size: 20px;border-radius: 10px;">
				<option>Student</option>
				<option>Teacher</option>
			</select></div>
			<div id="submit2">
			<input type="submit" name="logout" value="logout"></div></div>
		</form>
	</div>
</body>
</html>