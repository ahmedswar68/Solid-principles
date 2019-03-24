<?php
/**
 * Created by PhpStorm.
 * User: swar
 * Date: 24/03/19
 * Time: 04:57 م
 */

namespace SOLID\OCP;


class FlyingInTheSky implements IMove
{
  public function move()
  {
    return "I'm flying in the sky";
  }
}