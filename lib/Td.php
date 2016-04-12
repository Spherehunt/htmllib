<?php
namespace JonasD\htmllib;

class Td extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "Td";
  }
}
