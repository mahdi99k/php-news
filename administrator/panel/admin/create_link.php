<?php
include_once "../config/config.php";
checkSession();   // high security | به صورت دستی وارد پنل مدیریت نشه
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدیریت</title>
    <!--  link css -->
    <link rel="stylesheet" type="text/css" href="<?php echo bootstrap ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo toastCss ?>"/>
</head>
<body>


<!--  make template  -->
<section class="container-fluid p-0">

    <!--  menu  -->
    <?php include_once "_menu.php"; ?>
    <!--  end menu  -->

    <!--   container  -->
    <section class="data">


        <section class="row m-0">


            <?php if (isset($_SESSION['name_url'])) : ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['name_url'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>

            <?php if (isset($_SESSION['url'])) : ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['url'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>


            <?php if (isset($_SESSION['urlUnique'])) : ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['urlUnique'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>



            <?php if (isset($_SESSION['create'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-success">
                        <h6 class="text-center p-1"><?php echo $_SESSION['create'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>


        </section>


        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary form_cus  mt-5">
                <h3 class="text-center" style="color: #ff5f5f">صفحه مربوط به ساخت لینک های مرتبط</h3>
                <form action="link/insert.php" method="post" class="input_cu text-right">


                    <section class="form-group">
                        <label for="name_url">نام آدرس اینترنتی</label>
                        <input type="text" name="name_url" id="name_url" class="form-control mb-4 mt-1"
                               placeholder="لطفا نام آدرس اینترنتی را وارد نمایید">
                    </section>


                    <section class="form-group">
                        <label for="url">آدرس اینترنتی</label>
                        <textarea name="url" id="url" class="form-control mb-4"
                                  placeholder="لطفا یک آدرس اینترنتی برای لینک خود وارد نمایید"
                                  style="resize: none;height: 130px"></textarea>
                    </section>

                    <section class="form-group">
                        <input type="submit" value="ثبت" class="btn btn-success btn-block text-capitalize mt-5"
                               style="font-size: 14px!important;">
                    </section>

                </form>

                <a href="show_details_link.php" class="btn btn-primary mt-2">نمایش لینک های مرتبط</a>

            </section>
        </section>

    </section>
    <!--   end container  -->

</section>


<!--  end make template  -->
<?php $_SESSION['name_url'] = null ?> <!--  refresh null or از بین میره  -->
<?php $_SESSION['url'] = null ?>
<?php $_SESSION['urlUnique'] = null ?>
<?php $_SESSION['create'] = null ?>


<!--  link js  -->
<script src="<?php echo jquery ?>"></script>
<script src="<?php echo bootstrapBundelJs ?>"></script>
<script src="<?php echo bootstrapJs ?>"></script>
<script src="<?php echo toastJS ?>"></script>
</body>
</html>


