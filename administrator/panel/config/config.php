<?php

// const variable and other address bootstrap , jquery , ...
define("URL", "http://localhost:2000");

// adress css login
define("login", "http://localhost:2000/administrator/panel/css/login.css");

// address css admin
define("admin", "http://localhost:2000/administrator/panel/css/admin.css");

// address bootstrap css
define("bootstrap", "http://localhost:2000/node_modules/bootstrap/dist/css/bootstrap.min.css");

// address jquery
define("jquery", "http://localhost:2000/node_modules/jquery/dist/jquery.min.js");

// address bootstrap js
define('bootstrapJs', "http://localhost:2000/node_modules/bootstrap/dist/js/bootstrap.min.js");

// address bootstrap bundle js   |  هندل کردن فایل های جاوا اسکریپت
define("bootstrapBundelJs", "http://localhost:2000/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js");

// toast min.css  ,  min.js
define('toastCss' , 'http://localhost:2000/node_modules/jquery-toast-plugin/dist/jquery.toast.min.css');
define('toastJS' , 'http://localhost:2000/node_modules/jquery-toast-plugin/dist/jquery.toast.min.js');


define("ckeditorJs" , 'http://localhost:2000/node_modules/ckeditor4/ckeditor.js');
define("ckeditorJquery" , 'http://localhost:2000/node_modules/ckeditor4/adapters/jquery.js');

define("swiperCss" , 'http://localhost:2000/node_modules/swiper/swiper-bundle.min.css');

//****************************************  function  ***************************************************/

// session and check session admin
function checkSession()
{
    session_start();
    if (!isset($_SESSION['admin'])) {                    // high security  |   به صورت دستی وارد پنل مدیریت نشه
        header("Location:../login.php");
    };
}

//



