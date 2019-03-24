<?php

namespace SOLID\OCP;

class Bus extends Vehicle
{
  /** @var int $doors */
  private $doors;
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


}