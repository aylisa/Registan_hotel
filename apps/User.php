<?php

  require_once '../core/Model.php';

  /**
   *
   */
  class User extends Model
  {

    public $id;
    public $username;
    public $password;
    public $email;
    public $name;

    public function getId()
    {
       return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
       return $this->username;
    }

    public function getPassword()
    {
           return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }
  }


 ?>
