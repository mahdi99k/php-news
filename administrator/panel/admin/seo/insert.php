<?php
include_once "../../config/Seo.php";
$seo = new Seo();

$title = $_POST['title'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$author = $_POST['author'];

/*if ($title == "" || strlen($title) > 100 || strlen($title) < 3) {
    echo 1;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
}*/

if ($title == "") {
    echo 1;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
} elseif (strlen($title) > 100) {
    echo 2;
    exit;
} elseif (strlen($title) < 3) {
    echo 3;
    exit;
}


if ($keywords == "") {
    echo 4;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
} elseif (strlen($keywords) > 500) {
    echo 5;
    exit;
} elseif (strlen($keywords) < 5) {
    echo 6;
    exit;
}


if ($description == "") {
    echo 7;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
} elseif (strlen($description) > 500) {
    echo 8;
    exit;
} elseif (strlen($description) < 5) {
    echo 9;
    exit;
}

if ($author == "") {
    echo 10;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
} elseif (strlen($author) > 100) {
    echo 11;
    exit;
} elseif (strlen($author) < 3) {
    echo 12;
    exit;
}

$seo->store($title, $keywords, $description, $author);
echo 20;  // بعد از اتمام کار عدد یک بر میگردونه








