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

$id = $_POST['id'];
$flag = true;


//------------------------------------------------------------------------------- Validation


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
    $query = $news->update($title, $keywords, $author, $description, $bodyNews, $id);
    $_SESSION['update'] = "عملیات به روزرسانی اخبار با موفقیت انجام شد";
    header("location:../show_details_news.php");
}

