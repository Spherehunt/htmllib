<?php
namespace JonasD\htmllib;

class Nav extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "nav";
  }
}
