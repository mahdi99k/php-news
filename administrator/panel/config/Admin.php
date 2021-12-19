<?php
include_once "DB.php";

class Admin
{
    private $con;

    public function __construct()
    {
        $content = new DB;
        $this->con = $content->getDB();
    }


    public function insertAdmin($username, $password)
    {
        $sqlStatement = "INSERT INTO admin(username , password) values (?,?)";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $username);
        $sql->bindParam(2, $password);
        $sql->execute();
    }


    public function selectAdmin()
    {
        $sqlStatement = "SELECT * FROM admin";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        return $sql->fetchAll();

    }


}