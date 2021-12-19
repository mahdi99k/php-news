<?php
include_once "../config/config.php";
checkSession();   // high security  |   به صورت دستی وارد پنل مدیریت نشه
include_once "../config/News.php";
$id = intval($_GET['id']);
$news = new News();
$query = $news->selectId($id);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>به روزرسانی دیتاهای مربوط به اخبار</title>
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


            <?php if (isset($_SESSION['title'])) : ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['title'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>


            <?php if (isset($_SESSION['keywords'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['keywords'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>

            <?php if (isset($_SESSION['author'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['author'] ?></h6>
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


            <?php if (isset($_SESSION['bodyNews'])): ?>
                <section class="col-8 offset-2 p-3">
                    <section class="alert alert-danger">
                        <h6 class="text-center p-1"><?php echo $_SESSION['bodyNews'] ?></h6>
                    </section>
                </section>
            <?php endif; ?>


        </section>


        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-secondary form_cus  mt-5">
                <h3 class="text-center" style="color: #0dcaf0">صفحه مربوط به ویرایش اخبار</h3>
                <form action="news/update.php" method="post" class="input_cu text-right">


                    <section class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control mb-4 mt-1"
                               value="<?php echo $query['title'] ?>"> <!-- readonly  نشه تغییر داد  -->
                    </section>


                    <section class="form-group">
                        <label for="keywords">کلمات کلیدی سئو</label>
                        <textarea name="keywords" id="keywords" class="form-control mb-4"
                                  style="resize: none;height: 130px"><?php echo $query['keywords'] ?></textarea>
                    </section>


                    <section class="form-group">
                        <label for="author">نام نویسنده سئو</label>
                        <input type="text" name="author" id="author" class="form-control mb-4 mt-1"
                               value="<?php echo $query['author'] ?>">
                    </section>


                    <section class="form-group">
                        <label for="description">توضیحات سئو</label>
                        <textarea name="description" id="description" class="form-control mb-4"
                                  style="resize: none;height: 130px"><?php echo $query['description'] ?></textarea>
                    </section>

                    <section class="form-group">
                        <label for="bodyNews">توضیحات اخبار</label>
                        <textarea name="bodyNews" id="bodyNews" class="form-control mb-4"
                                  style="resize: none;height: 130px"><?php echo $query['bodyNews'] ?></textarea>
                    </section>


                    <input type="hidden" name="id" value="<?php echo $query['id'] ?>">

                    <section class="form-group">
                        <input type="submit" value="به روز رسانی"
                               class="btn btn-success btn-block text-capitalize mt-5" style="font-size: 14px!important;">
                    </section>

                </form>

                <a href="show_details_news.php" class="btn btn-primary mt-2">نمایش اخبار</a>

            </section>
        </section>

    </section>
    <!--   end container  -->

</section>


<!--  end make template  -->
<?php $_SESSION['title'] = null ?> <!--  refresh null or از بین میره  -->
<?php $_SESSION['title_unique'] = null ?>
<?php $_SESSION['keywords'] = null ?>
<?php $_SESSION['author'] = null ?>
<?php $_SESSION['description'] = null ?>
<?php $_SESSION['bodyNews'] = null ?>


<!--  link js  -->
<script src="<?php echo jquery ?>"></script>
<script src="<?php echo bootstrapBundelJs ?>"></script>
<script src="<?php echo bootstrapJs ?>"></script>
<script src="<?php echo toastJS ?>"></script>
<script src="<?php echo ckeditorJs ?>"></script>
<script src="<?php echo ckeditorJquery?>"></script>
<script>$('textarea.body').ckeditor();</script>    <!--  برو هرtextarea  که body. داره اضافه کن ckeditor  -->
<script>$('textarea.keywords').ckeditor();</script>


</body>
</html>

