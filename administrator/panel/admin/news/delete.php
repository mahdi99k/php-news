<?php
include_once "../../config/config.php";
checkSession();
include_once "../../config/News.php";
$query = new News();

$id = intval($_POST['id']);
$query->delete($id);
$_SESSION['delete'] = "عملیات حذف اخبار با موفقیت انجام شد";
header("location:../show_details_news.php");










