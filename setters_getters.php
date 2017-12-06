<?php
class Cars {

	Public $wheel_count = 4;
	Private $door_count = 4;
	Protected $seat_count = 2;

	function get_values() {

	echo $this->door_count;

	}

	function set_values() {

	 $this->door_count= 10;

	}


}
$bmw = new Cars();

echo $bmw->set_values();

echo $bmw->get_values();



?>