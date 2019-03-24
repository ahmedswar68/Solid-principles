<?php

namespace SOLID\OCP;


class Car extends Vehicle implements IVehicle
{
  public function move()
  {
    return "I'm a Car and moving";
  }
}