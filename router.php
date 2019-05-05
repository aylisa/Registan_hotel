<?php

  require_once 'core/Url.php';


  /**
   *
   */
  class Urls extends Url
  {

    public static $urls = array('/',
    "/^room_booking/" => array("Login","as_view" ));

  }


 ?>
