<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vape in Parallax - Registration</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="register">
		<label>
			<h4>Email: </h4>
			<Input type="text" name="email" placeholder="Enter Email">
		</label>
		</label>	
			<h4>First Name: </h4>
			<Input type="text" name="first_name" placeholder="Enter First Name">
		</label>
		<label>
			<h4>Last Name: </h4>
			<Input type="text" name="last_name" placeholder="Enter Last Name">
		</label>
		<label>
			<h4>Password: </h4>
			<Input type="password" name="password" placeholder="Enter Password">
		</label>
		<label>
			<h4>Confirm Password: </h4>
			<Input type="password" name="confirm" placeholder="Confirm Password">
		</label>
		<label for="picture">
			<h4>Profile Picture (optional): </h4>
		</label>
		<input type="file" name="file">	
		<input type="submit" value="Register">
	</form>
</body>
</html>