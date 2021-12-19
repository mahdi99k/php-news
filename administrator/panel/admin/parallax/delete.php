<?php
include_once "../../config/config.php";
checkSession();
include_once "../../config/Parallax.php";
$parallax = new Parallax();
$id = intval($_POST['id']);      // just number

$imageDelete = $parallax->selectImage($id);
if (file_exists("images/" . $imageDelete['image'])) {
    unlink("images/" . $imageDelete['image']);
}

$parallax->delete($id);
$_SESSION['delete'] = "عملیات حذف اسلایدر با موفقیت انجام شد";
header("Location: ../show_details_parallax.php");







