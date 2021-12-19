<?php
include_once "config.php";
include_once "DB.php";

class Seo
{
    private $con;

    public function __construct()
    {
        $connect = new DB();
        $this->con = $connect->getDB();
    }

    public function store($title, $keywords, $description, $author)
    {
        $sqlStatement = "INSERT INTO seo (title , keywords , description , author) values (?,?,?,?)";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $title);
        $sql->bindParam(2, $keywords);
        $sql->bindParam(3, $description);
        $sql->bindParam(4, $author);
        $sql->execute();
    }

    public function selectSeo()
    {
        $sqlStatement = "Select * FROM seo";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        $query = $sql->fetchAll();
        return $query;
    }

    public function deleteSEo($id)
    {
        $sqlStatement = "DELETE FROM seo WHERE id=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $id);
        $sql->execute();
    }


    public function selectLatestSeo()    // از آخر ببه اول بخون
    {
        $sqlStatement = "SELECT * FROM seo ORDER BY id desc limit 1 offset 0";// بیا همه جداول بگیر | براساس آیدی دسته بندی کن و از آخر نمایش | بیا محدود کن یکی نمایش بده(برعکس)
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        return $sql->fetch();     // یکی قرار بگیریم
    }


}












