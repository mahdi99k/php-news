<?php
include_once "../../config/Seo.php";
$seo = new Seo();
$id = $_POST['id'];
$seo->deleteSEo($id);
echo 1;    // successful delete


