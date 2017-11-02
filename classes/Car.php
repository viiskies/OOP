<?php 
// require('classes/TransportInterface.php');
class Car implements TransportInterface {

	//attributes
	private $wheelCount;
	private $doorCount;
	public $weight;
	public $engineVolume;

	function __construct(int $wheelCount, int $doorCount, int $weight, int $engineVolume) {
		$this->wheelCount = $wheelCount;
		$this->doorCount = $doorCount;
		$this->weight = $weight;
		$this->engineVolume = $engineVolume;

		echo 'New car was created.<br>';
	}

	//methods
	function __get($parameter) {
		return $this->$parameter;
	}

	function __set($parameter, $value) {
		// echo "Someone is changing $parameter to $value<br>";
		// if($parameter == 'doorCount' && $value > 5) {
		// 	echo 'This car has too many doors, but oh well...<br>';
		// 	$this->doorCount = $value;
		// }

		$this->$parameter = $value;

		// return $this->$parameter;
	}

	function __toString() {
		return "This is the car!<br>";
	}	

	function __destruct() {
		echo "This car is done!<br>";
	}

	public function getWheels() {
		return $this->wheelCount;
	}

	public function go() {
		echo 'This car is going...<br>';
	}

	public function stop() {
		echo 'This car stopped.<br>';
	}

	public function getWeight() {
		echo 'Weight is ' . $this->weight;
	}	

	public function break() {
		echo 'This car is broken';
	}

}