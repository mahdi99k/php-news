<?php
session_start();
include_once "config/config.php";
include_once "config/Admin.php";   // comment
$admin = new Admin();             // comment
$query = $admin->selectAdmin();

if (empty($query)) {
    $username = "mahdi";
    $password = "2781366";
    $finalPassword = md5($password);  // sha1()  |  md5()  | base64_encode  |  mcrypt_encrypt کتاب خانه
    $finalEndPassword = sha1($finalPassword);
    $admin->insertAdmin($username, $finalEndPassword);
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه ورود به مدیریت</title>
    <!--  link css  -->
    <!--<link rel="stylesheet" href="< ?php echo URL ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo bootstrap ?>">
    <link rel="stylesheet" href="<?php echo login ?>">
</head>
<body>


<!--  make page login  -->
<section class="container-fluid p-0">
    <section class="row d-flex justify-content-center align-items-center m-0">
        <section class="col-6 text-white text-capitalize bg-secondary mt-5 p-5" style="font-size: 17px">

            <?php if (isset($_SESSION['admin'])): ?>   <!-- نتونه از صفحه پنل مدیریت به صفحه لاگین -->
                <?php header('location:admin/admin.php'); ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['wrong'])) : ?>
                <h5 class="alert alert-danger text-danger text-center"><?php echo $_SESSION['wrong'] ?></h5>
            <?php endif; ?>


            <h3 class="text-warning mb-4">Login</h3>
            <form action="check.php" method="post">

                <section class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" id="username" class="form-control mb-4"
                           placeholder="Please Enter Username...!">
                </section>

                <section class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" class="form-control mb-5"
                           placeholder="Please Enter Password...!">
                </section>

                <section class="form-group">
                    <input type="submit" value="login" class="btn btn-warning text-capitalize font-weight-bold">
                </section>


            </form>
        </section>
    </section>
</section>
<!--  End make page login  -->

<?php $_SESSION['wrong'] = null; ?> <!-- سشن بعد یک بار رفرش از بین بره  |  ('رمز عبور اشتباه','error')session-flash -->

<!--  link js  -->
</body>
</html>