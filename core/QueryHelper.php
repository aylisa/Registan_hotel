<?php

  /**
   * Query Helper
   */
  class QueryHelper
  {

    function properties()
    {
      $columns = "";
      $values = "";
      $map = get_object_vars($this);
      unset($map["id"]);
      $count = count($map);
      $i = 0;
        foreach ($map as $key => $value) {
            if ($i != $count - 1) {
                $columns .= "$key,";
                $values .= "'$value',";
            } else {
                $columns .= "$key";
                $values .= "'$value'";
            }
            $i++;
        }
        return array("columns" => $columns, "values" => $values);
    }


    static function get_query(array $args)
    {
            $query = "";
            $count = count($args);
            $i = 0;
            foreach ($args as $key => $value) {
                if ($i != $count - 1) {
                    $query .= "BINARY $key='$value' and ";
                } else {
                    $query .= "BINARY $key='$value'";
                }
                $i++;
            }
            return $query;
      }


      static function reverse_get_query(array $args)
      {
            $query = "";
            $count = count($args);
            $i = 0;
            foreach ($args as $key => $value) {
                if ($i != $count - 1) {
                    $query .= "NOT BINARY $key='$value' and ";
                } else {
                    $query .= "NOT BINARY $key='$value'";
                }
                $i++;
            }
        return $query;
      }
        function get_update_query()
        {
            $query = "";
            $map = get_object_vars($this);
            unset($map["id"]);
            $count = count($map);
            $i = 0;
            foreach ($map as $key => $value) {
                if ($i != $count - 1) {
                    $query .= "$key='$value',";
                } else {
                    $query .= "$key='$value'";
                }
                $i++;
            }
            return $query;
        }

  }


 ?>
