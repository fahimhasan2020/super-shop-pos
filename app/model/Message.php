<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/22/19
 * Time: 8:20 PM
 */

namespace Model;
if(!isset($_SESSION)) session_start();


class Message
{
    public static function setMessage($msg){

        $_SESSION['message'] = $msg;
    }

    public static function getMessage(){

        $temp =   $_SESSION['message'] ;
        $_SESSION['message'] = "";

        return $temp;
    }


    public static function message($msg=NULL){

        if(is_null($msg))
            return  self::getMessage();
        else
            self::setMessage($msg);

    }

}