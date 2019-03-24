<?php

namespace SOLID\DIP;


class PasswordReminder
{
  /**
   * @var ConnectionInterface
   */
  private $dbConnection;

  /**
   * PasswordReminder constructor.
   * @param ConnectionInterface $dbConnection
   */
  public function __construct(ConnectionInterface $dbConnection)
  {
    $this->dbConnection = $dbConnection;
  }
}