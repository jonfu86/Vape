<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clouds extends Welcome {

	// public $name;

	// public function __construct($name)
	// {
	// 	$this->name = $name;
		
	// }

	
	public function create_cloud($name)
	{
		echo '<object type="image/svg+xml" data="assets/img/mycloud.svg">Your browser does not support SVG</object><p>this is'.$name.'</p>';
	}
	
}
// class Main_Cloud extends Clouds{

	

// }