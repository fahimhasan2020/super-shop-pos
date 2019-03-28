<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/22/19
 * Time: 8:14 PM
 */

namespace Model;

use PDO;
use PDOException;


class Connection
{
    protected $dbh;
    public function __construct()
    {
        try{
            $this->dbh = new PDO("mysql:host=127.0.0.1;dbname=iiuc_pos", "root", "");
            $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            // echo "Database Connection Successful!<br>";
        }
        catch (PDOException $error){
            echo $error;
            // echo  $error->getMessage();
        }
    }
}