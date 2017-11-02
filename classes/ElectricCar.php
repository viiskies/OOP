<?php

class ElectricCar extends Car {
	public $maxRange;
	public $effSpeed;
	public $chargeTime;

	public function charge() {
		echo "Charging...<br>";
		echo "Curretly at 99.99%...<br>";
	}

	public function go() {
		echo 'This electric car is just flying over the road...<br>';
	}
}