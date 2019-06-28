<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/26/19
 * Time: 12:12 AM
 */

namespace App;


use Model\Connection;
use Model\Message;
use PDO;

class Cart extends Connection
{
    public $id, $productId, $name, $price, $quantity;

    public function setData($postArray){

        if(array_key_exists("id",$postArray))
            $this->id = $postArray["id"];

        if(array_key_exists("product_id",$postArray))
            $this->productId = $postArray["product_id"];


        if(array_key_exists("name",$postArray))
            $this->name = $postArray["name"];


        if(array_key_exists("cart_price",$postArray))
            $this->price = $postArray["cart_price"];


        if(array_key_exists("quantity",$postArray))
            $this->quantity = md5($postArray["quantity"]);

    }// end of setData Method

    public function store(){
        $sqlQuery = "INSERT INTO cart (product_id, name, price )  VALUES ( ?,?,?)";
        $sth = $this->dbh->prepare( $sqlQuery );
        $dataArray = [ $this->productId, $this->name, $this->price];
        $status = $sth->execute($dataArray);
        if($status)
            Message::message("Success! Data has been inserted successfully<br>");
        else
            Message::message( "Failed! Data has not been inserted<br>");

    }// end of store() Method

    public function index(){
        $sqlQuery = "SELECT * FROM `cart` ORDER BY  `id` DESC";

        $sth = $this->dbh->query($sqlQuery);

        $sth->setFetchMode(PDO::FETCH_OBJ);

        $allData=  $sth->fetchAll();
        return $allData;
    }

    public function totalPrice(){
        $sqlQuery = "SELECT SUM(price) as total FROM `cart`";

        $sth = $this->dbh->query($sqlQuery);

        $sth->setFetchMode(PDO::FETCH_OBJ);

        $allData=  $sth->fetchAll();
        return $allData;
    }
}