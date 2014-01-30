mousewheel script



	// 		//firefox compatibility
	// 		$('#elem').bind('DOMMouseScroll', function(e){
	// 	     if(e.originalEvent.detail > 0) {
	// 	         //scroll down
	// 	         console.log('Down');
	// 	     }else {
	// 	         //scroll up
	// 	         console.log('Up');
 //     }

 //     //prevent page fom scrolling
 //     return false;
 // });

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
						
					
					//tried a while loop, but got stuck in an infinite loop.
					//I'm trying to use the position of the #vape object to set the upper and lower limits of movement
					//the current "if" conditional completely stops the script when the #vape object reaches the top or bottom
					//I only want the object to stop upward movement when it reaches the top and vice versa for bottom.
					

						
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

				 	
				 		

				 

				 // while(limit < 103)
			});