<?php
/**
 * Created by PhpStorm.
 * User: swar
 * Date: 24/03/19
 * Time: 10:18 م
 */

namespace SOLID\ISP;


interface Entertainment
{
  public function playMusic();
  public function pause();
  public function rewind();

}