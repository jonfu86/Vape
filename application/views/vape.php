<?php
session_start();
// require_once(connection.php);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vape in Parallax</title>
	<link rel="stylesheet" type="text/css" href="assets/css/vape.css">
	<script src="assets/js/jquery-2.0.3.min.js"></script>
	<script src="assets/js/jquery.mousewheel.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


</head>
<body>
<div class="container">
	<div class="signin">
		<form action="" method="post">
			<input type="text" name="email" placeholder="Enter Email">
			<input type="password" name="password" placeholder="Enter Password">
			<input id="signin_button" type="submit" name="login" Value="Sign In">
		</form>
		<p>Not a user? <a href="register"> Register Here</a></p>
	</div>

<ul id="">

<?php 
$cloud = array( 'name' =>'Vape');
			
$this->load->view('clouds.php', $cloud); 


$clouds2 = array(
			array( 'name' =>'Intro'),
			array( 'name' =>'How'),
			array( 'name' =>'Why'),
			array( 'name' => 'Cost'),
			array( 'name' => 'Mods'));

foreach($clouds2 as $cloud2)
{
	$this->load->view('cloud2.php', $cloud2); 
}

$clouds3 = array(
			array( 'name' => 'Society'),
			array( 'name' => 'Health'));

foreach($clouds3 as $cloud3)
$this->load->view('cloud3.php', $cloud3);
?>

</ul>
	<!-- <div class="vape">
		<h1>Vape in Parallax</h1>
	</div>
	</div>
	<div class="intro">
		<h2>What is Vaping?</h2>
		<p>Vapes or vaporizers are often referred to as e-cigs or electronic cigarettes. Vaping is the act of using one of these electronic devices to inhale vapor that delivers nicotine into the users body. Vaping is a relatively new trend in the United States and this website is here to help provide some helpful information. 
		</p>
	</div>	
	<div class ="how">
		<h2>How do they work?</h2>
		<p>Although there are several different types of vaporizers, they all function in a similar way. Generally a vape consists of a battery, a tank or cartridge to store the nicotine liquid (also known as e-juice or e-liquid), an atomizer or cartomizer, and a mouthpiece for the user to inhale the vapor. The e-liquid is delivered to the atomizer/cartomizer which vaporizes the liquid producing a vapor containing nicotine. 
		</p>
	</div>
	<div class="why">
		<h2>Why Vape?</h2>
		<p>Vaping is a great alternative for tobacco and cigarette smokers who want to kick the habit. Using a vape doesn't stain your clothes and body with the unpleasant smell of tobacco. Many vapers enjoy using e-liquids which are flavored with fruit, candy, or a wide variety of other flavors. This produces a very pleasant aroma which doesn't absorb into your skin or clothing.  E-liquids can also be purchased with different levels of nicotine concentration, which allow a user to control how much nicotine they will intake. Heavy smokers may start off at a higher nicotine level and gradually lower their nicotine level to reduce their nicotine dependancy. Vaping is considerably cheaper than smoking traditional cigarettes and is a much healthier alternative.
		</p>
	</div>
	<div class="health">
		<h2>Effects on your Health</h2>
		<h2>What is Nicotine?</h2>
		<p>One of the main ingredients in e-liquids is nicotine and it is the primary reason why people use vapes. Nicotine is considered both a stimulant and a relaxant and is not as harmful as most people believe. Nicotine increases your blood pressure and heart rate which isn't good for your health and is highly addictive. Nicotine shouldn't be used by pregnant women as there is an increased risk of birth defects. According to the CDC (Center for Disease Control), information about nicotine as a carcinogen is inconclusive. Several studies have shown that nicotine can actually improve your short term memory.
		</p>
		<h2>The Effect of Vaping on your Health</h2>
		<p>So what makes vaping healthier than smoking traditional cigarettes? Nicotine is not what kills people in cigarettes! Traditional cigarette smoke contains over 70 carcinogens, many of which are from toxic chemicals like tar and arsenic that are added to make them more addictive. E-liquids don't contain any of these extra additives. The burning of tobacco in cigarettes also creates carbon monixide, which is extremely toxic to people. Vaping completely removes the combustion of tobacco and doesn't create any carbon monoxide. The majority of vapers report that vaping is much better on the lungs compared to traditional smoking. Although no studies have been published on the effects of vaping on the lungs, there are thousands of anecdotal accounts of vaping improving lung function in smokers who have made the switch. Watch this youtube video 
		</p>
	</div>
	<div class ="cost">
		<h2>How much does Vaping cost?</h2>
		<p>Vaping generally costs much less than smoking traditional cigarettes once you've purchased your own E-cigarette. Although disposable electronic cigarettes are generally very affordable ($2-$5 each), many users prefer to purchase something that will last for a long time. These non-disposable models are often customizable and can range from $10 to over a $150 for a high end model. The actual e-liquid which is consumed typically costs around $9-$12 for a 15ml-18ml bottle which will last a 1-2 weeks depending on frequency of use. With traditional cigarettes increasing in cost ($6-$7 a pack in California), vaping is a friendlier alternative to your wallet as well as your health.
		</p>
	</div>
	<div class ="mods">
		<h2>Mods and Customization</h2>
		<p>Many users purchase E-cigarette models that are capable of a great deal of customization. Modifications for vapes, or "mods" for short, are extremely popular as users can easily alter their vaping experience based on what they like. Mods can include variable voltage settings for the battery or different types and sizes of tanks. These factors can all affect the amount of vapor produced as well as the quality of the flavor.
		</p>
	</div>
	<div class ="community">
		<h2>Community</h2>
	</div>
 -->
