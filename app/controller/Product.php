<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/25/19
 * Time: 12:30 PM
 */

namespace App;


use Model\Connection;
use PDO;
use Model\Message;
use Model\Utility;

class Product extends Connection
{
    public $id, $photo, $name, $price, $quantity;

    public function setData($postArray){

        if(array_key_exists("id",$postArray))
            $this->id = $postArray["id"];


        if(array_key_exists("product_photo",$postArray))
            $this->photo = $postArray["product_photo"];


        if(array_key_exists("name",$postArray))
            $this->name = $postArray["name"];


        if(array_key_exists("price",$postArray))
            $this->price = $postArray["price"];

        if(array_key_exists("product_quantity_update",$postArray))
            $this->quantity = $postArray["product_quantity_update"];


    }// end of setData Method

    public function store(){

        $sqlQuery = "INSERT INTO products (name, photo, price) VALUES (?,?,?)";
        $sth = $this->dbh->prepare( $sqlQuery );
        $dataArray = [ $this->name, $this->photo, $this->price ];
        $status = $sth->execute($dataArray);
        if($status)
            Message::message("Success! Data has been inserted successfully<br>");
        else
            Message::message( "Failed! Data has not been inserted<br>");

    }// end of store() Method


    public function index(){
    $sqlQuery = "SELECT * FROM `products` ORDER BY  `id` DESC";

    $sth = $this->dbh->query($sqlQuery);

    $sth->setFetchMode(PDO::FETCH_OBJ);

    $allData=  $sth->fetchAll();
    return $allData;
    }

    public function quantityUpdate(){
        $sqlQuery = "UPDATE `products` SET quantity=? WHERE `products`.`id`=".$this->id;
        $sth = $this->dbh->prepare( $sqlQuery );
        $dataArray = [ $this->quantity];
        $status = $sth->execute($dataArray);
        if($status)

            Message::message("Success! Data has been updated successfully<br>");
        else
            Message::message("Failed! Data has not been updated<br>");


    }
}