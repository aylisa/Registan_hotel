<?php
ob_start();
abstract class View
{
    public static $model;
    public static $template_name;
    public static function as_view($url)
    {
        header("LOCATION: $url");
    }
    abstract public static function render($parameter = null);
}
?>
