<?php
/**
 * Created by PhpStorm.
 * User: by_dingo
 * Date: 09.05.2017
 * Time: 18:52
 */

require_once '../core/FormView.php';
require_once '../core/rendrer.php';
require_once '../apps/Room.php';

class CheckRoom extends FormView
{

    public static function render($parameter = null)
    {
        $rooms = Room::all();
        return $rooms;
    }

    public static function filter($parameter = null){


        $query = array("availability" => 1 );
        $rooms = Room::get($query);

        return $rooms;

    }
}
