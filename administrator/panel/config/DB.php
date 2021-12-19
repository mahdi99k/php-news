<?php

class DB
{
    private $localhost = "localhost";
    private $root = "root";
    private $password = "";
    private $db = "company";
    private $connect;
    private $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //persian
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //warning];
    ];

    public function __construct()
    {
        try {
            $connect = new PDO("mysql:dbname=$this->db;host=$this->localhost", $this->root, $this->password, $this->options);
            $this->connect = $connect;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getDB()
    {
        return $this->connect;
    }

}

$db = new DB();
//var_dump($db->getDB());
