<?php

class Url
{
  public static $urls = array("/",);
  public static function check($url)
  {
      foreach (static::$urls as $pattern => $func) {
          preg_match("$pattern", $url) ? $func($url) : false;
      }
  }
}

 ?>
