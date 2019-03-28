<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/5/19
 * Time: 1:16 PM
 */

namespace App;
use Model\Connection;
use Model\Message;
use PDO;

class Authentication extends Connection
{
    public $id, $email, $password, $phoneNumber;

    public function setData($postArray){

        if(array_key_exists("id",$postArray))
            $this->id = $postArray["id"];


        if(array_key_exists("register",$postArray))
            $this->email = $postArray["register"];


        if(array_key_exists("login",$postArray))
            $this->email = $postArray["login"];


        if(array_key_exists("password",$postArray))
            $this->password = md5($postArray["password"]);


        if(array_key_exists("phone_number",$postArray))
            $this->phoneNumber = $postArray["phone_number"];

    }// end of setData Method

    public function store(){
        $sqlQuery = "INSERT INTO `user` (email, password , phone_number)  VALUES ( ?, ?, ?)";
        $sth = $this->dbh->prepare($sqlQuery);
        $dataArray = [ $this->email, $this->password, $this->phoneNumber];
        $status = $sth->execute($dataArray);
        if($status)
            Message::message("Success! Data has been inserted successfully<br>");
        else
            Message::message( "Failed! Data has not been inserted<br>");

    }// end of store() Method
}