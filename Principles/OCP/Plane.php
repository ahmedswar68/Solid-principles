<?php

namespace SOLID\OCP;


class Plane extends Vehicle implements IVehicle
{
  public function move()
  {
    return "I'm a Plane and flying";
  }
}