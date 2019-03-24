<?php

namespace SOLID\OCP;

class Trip
{
  /** @var IVehicle $vehicle */
  private $vehicle;
  /** @var string $tripNumber */
  private $tripNumber;
  /** @var float $price */
  private $price;
  /** @var int $duration */
  private $duration;

  public function __construct(IVehicle $vehicle, $tripNumber, $price, $duration)
  {
    $this->setVehicle($vehicle);
    $this->setTripNumber($tripNumber);
    $this->setPrice($price);
    $this->setDuration($duration);
  }

  /**
   * @return IVehicle
   */
  public function getVehicle()
  {
    return $this->vehicle;
  }

  /**
   * @param IVehicle $vehicle
   */
  public function setVehicle(IVehicle $vehicle)
  {
    $this->vehicle = $vehicle;
  }

  /**
   * @return string
   */
  public function getTripNumber()
  {
    return $this->tripNumber;
  }

  /**
   * @param string $tripNumber
   */
  public function setTripNumber($tripNumber)
  {
    $this->tripNumber = $tripNumber;
  }

  /**
   * @return float
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * @param float $price
   */
  public function setPrice($price)
  {
    $this->price = $price;
  }

  /**
   * @return int
   */
  public function getDuration()
  {
    return $this->duration;
  }

  /**
   * @param int $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  public function move()
  {
    return $this->vehicle->move();
  }
}