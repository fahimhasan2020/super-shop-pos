<?php
/**
 * Created by PhpStorm.
 * User: fahim
 * Date: 3/24/19
 * Time: 4:28 PM
 */

namespace App;

use Model\Connection as DB;
use PDO;


class Auth extends DB
{
    public $email = "";
    public $password = "";

    public function __construct(){
        parent::__construct();
    }

    public function setData($data = Array()){
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('password', $data)) {
            $this->password = md5($data['password']);
        }
        return $this;
    }

    public function is_exist(){

        $query="SELECT * FROM `user` WHERE `user`.`email` ='$this->email' ";
        $sth=$this->dbh->query($query);

        $sth->setFetchMode(PDO::FETCH_OBJ);
        $sth->fetchAll();

        $count = $sth->rowCount();

        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function is_registered(){
        $query = "SELECT * FROM `user` WHERE `email`='$this->email' AND `password`='$this->password'";
        $sth=$this->dbh->query($query);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $sth->fetchAll();

        $count = $sth->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function logged_in(){
        if ((array_key_exists('email', $_SESSION)) && (!empty($_SESSION['email']))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function log_out(){
        $_SESSION['email']="";
        return TRUE;
    }

}