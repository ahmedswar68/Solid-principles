<?php

namespace SOLID\SRP;


class Route
{
  /** @var string */
  private $source;
  /** @var string */
  private $destination;
  /** @var int */
  private $distance;

  /**
   * Route constructor.
   * @param string $source
   * @param string $destination
   * @param int $distance
   */
  public function __construct(string $source, string $destination, int $distance)
  {
    $this->setSource($source);
    $this->setDestination($destination);
    $this->setDistance($distance);
  }

  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }

  /**
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }

  /**
   * @return string
   */
  public function getDestination()
  {
    return $this->destination;
  }

  /**
   * @param string $destination
   */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

  /**
   * @return int
   */
  public function getDistance()
  {
    return $this->distance;
  }

  /**
   * @param int $distance
   */
  public function setDistance($distance)
  {
    $this->distance = $distance;
  }

}