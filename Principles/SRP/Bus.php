<?php

namespace SOLID\SRP;

class Bus
{
  /** @var Driver $driver */
  private $driver;
  /** @var string $color */
  private $color;
  /** @var int $maxSpeed */
  private $maxSpeed;
  /** @var int $doors */
  private $doors;
  /** @var array $routes */
  private $routes = [];
  /** @var string */
  private $busNumber;

  /**
   * Bus constructor.
   * @param $busNumber
   */
  public function __construct($busNumber)
  {
    $this->setBusNumber($busNumber);
  }

  /**
   * @return string
   */
  public function getBusNumber()
  {
    return $this->busNumber;
  }

  /**
   * @param string $busNumber
   */
  public function setBusNumber($busNumber)
  {
    $this->busNumber = $busNumber;
  }

  /**
   * @return Driver
   */
  public function getDriver()
  {
    return $this->driver;
  }

  /**
   * @param Driver $driver
   */
  public function setDriver($driver)
  {
    $this->driver = $driver;
  }

  /**
   * @return mixed
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * @param mixed $color
   */
  public function setColor($color)
  {
    $this->color = $color;
  }

  /**
   * @return mixed
   */
  public function getMaxSpeed()
  {
    return $this->maxSpeed;
  }

  /**
   * @param mixed $maxSpeed
   */
  public function setMaxSpeed($maxSpeed)
  {
    $this->maxSpeed = $maxSpeed;
  }

  /**
   * @return mixed
   */
  public function getDoors()
  {
    return $this->doors;
  }

  /**
   * @param mixed $doors
   */
  public function setDoors($doors)
  {
    $this->doors = $doors;
  }

  public function getRoutes()
  {
    return $this->routes;
  }

  /**
   * @param Route $route
   */
  public function setRoutes(Route $route)
  {
    $this->routes[] = $route;
  }

  public function driveToRoute($from, $to)
  {

  }

  public function doMaintenance()
  {

  }

  public function move()
  {
    $output = '';
    foreach ($this->getRoutes() as $route) {
//      echo "<pre>";var_dump( $route->getSource());die;
      $output .= "<p>I'm moving now from ".$route->getSource()." to  ".$route->getDestination()." 
                    at maximum seed of ".$this->getMaxSpeed()."
                    with driver ".$this->getDriver()->getName()."</p>";
    }
    return $output;
  }
}