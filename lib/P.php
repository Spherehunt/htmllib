<?php
namespace JonasD\htmllib;

class P extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "p";
  }
}
