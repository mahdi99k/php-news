<?php
include_once "config/config.php";
checkSession('login.php');  // high security  |  به صورت دستی وارد پنل نشد

//session_unset();                                         // delete session
//session_destroy();                                     // delete session
$_SESSION['admin'] = null;                           //  delete session Single (login)
$_SESSION['wrong'] = null;                          //  delete session single (alert)
header('location:login.php');
