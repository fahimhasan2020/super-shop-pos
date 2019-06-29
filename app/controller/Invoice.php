<?php


namespace App;

use Model\Connection;
use Model\Message;
use PDO;

class Invoice extends Connection
{
    public function index(){
        $sqlQuery = "SELECT * FROM `invoice` ORDER BY  `id` DESC";
        $sth = $this->dbh->query($sqlQuery);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $allData=  $sth->fetchAll();
        return $allData;
    }

}