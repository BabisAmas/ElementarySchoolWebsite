<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24/12/2015
 * Time: 7:50 μμ
 */

namespace controllers;


class DBConnection{

    public  $myconn;
    protected  $hostName = 'localhost';
    protected  $userName = 'root';
    protected  $passCode = '';
    protected  $dbName = '';

    function __construct(){
    }
    public   function dbConnect(){
        $this ->myconn = new mysqli($this->hostName,$this->userName,$this->passCode,$this->dbName);
        if(mysqli_connect_errno()){
            printf("Connection failed: %s \n", mysqli_connect_error());
            exit();
        }
        return $this->myconn;
    }
    public function dbClose(){
        mysqli_close($this->myconn);
    }
}