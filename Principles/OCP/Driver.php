<?php

namespace SOLID\OCP;


class Driver
{
  /** @var string */
  private $name;
  /** @var int */
  private $age;
  /** @var string */
  private $insuranceNumber;
  /** @var string */
  private $address;

  /**
   * Driver constructor.
   * @param string $name
   * @param int $age
   * @param string $address
   * @param string $insuranceNumber
   */
  public function __construct( $name,  $age,  $address,  $insuranceNumber)
  {
    $this->setName($name);
    $this->setAge($age);
    $this->setAddress($address);
    $this->setInsuranceNumber($insuranceNumber);
  }

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @return int
   */
  public function getAge()
  {
    return $this->age;
  }

  /**
   * @param int $age
   */
  public function setAge($age)
  {
    $this->age = $age;
  }

  /**
   * @return string
   */
  public function getInsuranceNumber()
  {
    return $this->insureanceNumber;
  }

  /**
   * @param string $insureanceNumber
   */
  public function setInsuranceNumber($insuranceNumber)
  {
    $this->insuranceNumber = $insuranceNumber;
  }

  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }

}