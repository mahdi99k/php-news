<?php
include_once "../config/config.php";
checkSession("../login.php");
include_once "../config/Parallax.php";
$parallax = new Parallax();
$query = $parallax->select();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نمایش دیتاهای مربوط به پارالکس</title>
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
                <h3 class="text-center mb-4" style="color: #18d26e">صفحه نمایش اسلایدر</h3>
                <table class="table table-bordered table-hover table-responsive-xl table-dark">

                    <thead>
                    <tr class="text-warning">
                        <td>عنوان</td>
                        <td>توضیحات</td>
                        <td>عکس</td>
                        <td>نام تصویر</td>
                        <td>رنگ متن</td>
                        <td>سایز متن</td>
                        <td>حذف</td>
                    </tr>
                    </thead>


                    <tbody>
                    <?php foreach ($query as $item): ?>
                        <tr class="text-white" style="font-size: 15px">
                            <td><?php echo $item['title'] ?></td>
                            <td><?php echo substr($item['description'], 0, 50); ?></td>  <!-- 1)name 2)min  3)max -->
                            <td><img src="parallax/images/<?php echo $item['image'] ?>" width="120" height="80"/></td>
                            <td><?php echo $item['alt'] ?></td>
                            <td><?php echo $item['color'] ?></td>
                            <td><?php echo $item['sizeH1'] ?></td>
                            <td>
                                <form action="parallax/delete.php" method="post">
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

<?php $_SESSION['delete'] = null ?>       <!--  refresh null or از بین میره  -->

<!--  link js  -->
<script src="<?php echo jquery ?>"></script>
<script src="<?php echo bootstrapBundelJs ?>"></script>
<script src="<?php echo bootstrapJs ?>"></script>
</body>
</html>


<!--TODO How To low text or description in the php -->


