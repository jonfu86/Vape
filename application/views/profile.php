<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vape in Parallax - Profile</title>
</head>
<body>
	<div class="signedin">
		<p>Signed in as:<?= $first_name;.','.$last_name ?></p>
		<img src=<?='$profile'?>>
		<form action="" method="post">
			<button type="submit" name="signout">Sign Out</button>
		</form>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="edit">
		</label>	
			<h4>First Name: </h4>
			<Input type="text" name="first_name" placeholder="Enter First Name">
		</label>
		<label>
			<h4>Last Name: </h4>
			<Input type="text" name="last_name" placeholder="Enter Last Name">
		</label>
		<label for="location">
			<h4>Location (optional):</h4>
			<Input type="text" name="location" placeholder="Enter Location">
		</label>
		<label for="picture">
			<h4>Add/Change Profile Picture: </h4>
		</label>
		<input type="file" name="file">
		<input type="textarea" cols="70" rows="7" name="self" placeholder="About Yourself..."></textarea>
		<input type="submit" value="Save Profile" name="save">
	</form>