<?php
include_once "../config/config.php";
checkSession("../login.php");
include_once "../config/Link.php";
$link = new Link();
$query = $link->select();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نمایش دیتاهای مربوط به لینک های مرتبط</title>
    <!--  link css -->
    <link rel="stylesheet" type="text/css" href="<?php echo bootstrap ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin ?>"/>
</head>
<body>

<!--  make template  -->
<section class="container-fluid p-0">

    <!--  menu  -->
    <?php include_once "_menu.php"; ?>
    <!--  end menu  -->

    <!--  data  -->
    <section class="data">

        <?php if (isset($_SESSION['delete'])): ?>
            <section class="col-8 offset-2 p-3">
                <section class="alert alert-danger">
                    <h6 class="text-center p-1"><?php echo $_SESSION['delete'] ?></h6>
                </section>
            </section>
        <?php endif; ?>

        <section class="row m-0">
            <section class="col-8 offset-2 jumbotron bg-dark text-white text-center p-4 mt-5">
                <h4 class="text-center mb-4" style="color: #ff7676">صفحه نمایش لینک های مرتبط</h4>
                <table class="table table-bordered table-hover table-responsive-xl table-dark">

                    <thead>
                    <tr class="text-warning" style="font-size: 14px">
                        <td>نام آدرس اینترنتی</td>
                        <td>آدرس اینترنتی</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    <?php foreach ($query as $item): ?>
                        <tr class="text-white" style="font-size: 15px">
                            <td><?php echo $item['name_url']?></td>
                            <td><?php echo $item['url']?></td>

                            <td>
                                <form action="link/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                                    <input type="submit" value="حذف" class="btn btn-danger p-2">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>

                </table>
            </section>
        </section>
    </section>
    <!--  end data  -->


</section>
<!--  end make template  -->

<?php $_SESSION['delete'] = null ?> <!--  refresh null or از بین میره  -->

<!--  link js  -->
<script src="<?php echo jquery ?>"></script>
<script src="<?php echo bootstrapBundelJs ?>"></script>
<script src="<?php echo bootstrapJs ?>"></script>
</body>
</html>





