<?php
include_once "DB.php";


class News
{
    private $con;

    public function __construct()
    {
        $connect = new DB();
        $this->con = $connect->getDB();
    }


    public function store($title, $keywords, $author, $description, $bodyNews)
    {
        $sqlStatement = "INSERT INTO news(title, keywords, author ,description, bodyNews) values (?,?,?,?,?)";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $title);
        $sql->bindParam(2, $keywords);
        $sql->bindParam(3, $author);
        $sql->bindParam(4, $description);
        $sql->bindParam(5, $bodyNews);
        $sql->execute();
    }


    public function select()
    {
        $sqlStatement = "SELECT * FROM news";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        $query = $sql->fetchAll();
        return $query;
    }

    public function delete($id)
    {
        $sqlStatement = "DELETE FROM news WHERE id=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $id);
        $sql->execute();
    }


    public function selectId($id)                  /*  گرفتن آیدی یک خبر در قسمت آپدیت  */
    {
        $sqlStatement = "SELECT * FROM news WHERE id=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $id);
        $sql->execute();
        $query = $sql->fetch();
        return $query;
    }

    public function update($title, $keywords, $author, $description, $bodyNews, $id)
    {
        $sqlStatement = "UPDATE news SET title=?, keywords=?, author=? ,description=?, bodyNews=? WHERE id=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $title);
        $sql->bindParam(2, $keywords);
        $sql->bindParam(3, $author);
        $sql->bindParam(4, $description);
        $sql->bindParam(5, $bodyNews);
        $sql->bindParam(6, $id);
        $sql->execute();
    }


    public function selectLimit($limit  , $offset)         // گرفتن دیتا آخر دست ادمین که چند تا بگیره و از کجا شروع شع
    {
        $sqlStatement = "SELECT * FROM news ORDER By id desc limit $limit offset $offset";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        return $sql->fetchAll();  // چند مورد
    }


    public function searchTitle($title)     /* تمامی مقادیر جدول میگیره اول بعد قسمت عنوان میخواد پاس بده به صفحه اخبار تکی */
    {
        $sqlStatement = "SELECT * FROM news WHERE title=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1,$title);
        $sql->execute();
        return $sql->fetch();
    }


}