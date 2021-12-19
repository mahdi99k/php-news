<?php
include_once "../../config/config.php";
checkSession();      // high security  |   به صورت دستی وارد پنل مدیریت نشه
include_once "../../config/Parallax.php";
$parallax = new Parallax();


$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$image_name = $parallax->uploadImage($image);
$alt = $_POST['alt'];
$color = $_POST['color'];
$sizeH1 = $_POST['sizeH1'];
$flag = true;

//------------------------------------------------------------------------------- Validation

/*  start validation in php   */
if ($title === "" || strlen($title) > 100 || strlen($title) < 5) {
    $flag = false;
    $_SESSION['title'] = "مقدار عنوان یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("Location: ../create_parallax.php"); // بر میگرده به همین صفحه فرم  |  /.. برای این که از صفحه insert.php بیاد تو صفحه create_parallax.php فرم
}


if ($description === "" || strlen($description) > 1000 || strlen($description) < 5) {
    $flag = false;
    $_SESSION['description'] = "مقدار توضیحات یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("Location: ../create_parallax.php");
}


$extension = pathinfo($image['name'], PATHINFO_EXTENSION);    // type image (png,jpg,jpeg)

if (empty($image['name']) || $image['size'] > 5000000 || ($extension !== "png" && $extension !== "PNG" && $extension !== "jpg"
        && $extension !== "jpeg")) { // میاد کل and  یکی در نظر میگیره
    $flag = false;
    $_SESSION['image'] = "نمی باشد png , jpg , jprg عکس یا خالی می باشد  یا  بیشتر از 5 مگابایت می باشد  یا  فرمت ";
    header("Location: ../create_parallax.php");
}


if ($alt === "" || strlen($alt) > 100 || strlen($alt) < 5) {
    $flag = false;
    $_SESSION['alt'] = "مقدار نام تصویر یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("Location: ../create_parallax.php");
}

if ($color === "" || strlen($color) > 50 || strlen($color) < 3) {
    $flag = false;
    $_SESSION['color'] = "مقدار رنگ متن یا خالی می باشد  یا  بیشتر از 50 کاراکتر می باشد  یا  کمتر از 3 کاراکتر می باشد";
    header("Location: ../create_parallax.php");
}

if ($sizeH1 === "" || is_int($sizeH1)) {
    $flag = false;
    $_SESSION['sizeH1'] = "مقدار سایز متن یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
    header("Location: ../create_parallax.php");
}


if ($flag == true) {
    $parallax->store($title, $description, $image_name, $alt , $color , $sizeH1);
    $_SESSION['create'] = "عملیات ساخت دیتا با موفقیت انجام شد";
}
header("Location:../create_parallax.php");


/*
if (!empty($title && $description && $image_name && $alt)) {            // code me  راه دوم    |  $flag=true;
    $parallax->store($title, $description, $image_name, $alt);
    $_SESSION['create'] = "عملیات ساخت  دیتا با موفقیت انجام شد";
}
header("Location:../create_parallax.php");

*/
