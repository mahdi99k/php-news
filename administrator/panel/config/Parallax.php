<?php
include_once "DB.php";
include_once "Image.php";


class Parallax extends Image
{
    private $con;

    public function __construct()
    {
        $connect = new DB();
        $this->con = $connect->getDB();
    }

    //-----------------------------------------  insert

    public function store($title, $description, $image, $alt , $color , $sizeH1)
    {
        $sqlStatement = "INSERT INTO parallax (title , description , image , alt , color , sizeH1) values (?,?,?,?,?,?)";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $title);
        $sql->bindParam(2, $description);
        $sql->bindParam(3, $image);
        $sql->bindParam(4, $alt);
        $sql->bindParam(5, $color);
        $sql->bindParam(6, $sizeH1);
        $sql->execute();
    }

    //-----------------------------------------  select (show all)

    public function select()
    {
        $sqlStatement = "SELECT * FROM parallax";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        return $sql->fetchAll();
    }

    //-----------------------------------------  get id image (for delete image)

    public function selectImage($id)
    {
        $sqlStatement = "SELECT image FROM parallax WHERE id=? ";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $id);
        $sql->execute();
        $query = $sql->fetch();
        return $query;
    }

    //----------------------------------------- delete

    public function delete($id)
    {
        $sqlStatement = "DELETE FROM parallax WHERE id=?";
        $sql = $this->con->prepare($sqlStatement);
        $sql->bindParam(1, $id);
        $sql->execute();
    }

    //----------------------------------------- get end OR latest id

    public function selectLatest()
    {
        $sqlStatement = "SELECT * FROM parallax order by id desc limit 1 offset 0";
        $sql = $this->con->prepare($sqlStatement);
        $sql->execute();
        return $sql->fetch();
    }

    //-----------------------------------------


}






/*public function uploadImage($image)           // method upload image
{
    $image_name = time() . $image['name'];
    $directory = "images/" . $image_name;
    move_uploaded_file($image['tmp_name'], $directory);   // 1) address localhost    2)address new
    return $image_name;
}*/


/*

public function uploadImage($image)           // method upload image
{
   $flag = true;
    $image_name = $image['name'];
    $directory = "images/" . $image_name;
    $fileType = pathinfo($directory , PATHINFO_EXTENSION);     // 1)   png jpg jpeg مسیر دایرکتوری (2     میاد تایید میکنه که درست یا نه و نوع عکس میده تایپ

    if ($fileType !== 'png' && $fileType !== 'jpg' && $fileType !== 'jpeg') {
         $flag = false;
     }
     if ($image['size'] >= 5000000) {
         $flag = false;
     }
    move_uploaded_file($image['tmp_name'], $directory);   // 1) address localhost    2)addess new
    return $image_name;
}

*/