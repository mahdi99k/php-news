<?php
include_once "../../config/config.php";
checkSession();
include_once "../../config/Link.php";
$link = new Link();
$name_url = $_POST['name_url'];
$url = $_POST['url'];
$urlUnique = $link->select();
$flag = true;





//------------------------------------------------------------------------------- Validation


for ($i = 0; $i < count($urlUnique); $i++) {             // sizeof()  ===  count() بهتر
    if ($url === $urlUnique[$i]['url']) {
        $flag = false;
        $_SESSION['urlUnique'] = "مقدار آدرس اینترنتی تکراری می باشد, لطفا یک مقدار جدید وارد نمایید";
        header("location: ../create_link.php");
    }
}


if ($name_url === "" || strlen($name_url) > 100 || strlen($name_url) < 4) {
    $flag = false;
    $_SESSION['name_url'] = "مقدار نام آدرس اینترنتی  یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 4 کاراکتر می باشد";
    header("location: ../create_link.php");// بر میگرده به همین صفحه فرم | /.. برای این که از صفحه insert.php بیاد تو صفحه create_news.php فرم
}


if ($url === "" || strlen($url) > 100 || strlen($url) < 5) {
    $flag = false;
    $_SESSION['url'] = "مقدار آدرس اینترنتی یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("location: ../create_link.php");
}



//------------------------------------------------------------------------------- Validation


if ($flag === true) {
    $link->store($name_url , $url);
    $_SESSION['create'] = "عملیات ساخت لینک های مرتبط با موفقیت انجام شد";
}
header("location: ../create_link.php");


/*
if (!empty($title && $keywords && $author && $description && $bodyNews)) {     // code me  راه دوم  |  $flag=true;\
    $news->store($title, $keywords, $author, $description, $bodyNews);
    $_SESSION['create'] = "عملیات ساخت اخبار با موفقیت انجام شد";
}
header("Location:../create_news.php");*/





