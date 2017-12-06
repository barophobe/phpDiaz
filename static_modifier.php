<?php
class Cars {

	static $wheel_count = 4;
	static $door_count = 4;
	static $seat_count = 2;


	function car_detail() {
	echo $this->wheel_count;
	echo $this->door_count;
	echo $this->seat_count;
	}

	static function car_details() {
		echo Cars::$wheel_count;
		echo Cars::$door_count;
		echo Cars::$seat_count;
	}


}
$bmw = new Cars();
echo Cars::$door_count;

Cars::car_details();

?>