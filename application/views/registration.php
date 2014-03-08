<?php
session_start();
// require_once(connection.php);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vape in Parallax - Registration</title>
	<link rel="stylesheet" type="text/css" href="assets/css/registration.css">
	<script src="assets/js/jquery-2.0.3.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	
</head>
<body>
	<div class="container">
		<div class= "regform">
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
				<input class="form_button" type="submit" value="Register">
			</form>
		</div>
	</div>
	<?php 
	$cloud = array( 'name' =>'Vape');
				
	$this->load->view('clouds.php', $cloud); 

	?>
<!-- <script src="assets/js/jquery-parallax.min.js"></script> -->
<script type="text/javascript">

$(document).ready(function(){

	$('#Vape').hover(
		function(){$(this).find(".opac").animate({ opacity: 1 });},
		function(){$(this).find(".opac").animate({ opacity: 0.6});}
	);


	$(window).bind('resize', function(){
	   	 var containerSize  = $('.container').width(),
	        textPercentage = 0.17391304347826086956521739130435, /* 40/230 */
	        textRatio      = containerSize * textPercentage,
	        textEms        = textRatio / 100;
	$('#dialog p').css('font-size', textEms*0.35+"em");
    $('h4').css('font-size', textEms*0.6+"em");
     $('#dialog h2').css('font-size', textEms*0.6+"em");
    $('#Vape h1').css('font-size', textEms*1.2 +"em");
		}).trigger('resize');
	
		
});

</script>
</body>
</html>