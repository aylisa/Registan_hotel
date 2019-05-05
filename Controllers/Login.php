<?php

  require_once '../core/FormView.php';
  require_once '../core/rendrer.php';
  require_once '../apps/Authentication.php';

  /**
   *
   */
  class Login extends FormView
  {

    public static function render($parameter = null)
    {

      $username = $_POST["username"];
      $password = $_POST["password"];

      $user_id = Authentication::login($username, $password);
      setcookie("Auth", $user_id, time()+86400*30);
      url("room_booking.html");



    }
  }

 ?>
