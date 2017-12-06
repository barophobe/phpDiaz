<?php
class Cars {

	static $wheel_count = 8;


	static function car_detail() {

		return self::$wheel_count;

	}



}


class Truck extends Cars {

	static function display() {

		echo parent::car_detail();

	}
}

Truck::display();

?>