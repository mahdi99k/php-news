<?php
include_once "config/config.php";
checkSession("login.php");   // high security  |   به صورت دستی وارد پنل مدیریت نشه
include_once "config/Admin.php";
$admin = new Admin();


$username = $_POST['username'];
$password = $_POST['password'];
$finalPassword = md5($password);
$finalEndPassword = sha1($finalPassword);
$query = $admin->selectAdmin();

$flag = false;
foreach ($query as $item) {
    if ($item['username'] == $username && $item['password'] == $finalEndPassword) {
        $_SESSION['admin'] = $username;   // مقدار یوزرنیم درون یک سشن به نام ادمین ریخت
        header('location:admin/admin.php');
        $flag = true;
    }
}

if ($flag === false) {
    $_SESSION['wrong'] = "نام کاربری یا کلمه عبور اشتباه می باشد";
    header('location:login.php');

}





//var_dump($finalEndPassword);
