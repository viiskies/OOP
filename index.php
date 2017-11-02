<?php
$start = microtime(true);

require "vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// Application 
$db = new Database();

print_r($db->select(
	"SELECT * FROM users WHERE username = :username", 
	["username" => 'matas'])
);

echo $db->insert("INSERT INTO users (name, username, password) VALUES (:name, :username, :password)", 
	[
	"name" => 'king-' . rand(1000,9999),
	"username" => 'king',
	"password" => password_hash('labas', PASSWORD_DEFAULT)
	]
);

// require('classes/TransportInterface.php');
// require('classes/Car.php');
// require('classes/ElectricCar.php');

// $petro_automobilis = new Car(4, 2, 1500, 1199);
// $jono_automobilis = new ElectricCar(3, 2, 300, 550);

// // var_dump($petro_automobilis);
// // var_dump($jono_automobilis);

// $petro_automobilis->go();
// $jono_automobilis->go();

// by default
// echo $petro_automobilis->doorCount;



// $petro_automobilis->doorCount = 8;
// echo $petro_automobilis->doorCount;

// $petro_automobilis->go();
// $petro_automobilis->stop();
// $petro_automobilis->getWeight();

echo '<div style="position: absolute; left: 0px; bottom: 0px; background-color: green; padding: 10px;">';
echo round((microtime(true) - $start) * 1000, 2) . "ms <br>";
echo " & " . round(memory_get_peak_usage()/(1024*1024), 2) . " MB";
echo '</div>';
?>