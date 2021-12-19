<?php
include_once "../config/config.php";
checkSession();   // high security  |   به صورت دستی وارد پنل مدیریت نشه
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

            <?php if (isset($_SESSION['title'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['title'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>

            <?php if (isset($_SESSION['description'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['description'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>

            <?php if (isset($_SESSION['image'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['image'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>

            <?php if (isset($_SESSION['alt'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['alt'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>

            <?php if(isset($_SESSION['color'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['color'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>


            <?php if(isset($_SESSION['sizeH1'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['sizeH1'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>


            <?php if(isset($_SESSION['create'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-success">
                        <h6 class="text-center p-1"><?php echo $_SESSION['create'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>



        </section>


        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary form_cus  mt-5">
                <h3 class="text-center" style="color: #18d26e">صفحه مربوط به ساخت اسلایدر</h3>
                <form action="parallax/insert.php" method="post" enctype="multipart/form-data"
                      class="input_cu text-right">

                    <section class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control mb-4 mt-1"
                               placeholder="لطفا عنوان اسلایدر وارد نمایید">
                    </section>


                    <section class="form-group">
                        <label for="description">توضیحات</label>
                        <textarea name="description" id="description" class="form-control mb-4"
                                  placeholder="لطفا توضیحات اسلایدر وارد نمایید"
                                  style="resize: none;height: 130px"></textarea>
                    </section>

                    <section class="form-group">
                        <label for="image">آپلود عکس</label>
                        <input type="file" name="image" id="image" class="form-control mb-4">
                    </section>

                    <section class="form-group">
                        <label for="alt">نام تصویر</label>
                        <input type="text" name="alt" id="alt" class="form-control mb-4 mt-1"
                               placeholder="لطفا یک نام تصویر مرتبط با اسلایدر وارد نمایید">
                    </section>

                    <section class="form-group">
                        <label for="color">رنگ متن</label>
                        <input type="text" name="color" id="color" class="form-control mb-4 mt-1"
                               placeholder="لطفا رنگ متن اصلی اسلایدر وارد نمایید">
                    </section>

                    <section class="form-group">
                        <label for="sizeH1">سایز متن</label>
                        <input type="number" name="sizeH1" id="sizeH1" class="form-control mb-4 mt-1"
                               placeholder="لطفا سایز متن اصلی اسلایدر وارد نمایید">
                    </section>


                    <section class="form-group">
                        <input type="submit" value="ثبت"
                               class="btn btn-success btn-block text-capitalize mt-5"
                               style="font-size: 14px!important;">
                    </section>

                </form>

                <a href="show_details_parallax.php" class="btn btn-primary mt-2">نمایش پارالکس</a>

            </section>
        </section>

    </section>
    <!--   end container  -->

</section>
<!--  end make template  -->
<?php $_SESSION['title'] = null ?> <!--  refresh null or از بین میره  -->
<?php $_SESSION['description'] = null ?>
<?php $_SESSION['image'] = null ?>
<?php $_SESSION['alt'] = null ?>
<?php $_SESSION['create'] = null ?>
<?php $_SESSION['color'] = null ?>
<?php $_SESSION['sizeH1'] = null ?>

<!--  link js  -->
<script src="<?php echo jquery ?>"></script>
<script src="<?php echo bootstrapBundelJs ?>"></script>
<script src="<?php echo bootstrapJs ?>"></script>
<script src="<?php echo toastJS ?>"></script>
</body>
</html>