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
	<div class = "edit_profile">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="action" value="edit_profile">
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
			<br>
			<textarea cols="50" rows="6" name="self" placeholder="About Yourself..."></textarea>
			<input type="submit" value="Save Profile" name="save_profile">
		</form>
	</div>
	<div class ="profile_setup">
		<p> Select your favorite Vape Setup</p>
		<p>(Will be displayed on the Community page)</p>
		<form action="" method="post">
		<?php
			foreach $setups as $setups
			{
				?><input type="radio" name="setup" value = "<?= $name ?>"> <?= $name ?> <a href="">edit this setup</a> <br> <?php
			}
		?>
		<input type="submit" value="Save Favorite Vape" name="favorite">
		</form>
	</div>
	<div class="edit_setup">
		<button type = "submit" name="add_setup">Add Vape Setup</button>
		<form action ="" method ="post" enctype="multipart/form-data">
			<input type="hidden" name="action" value="edit_setup">
			<input type="text" name="vape_name" placeholder="Name Your Vape Setup">
			<input type="file" name="file">
			<input type="text" name="vape_desciption" placeholder="Edit Vape Description">
			<input type="text" name="vape_review" placeholder="Review your Vape Setup">
			<input type="submit" value="Save Vape Setup" name="save_setup">
		</form>
	</div>
	
</body>
</html>