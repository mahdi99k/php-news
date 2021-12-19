<?php
// سشن یا همون آتنتیکیشن برای این صفحه نمیذاریم زیرا باید حتما لاگین کرده باشه که در این صورت فقط مدیر میتونه بفرسته برای خودش که کلا کار بیهوده ای
include_once "../../config/Contact.php";
$contact = new Contact();
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];
//------------------------------------------------------------------------------- Validation

/*if ($fullname === "" ||  strlen($fullname) > 100 || strlen($fullname) < 3) {
$flag = false;
$_SESSION['alt'] = "مقدار نام تصویر یا خالی می باشد  یا  بیشتر از 100 کاراکتر می باشد  یا  کمتر از 5 کاراکتر می باشد";
header("Location: ../index");
}*/


if ($fullname === "") {
    echo 1;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
} elseif (strlen($fullname) > 100) {
    echo 2;
    exit;
} elseif (strlen($fullname) < 3) {
    echo 3;
    exit;
}


if ($email === "") {
    echo 4;
    exit;
} elseif (strlen($email) > 100) {
    echo 5;
    exit;
} elseif (strlen($email) < 5) {
    echo 6;
    exit;
}


if ($subject === "") {
    echo 7;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
} elseif (strlen($subject) > 100) {
    echo 8;
    exit;
} elseif (strlen($subject) < 5) {
    echo 9;
    exit;
}


if ($comment === "") {
    echo 10;
    exit;  // برنامه نگه دار نزار ادامه اش اجرا بشه
} elseif (strlen($comment) > 1000) {
    echo 11;
    exit;
} elseif (strlen($comment) < 5) {
    echo 12;
    exit;
}


$contact->store($fullname, $email, $subject, $comment);
echo 20;  // بعد از اتمام کار عدد یک بر میگردونه


//------------------------------------------------------------------------------- Validation


















