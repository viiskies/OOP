<pre>
<?php

require "vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// require('classes/TransportInterface.php');
// require('classes/Car.php');
// require('classes/ElectricCar.php');

$petro_automobilis = new Car(4, 2, 1500, 1199);
$jono_automobilis = new ElectricCar(3, 2, 300, 550);

// var_dump($petro_automobilis);
// var_dump($jono_automobilis);

$petro_automobilis->go();
$jono_automobilis->go();

// by default
// echo $petro_automobilis->doorCount;



// $petro_automobilis->doorCount = 8;
// echo $petro_automobilis->doorCount;

// $petro_automobilis->go();
// $petro_automobilis->stop();
// $petro_automobilis->getWeight();