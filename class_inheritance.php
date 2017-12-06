<?php
class Cars {

	var $wheels = 4;


	function greeting() {
		return "Hello";
	}


}
$bmw = new Cars();

Class Trucks extends Cars {
	var $wheels = 18;
}

$tacoma =  new Trucks();
echo $tacoma->wheels;
?>
