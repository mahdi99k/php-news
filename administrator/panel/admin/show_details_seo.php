<?php
include_once "../config/config.php";
checkSession();   // high security  |   به صورت دستی وارد پنل مدیریت نشه
include_once "../config/Seo.php";
$seo = new Seo();
$query = $seo->selectSeo();
echo  json_encode($query, JSON_UNESCAPED_UNICODE);   // string To -> Json   | 256  JSON_UNESCAPED_UNICODE -> language persian







