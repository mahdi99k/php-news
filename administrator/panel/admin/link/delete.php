<?php
include_once "../../config/config.php";
checkSession();
include_once "../../config/Link.php";
$link = new Link();
$id = intval($_POST['id']);
$link->delete($id);
$_SESSION['delete'] = "عملیات حذف لینک مرتبط با موفقت انجام شد";
header('location: ../show_details_link.php');

