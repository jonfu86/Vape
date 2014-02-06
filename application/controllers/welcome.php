<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once('clouds.php');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('vape');
		


		// $this->main_cloud('Vape in Parallax');
		// $this->create_cloud('What is Vaping?');
		// $this->create_cloud('How do they Work?');
		// $this->create_cloud('Why Vape?');
		// $this->create_cloud('Effects on Health');
		// $this->create_cloud('What does it Cost?');
		// $this->create_cloud('Customization');
		// $this->create_cloud('Community');
		
	}

	public function register()
	{
		$this->load->view('registration');
	}

	public function profile()
	{
		$this->load->view('profile');

	}


	// public function create_cloud($name)
	// {


	// }


	// public function main_cloud($name)
	// {


	// }



	// using SVG
	// public function create_cloud($name)
	// {
	// 	// echo '<object type="image/svg+xml" data="assets/img/mycloud.svg">
	// 	// 		Your browser does not support SVG</object>';
	
	// 		echo '<svg class="cloud" width="445" height="142" xmlns="http://www.w3.org/2000/svg">
	// 			 <title>mycloud</title>
	// 			 <g display="inline">
	// 			  <title>Layer 1</title>
	// 			  <path stroke="#999999" fill="#93cdea" d="m355.205994,45.103165c-4.141205,0 -10.452209,0.179062 -18.432495,0.493973c-3.29126,-19.143188 -34.031769,-34.148003 -71.48468,-34.148003c-13.689178,0 -26.481201,2.004349 -37.365509,5.480774c-16.749084,-8.142128 -39.181152,-13.128914 -63.851471,-13.128914c-51.826813,0 -93.834106,21.97496 -93.834106,49.084915c0,2.400757 0.344711,4.759552 0.982178,7.070175c-37.450516,1.336212 -67.045937,17.641464 -67.045937,37.573807c0,20.804214 32.244484,37.67012 72.018272,37.67012c33.422623,0 242.942093,0 279.016098,0c47.558136,0 86.120636,-20.166977 86.120636,-45.050278c-0.0047,-24.874664 -38.567261,-45.04657 -86.122986,-45.04657z" id="svg_1" stroke-width="2"/>
	// 			  <defs>
	// 			   <radialGradient id="svg_3" spreadMethod="pad">
	// 			    <stop stop-color="#496480" offset="0"/>
	// 			    <stop stop-color="#b69b7f" offset="1"/>
	// 			   </radialGradient>
	// 			  </defs>
	
	// 			  <text font-weight="bold" transform="matrix(1.94713 0 0 2.21739 -231.913 -197.217)" id="svg_2" fill="#ffffff" font-size="20" font-family="arial" y="138.196078" x="234.726153" style="text-anchor: middle">
	// 			  '.$name.'</text>
				 
	// 			 </g>
	// 			</svg>
	// 			';
	// }

	// public function main_cloud($name)
	// {
	// 		echo '<svg class="cloud" width="530" height="215" xmlns="http://www.w3.org/2000/svg">
	// 		 <title>mycloud</title>
	// 		 <g display="inline">
	// 		  <title>Layer 1</title>
	// 		  <path stroke="#999999" fill="#93cdea" d="m421.051361,67.10601c-4.91803,0 -12.412811,0.274452 -21.890015,0.757126c-3.9086,-29.341309 -40.415314,-52.339615 -84.893524,-52.339615c-16.256958,0 -31.448425,3.072124 -44.37439,8.400539c-19.890808,-12.479671 -46.530624,-20.123066 -75.828522,-20.123066c-61.548309,0 -111.435173,33.681652 -111.435173,75.233849c0,3.67971 0.40937,7.295105 1.166412,10.836662c-44.475349,2.04805 -79.622177,27.039566 -79.622177,57.590439c0,31.887207 38.292793,57.738068 85.527206,57.738068c39.691933,0 288.512321,0 331.352959,0c56.478912,0 102.274841,-30.910492 102.274841,-69.049835c-0.005554,-38.126114 -45.801575,-69.044167 -102.277618,-69.044167z" id="svg_1" stroke-width="2"/>
	// 		  <defs>
	// 		   <radialGradient id="svg_3" spreadMethod="pad">
	// 		    <stop stop-color="#496480" offset="0"/>
	// 		    <stop stop-color="#b69b7f" offset="1"/>
	// 		   </radialGradient>
	// 		  </defs>
	// 		  <text font-weight="bold" transform="matrix(2.81112 0 0 3.74377 -365.985 -409.922)" id="svg_2" fill="#ffffff" font-size="20" font-family="arial" y="155.962269" x="150.10166">'.$name.'</text>
	// 		 </g>
	// 		</svg>';
	// }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */