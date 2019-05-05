<?php

require_once 'User.php';

/**
 *
 */
class Authentication extends Model
{

  function login($username, $password)
  {
    $args = array('username' => $username, 'password' => $password);
    $user = User::get($args);

    if ($user == null) {
      throw new InvalidArgumentException("User name or password is incorrect");
    }

    return $user->id;

  }

  static function create($id, $session)
  {
      $instance = new self();
      $instance->user = $id;
      $instance->session = $session;
      return $instance;
  }

  private static function check($id)
  {
      $user = Authentication::get(array("user" => $id));
      return $user;
  }


}


 ?>
