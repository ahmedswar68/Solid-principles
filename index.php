<?php


/**              to run SRP and OCP Principles
use SOLID\OCP\Route;
use SOLID\OCP\Driver;
use SOLID\OCP\Bus;
use SOLID\OCP\Ship;
use SOLID\OCP\Trip;
use SOLID\OCP\MoveOnRoads;
use SOLID\OCP\MoveOverWaves;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$route1 = new Route('Cairo', 'Giza', 15);
$route2 = new Route('Cairo', 'Alex', 200);

$driver = new Driver('Swar', 27, 'Giza', '123ABC');

$bus = new Bus('120');

$bus->setColor('red');
$bus->setDriver($driver);
$bus->setMaxSpeed(180);
$bus->addRoutes($route1);
$bus->addRoutes($route2);



$bus->setMovable(new MoveOnRoads());
$trip = new Trip($bus, 'XYZ123', 2536.00, 120);
echo $trip->move();
*/