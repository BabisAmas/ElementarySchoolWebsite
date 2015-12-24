<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 24/12/2015
 * Time: 6:40 μμ
 */
class User
{
    private $_Username;
    private $_Password;
    private $_isAdmin;


    public function __construct(){
    }

    public function setUsername($Username){
        $this->_Username = $Username;
    }

    public function setPassword($Password){
        $this->_Password = $Password;
    }

    public function getUsername(){
        return $this->_Username;
    }

    public function getPassword(){
        return $this->_Password;
    }

    public function getIsAdmin()
    {
        return $this->_isAdmin;
    }

    public function setIsAdmin($isAdmin)
    {
        $this->_isAdmin = $isAdmin;
    }
}