</div>

<div id="dialog" title="">
 
	<div class="intro">
		<h2>What is Vaping?</h2>
		<p>Vapes or vaporizers are often referred to as e-cigs or electronic cigarettes. Vaping is the act of using one of these electronic devices to inhale vapor that delivers nicotine into the users body. Vaping is a relatively new trend in the United States and this website is here to help provide some helpful information. 
		</p>
	</div>	
	<div class ="how">
		<h2>How do they work?</h2>
		<p>Although there are several different types of vaporizers, they all function in a similar way. Generally a vape consists of a battery, a tank or cartridge to store the nicotine liquid (also known as e-juice or e-liquid), an atomizer or cartomizer, and a mouthpiece for the user to inhale the vapor. The e-liquid is delivered to the atomizer/cartomizer which vaporizes the liquid producing a vapor containing nicotine. 
		</p>
	</div>
	<div class="why">
		<h2>Why Vape?</h2>
		<p>Vaping is a great alternative for tobacco and cigarette smokers who want to kick the habit. Using a vape doesn't stain your clothes and body with the unpleasant smell of tobacco. Many vapers enjoy using e-liquids which are flavored with fruit, candy, or a wide variety of other flavors. This produces a very pleasant aroma which doesn't absorb into your skin or clothing.  E-liquids can also be purchased with different levels of nicotine concentration, which allow a user to control how much nicotine they will intake. Heavy smokers may start off at a higher nicotine level and gradually lower their nicotine level to reduce their nicotine dependancy. Vaping is considerably cheaper than smoking traditional cigarettes and is a much healthier alternative.
		</p>
	</div>
	<div class="health">
		<h2>Effects on your Health</h2>
		<h2>What is Nicotine?</h2>
		<p>One of the main ingredients in e-liquids is nicotine and it is the primary reason why people use vapes. Nicotine is considered both a stimulant and a relaxant and is not as harmful as most people believe. Nicotine increases your blood pressure and heart rate which isn't good for your health and is highly addictive. Nicotine shouldn't be used by pregnant women as there is an increased risk of birth defects. According to the CDC (Center for Disease Control), information about nicotine as a carcinogen is inconclusive. Several studies have shown that nicotine can actually improve your short term memory.
		</p>
		<h2>The Effect of Vaping on your Health</h2>
		<p>So what makes vaping healthier than smoking traditional cigarettes? Nicotine is not what kills people in cigarettes! Traditional cigarette smoke contains over 70 carcinogens, many of which are from toxic chemicals like tar and arsenic that are added to make them more addictive. E-liquids don't contain any of these extra additives. The burning of tobacco in cigarettes also creates carbon monixide, which is extremely toxic to people. Vaping completely removes the combustion of tobacco and doesn't create any carbon monoxide. The majority of vapers report that vaping is much better on the lungs compared to traditional smoking. Although no studies have been published on the effects of vaping on the lungs, there are thousands of anecdotal accounts of vaping improving lung function in smokers who have made the switch. Watch this youtube video 
		</p>
	</div>
	<div class ="cost">
		<h2>How much does Vaping cost?</h2>
		<p>Vaping generally costs much less than smoking traditional cigarettes once you've purchased your own E-cigarette. Although disposable electronic cigarettes are generally very affordable ($2-$5 each), many users prefer to purchase something that will last for a long time. These non-disposable models are often customizable and can range from $10 to over a $150 for a high end model. The actual e-liquid which is consumed typically costs around $9-$12 for a 15ml-18ml bottle which will last a 1-2 weeks depending on frequency of use. With traditional cigarettes increasing in cost ($6-$7 a pack in California), vaping is a friendlier alternative to your wallet as well as your health.
		</p>
	</div>
	<div class ="mods">
		<h2>Mods and Customization</h2>
		<p>Many users purchase E-cigarette models that are capable of a great deal of customization. Modifications for vapes, or "mods" for short, are extremely popular as users can easily alter their vaping experience based on what they like. Mods can include variable voltage settings for the battery or different types and sizes of tanks. These factors can all affect the amount of vapor produced as well as the quality of the flavor.
		</p>
	</div>

