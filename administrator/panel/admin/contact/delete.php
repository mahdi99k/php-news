<?php
include_once "../../config/config.php";
checkSession();
include_once "../../config/Contact.php";
$contact = new Contact();
$id = intval($_POST['id']);      // just number


$contact->delete($id);
$_SESSION['delete'] = "عملیات حذف کامنت با موفقیت انجام شد";
header("location: ../show_details_contact.php");      /* باید یک خونه بیاد بیرون تا بتونه صفحه نمایش نظرات کاربران ببینه مستقیما */

