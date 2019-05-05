<?php

  /**
   * Database connector
   */


  class DBConnector
  {

        private $host = "127.0.0.1";
        private $port = "3306";
        private $user = "root";
        private $password = "";
        private $selected_database_name = "hotel";
        private $db;
        private $selected_database;


    function __construct()
    {
      $this->db = mysqli_connect($this->host,$this->user,$this->password);
      $this->selected_database = mysqli_select_db($this->db,$this->selected_database_name);
    }

    public function Instance()
    {
        static $inst = null;
        if ($inst == null) {
          $inst = new DBConnector();
        }
        return $inst;
    }

    public function make_query($query)
    {
      return mysqli_query($this->db, $query);
    }
    public function insert($query)
    {
      if (mysqli_query($this->db, $query)) {
          return true;
        } else {
          return false;
        }
    }

  }



 ?>
