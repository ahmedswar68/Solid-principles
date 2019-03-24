<?php

namespace SOLID\LSP;


class Rectangle
{
  protected $width;
  protected $height;

  /**
   * @return mixed
   */
  public function getWidth()
  {
    return $this->width;
  }

  /**
   * @param mixed $width
   */
  public function setWidth($width)
  {
    $this->width = $width;
  }

  /**
   * @return mixed
   */
  public function getHeight()
  {
    return $this->height;
  }

  /**
   * @param mixed $height
   */
  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function calculateArea()
  {
    return $this->getWidth() * $this->getHeight();
  }
}