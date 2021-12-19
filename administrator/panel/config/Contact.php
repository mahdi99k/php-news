<?php
include_once "DB.php";


class Contact
{

    private $con;

    public function __construct()
    {
        $connect = new DB();
        $this->con = $connect->getDB();
    }


    public function store($fullname, $email, $subject, $comment)
    {
        $sqlStatement = "INSERT INTO contact (fullname , email , subject , comment) values (?,?,?,?)";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $fullname);
        $sql->bindParam(2, $email);
        $sql->bindParam(3, $subject);
        $sql->bindParam(4, $comment);
        $sql->execute();
    }


    public function select()
    {
        $sqlStatement = "SELECT * FROM contact";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        $query = $sql->fetchAll();
        return $query;
    }


    public function delete($id)
    {
        $sqlStatement = "DELETE FROM contact WHERE id=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $id);
        $sql->execute();
    }


}