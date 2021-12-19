<?php
include_once "DB.php";

class Link
{
    private $con;

    public function __construct()
    {
        $connect = new DB();
        $this->con = $connect->getDB();
    }


    public function store($name_url, $url)
    {
        $sqlStatement = "INSERT INTO link (name_url , url) values (?,?)";   // در دیتابیس مای اسکول اگر از کلمات رزرو شده استفاده کنیم باید درون آکولاد بزاریم تا غیر فعال کنه
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $name_url);
        $sql->bindParam(2, $url);
        $sql->execute();
    }


    public function select()
    {
        $sqlStatement = "SELECT * FROM link";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function delete($id)
    {
        $sqlStatement = "DELETE FROM link WHERE id=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $id);
        $sql->execute();
    }


}