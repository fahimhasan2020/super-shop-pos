<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/22/19
 * Time: 8:27 PM
 */

namespace Model;


class Utility
{
    public function redirect($url){
        header("Location:$url");

    }

    public static function d($myVar){
        echo  "<pre>";
        var_dump($myVar);
        echo  "</pre>";
    }


    public static function dd($myVar){
        echo  "<pre>";
        var_dump($myVar);
        echo  "</pre>";
        die;
    }


}