<?php

class app
{
    public static function init()
    {
        //session_start();
        spl_autoload_register(function ($className){
            require_once "model/" . $className . ".php";
        });
    }

}