</div>
<script src="assets/js/jquery-parallax.min.js"></script>
<script type="text/javascript">

		$(document).ready(function(){

			$('.intro').hide();
			$('.how').hide();
			$('.why').hide();
			$('.health').hide();
			$('.cost').hide();
			$('.mods').hide();

			$('#Intro').click(function(){
				$('.intro').show();
			});
			$('#How').click(function(){
				$('.how').show();
			});
			$('#Why').click(function(){
				$('.why').show();
			});
			$('#Health').click(function(){
				$('.health').show();
			});
			$('#Cost').click(function(){
				$('.cost').show();
			});
			$('#Mods').click(function(){
				$('.mods').show();
			});



			// console.log(window.document.body);

			$(window).bind('resize', function(){
			   	 var containerSize  = $('.container').width(),
			        textPercentage = 0.17391304347826086956521739130435, /* 40/230 */
			        textRatio      = containerSize * textPercentage,
			        textEms        = textRatio / 100;

		    $('.cloud3 h2').css('font-size', textEms+"em");
		     $('.cloud2 h2').css('font-size', textEms+"em");
		    $('#Vape h1').css('font-size', textEms*1.2 +"em");
				}).trigger('resize');

		// var top = $(window).scrollTop();
		// console.log(top);

		// 	$('.cloud2').hide();
		// 	$('.cloud3').hide();		

		// code for animating clouds to centered position and opening modal
		// $(document).on('click', '#Health, #Society, #Mods, #Cost, #Why, #How, #Intro', function(){
		// 	event.stopPropagation();
		// 	$(this).animate({bottom: "80%", left: "30%"}, 500);
		// 	status = 'off';
		// 	status_off();
		// });

		
		// $(document).on('click', '#Vape', function(){
		// 	event.stopPropagation();
		// 	$('.cloud2').toggle();
		// 	$('.cloud3').toggle();

		// 	});
		
		
			



	

		status = 'off'
				
		$('body').click(function(){
			if (status == 'off'){
			status = 'on';
			status_on();
			console.log('we just turned status on');
						
			}
			else if (status == 'on'){
			status = 'off';
			status_off();
			console.log('we just turned status off');
			
			}
			
		});


		var status_on = function(){
			$('#scene').parallax({
				calibrateX: true,
				calibrateY: true,
			  	invertX: true,
			  	invertY: true,
			  	limitX: false,
			  	limitY: false,
			  	scalarX: 30,
			  	scalarY: 15,
			  	frictionX: 0.2,
			  	frictionY: 0.8
			});

			$('#scene').parallax('enable');
		};

		var status_off = function(){
			$('#scene').parallax('disable');

		};

			// $(document).mousewheel(
			// 	function(){
			// 		console.log(event.deltaX, event.deltaY, event.deltaFactor);
			// });
					var distance = 0;

					console.log(window.document.body.clientHeight);
	

					$(document).mousewheel( 
						function(event, delta){
							console.log(event.deltaY, event.deltaFactor);

							distance = distance + (event.deltaY * event.deltaFactor);
							// return distance;
							
							console.log(distance);
							// var wheight = window.document.body.clientHeight
							

					
					// 	var vapepx = $('#Vape').offset(),
					// 	vapeheight = $('.container').height() - vapepx.top;
					// 	 containerheight = $('.container').height(),
					// 	 limit = (vapeheight / containerheight) * 100;
					// console.log(limit);
						// var limit = document.getElementById('Vape').style.top;
						

						
							if(delta < 0){
								$('#Vape').animate({bottom: "+=5%", right:"+=6%"}, 200);
								$('#How').animate({bottom: "+=5%", left:"+=1%"}, 200);
								$('#Why').animate({bottom: "+=5%", left:"+=5.5%"}, 200);
								$('#Society').animate({bottom: "+=3.5%", left:"+=4.75%"}, 200);
								$('#Health').animate({bottom: "+=3.5%", right:"+=2.5%"}, 200);
								$('#Cost').animate({bottom: "+=4%", left:"+=3%"}, 200);
								$('#Mods').animate({bottom: "+=3.75%", right:"+=4.5%"}, 200);
								$('#Intro').animate({bottom: "+=4%", right:"+=0.75%"}, 200);
							}
							else if(delta > 0){
								$('#Vape').animate({bottom: "-=5%", right:"-=6%"}, 200);
								$('#How').animate({bottom: "-=5%", left:"-=1%"}, 200);
								$('#Why').animate({bottom: "-=5%", left:"-=5.5%"}, 200);
								$('#Society').animate({bottom: "-=3.5%", left:"-=4.75%"}, 200);
								$('#Health').animate({bottom: "-=3.5%", right:"-=2.5%"}, 200);
								$('#Cost').animate({bottom: "-=4%", left:"-=3%"}, 200);
								$('#Mods').animate({bottom: "-=3.75%", right:"-=4.5%"}, 200);
								$('#Intro').animate({bottom: "-=4%", right:"-=0.75%"}, 200);
							}





					// $('#Vape').click(function(){
					// 	var limit = document.getElementById('Vape').style.top;
			
					// 		if(limit < 200){
					// 			$('#Vape').animate({bottom: "85%", right:"95%"}, 2000);
					// 			$('#How').animate({bottom: "+=5%", left:"+=1%"}, 200);
					// 			$('#Why').animate({bottom: "+=5%", left:"+=5.5%"}, 200);
					// 			$('#Society').animate({bottom: "+=3.5%", left:"+=4.75%"}, 200);
					// 			$('#Health').animate({bottom: "+=3.5%", right:"+=2.5%"}, 200);
					// 			$('#Cost').animate({bottom: "+=4%", left:"+=3%"}, 200);
					// 			$('#Mods').animate({bottom: "+=3.75%", right:"+=4.5%"}, 200);
					// 			$('#Intro').animate({bottom: "+=4%", right:"+=0.75%"}, 200);
					// 		}
					// 		else {
					// 			// if(delta > 0){
					// 			$('#Vape').animate({bottom: "-=5%", right:"-=6%"}, 200);
					// 			$('#How').animate({bottom: "-=5%", left:"-=1%"}, 200);
					// 			$('#Why').animate({bottom: "-=5%", left:"-=5.5%"}, 200);
					// 			$('#Society').animate({bottom: "-=3.5%", left:"-=4.75%"}, 200);
					// 			$('#Health').animate({bottom: "-=3.5%", right:"-=2.5%"}, 200);
					// 			$('#Cost').animate({bottom: "-=4%", left:"-=3%"}, 200);
					// 			$('#Mods').animate({bottom: "-=3.75%", right:"-=4.5%"}, 200);
					// 			$('#Intro').animate({bottom: "-=4%", right:"-=0.75%"}, 200);
					// 		}

				 	
				 		

				 

				 // while(limit < 103)
			});

		$(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( ".cloud" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
		
		});

</script>
</body>
</html>