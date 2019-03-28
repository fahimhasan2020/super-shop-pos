<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/25/19
 * Time: 11:24 AM
 */

namespace App;


use Model\Connection;
use PDO;

class User extends Connection
{

    public function index(){

        $sqlQuery = "SELECT * FROM `user` ORDER BY  `id` DESC";

        $sth = $this->dbh->query($sqlQuery);

        $sth->setFetchMode(PDO::FETCH_OBJ);

        $allData=  $sth->fetchAll();
        return $allData;


    }// end of index() Method
}