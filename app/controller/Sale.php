<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/26/19
 * Time: 1:48 PM
 */

namespace App;


use Model\Connection;
use PDO;
use Model\Message;

class Sale extends Connection
{
    public $id, $saleId, $totalAmount;

    public function setData($postArray){

        if(array_key_exists("id",$postArray))
            $this->id = $postArray["id"];


        if(array_key_exists("sale_id",$postArray))
            $this->saleId = $postArray["sale_id"];


        if(array_key_exists("totalAmount",$postArray))
            $this->totalAmount = $postArray['totalAmount'];


    }// end of setData Method

    public function store(){
        $sqlQuery = "INSERT INTO  sales (product, total) VALUES (?,?)";
        $sth = $this->dbh->prepare( $sqlQuery );
        $dataArray = [ $this->saleId, $this->totalAmount ];
        $status = $sth->execute($dataArray);
        $sqlInvoice = "INSERT INTO  invoice (product, total) VALUES (?,?)";
        $st = $this->dbh->prepare( $sqlInvoice );
        $databaseArray = [ $this->saleId, $this->totalAmount ];
        $crack = $st->execute($databaseArray);
        $sql = "DELETE FROM cart";
        $s = $this->dbh->exec($sql);
    }// end of store() Method

    public function maxId(){
        $sql = "SELECT MAX(id) as bd FROM invoice";
        $sh = $this->dbh->query($sql);
        $sh->setFetchMode(PDO::FETCH_OBJ);
        $single = $sh->fetch();
        
        $sqlQuery = "SELECT * FROM invoice WHERE id=".$single->bd;
        $sth = $this->dbh->query($sqlQuery);

        $sth->setFetchMode(PDO::FETCH_OBJ);

        $oneData=  $sth->fetch();
        return $oneData;

    }
}