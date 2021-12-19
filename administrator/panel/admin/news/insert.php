<?php
include_once "../../config/config.php";
checkSession('../../login.php');        // high security  |   به صورت دستی وارد پنل مدیریت نشه
include_once "../../config/News.php";
$news = new News();

$title = $_POST['title'];
$keywords = $_POST['keywords'];
$author = $_POST['author'];
$description = $_POST['description'];
$bodyNews = $_POST['bodyNews'];
$titleUnique = $news->select();               // تمام موارد داخل دیتا درونش دارد
$flag = true;


//------------------------------------------------------------------------------- Validation


for ($i = 0; $i < count($titleUnique); $i++) {             // sizeof()  ===  count() بهتر
    if ($title === $titleUnique[$i]['title']) {
        $flag = false;
        $_SESSION['title_unique'] = "مقدار عنوان تکراری می باشد, لطفا یک مقدار جدید وارد نمایید";
        header("Location: ../create_news.php");
    }
}


if ($title === "" || strlen($title) > 100 || strlen($title) < 5) {
    $flag = false;
    $_SESSION['title'] = "مقدار عنوان  یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("Location: ../create_news.php");// بر میگرده به همین صفحه فرم  |  /.. برای این که از صفحه insert.php بیاد تو صفحه create_news.php فرم
}


if ($keywords === "" || strlen($keywords) > 500 || strlen($keywords) < 5) {
    $flag = false;
    $_SESSION['keywords'] = "مقدار کلمات کلیدی سئو یا خالی می باشد  یا  بیشتر از 500 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("Location: ../create_news.php");
}


if ($author === "" || strlen($author) > 100 || strlen($author) < 3) {
    $flag = false;
    $_SESSION['author'] = "مقدار نام نویسنده سئو یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 3 کاراکتر می باشد";
    header("Location: ../create_news.php");
}


if ($description === "" || strlen($description) > 500 || strlen($description) < 5) {
    $flag = false;
    $_SESSION['description'] = "مقدار توضیحات سئو یا خالی می باشد  یا  بیشتر از 500 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("Location: ../create_news.php");
}


if ($bodyNews === "" || strlen($bodyNews) > 1500 || strlen($bodyNews) < 4) {
    $flag = false;
    $_SESSION['bodyNews'] = "مقدار توضیحات اخبار یا خالی می باشد  یا  بیشتر از 1500 کاراکتر می باشد  یا  کمتر از 4 کاراکتر می باشد";
    header("Location: ../create_news.php");
}


//------------------------------------------------------------------------------- Validation


if ($flag === true) {
    $news->store($title , $keywords, $author, $description, $bodyNews);
    $_SESSION['create'] = "عملیات ساخت اخبار با موفقیت انجام شد";
}
header("Location:../create_news.php");


/*
if (!empty($title && $keywords && $author && $description && $bodyNews)) {     // code me  راه دوم  |  $flag=true;\
    $news->store($title, $keywords, $author, $description, $bodyNews);
    $_SESSION['create'] = "عملیات ساخت اخبار با موفقیت انجام شد";
}
header("Location:../create_news.php");*/








