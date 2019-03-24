<?php

namespace SOLID\OCP;


abstract class Vehicle implements IVehicle
{
  /** @var Driver $driver */
  private $driver;
  /** @var string $color */
  private $color;
  /** @var int $maxSpeed */
  private $maxSpeed;

  /** @var array $routes */
  private $routes = [];
  /**
   * @var IMove $movable
   */
  private $movable;

  /**
   * @return mixed
   */
  public function getMovable()
  {
    return $this->movable;
  }

  /**
   * @param mixed $movable
   */
  public function setMovable(IMove $movable)
  {
    $this->movable = $movable;
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

  public function getRoutes()
  {
    return $this->routes;
  }

  /**
   * @param Route $route
   */
  public function addRoutes(Route $route)
  {
    $this->routes[] = $route;
  }

  public function move()
  {
    return $this->getMovable()->move();
  }
}