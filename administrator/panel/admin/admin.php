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
            <section class="col-8 offset-2 jumbotron bg-secondary form_cus  mt-5">
                <h3 class="text-center text-warning">تنظیمات بخش سئو</h3>
                <form action="#" method="post" id="seo" enctype="multipart/form-data" class="input_cu text-right">

                    <section class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control mb-4 mt-1"
                               placeholder="لطفا عنوان سئو وارد نمایید">
                    </section>

                    <section class="form-group">
                        <label for="keywords">کلمات کلیدی</label>
                        <textarea name="keywords" id="keywords" class="form-control mb-4"
                                  placeholder="لطفا کلمات کلیدی سئو وارد نمایید"
                                  style="resize: none;height: 130px"></textarea>
                    </section>

                    <section class="form-group">
                        <label for="description">توضیحات سئو</label>
                        <textarea name="description" id="description" class="form-control mb-4"
                                  placeholder="لطفا توضیحات سئو وارد نمایید"
                                  style="resize: none;height: 130px"></textarea>
                    </section>

                    <section class="form-group">
                        <label for="author">نویسنده</label>
                        <input type="text" name="author" id="author" class="form-control mb-4"
                               placeholder="نام نویسنده بخش سئو وارد نمایید">
                    </section>


                    <section class="form-group">
                        <input type="submit" value="ثبت"
                               class="btn btn-warning btn-block text-capitalize font-weight-bold mt-5">
                    </section>

                </form>
            </section>
        </section>


        <section class="row m-0">
            <section class="col-8 offset-2 mt-4 mb-4">
                <table class="table table-bordered table-hover table-responsive-lg table-dark">

                    <tr class="text-center text-warning">
                        <td>id</td>
                        <td>title</td>
                        <td>keywords</td>
                        <td>description</td>
                        <td>author</td>
                        <td>delete</td>
                    </tr>

                </table>
            </section>
        </section>
    </section>
    <!--   end container  -->

</section>
<!--  end make template  -->


<!--  link js  -->
<script src="<?php echo jquery ?>"></script>
<script src="<?php echo bootstrapBundelJs ?>"></script>
<script src="<?php echo bootstrapJs ?>"></script>
<script src="<?php echo toastJS ?>"></script>

<script>

    //------------------------------------------------------------- get ajax

    function read() {      // show_details_seo       (Show Seo ajax)
        $.ajax({
            url: "show_details_seo.php",
            method: "get",
            success: function (response) {
                let data = JSON.parse(response);          // json To -> Object
                let items = "";
                for (let i = 0; i < data.length; i++) {
                    items +=
                        "<tr>" +
                        "<td>" + data[i].id + "</td>" +
                        "<td>" + data[i].title + "</td>" +
                        "<td>" + data[i].keywords + "</td>" +
                        "<td>" + data[i].description + "</td>" +
                        "<td><button id='" + data[i].id + "' class='btn btn-danger text-capitalize delete'>حذف</button></td>" +
                        "</tr>"
                }
                $('table').html('').append(items);   // برو جدول پیدا کن هر چی تگ html خالی کن بعد مقادیر بگیر
            }
        })
    }

    read();


    //------------------------------------------------------------- create ajax


    $('form#seo').submit(function (event) {    // submit(input) بهتر چون یک بار میسازه با دکمه سابمیت   ,  click(button) با هر کلیک روی صفحه میسازه که بد
        event.preventDefault();   // no refresh page

        let title = $('input[name=title]').val();   // get value  ,  مقدار  ,  هر چی درونش نوشته شده
        let keywords = $('textarea[name=keywords]').val();
        let description = $('textarea[name=description]').val();
        let author = $('input[name=author]').val();

        $.ajax({
            url: "seo/insert.php",     // مسیری که میخواهیم بفرستیم
            method: "post",
            data: {
                title: title,
                keywords: keywords,
                description: description,
                author: author,
            },

            //-------------------------------------------------------- start validation

            success: function (response) {
                if (Number(response) === 1) {      // Number()  به صورت عددی  ,  parseInt()  |  response  جواب
                    $.toast({
                        heading: 'خطا',
                        text: 'عنوان خالی می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })


                } else if (Number(response) === 2) {
                    $.toast({
                        heading: 'خطا',
                        text: 'عنوان بیشتر از 100 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت

                    })


                } else if (Number(response) === 3) {
                    $.toast({
                        heading: 'خطا',
                        text: 'عنوان کمتر از 3 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })

                    //--------------------------------------------------------

                } else if (Number(response) === 4) {     // Number()  به صورت عددی   ,  parseInt()
                    $.toast({
                        heading: 'خطا',
                        text: 'کلمات کلیدی خالی می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })


                } else if (Number(response) === 5) {
                    $.toast({
                        heading: 'خطا',
                        text: 'کلمات کلیدی بیشتر از 500 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })


                } else if (Number(response) === 6) {
                    $.toast({
                        heading: 'خطا',
                        text: 'کلمات کلیدی کمتر از 5 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })

                    //--------------------------------------------------------

                } else if (Number(response) === 7) {      // Number()  به صورت عددی   ,  parseInt()
                    $.toast({
                        heading: 'خطا',
                        text: 'توضیحات سئو خالی می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })


                } else if (Number(response) === 8) {
                    $.toast({
                        heading: 'خطا',
                        text: 'توضیحات سئو بیشتر از 500 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })


                } else if (Number(response) === 9) {
                    $.toast({
                        heading: 'خطا',
                        text: 'توضیحات سئو کمتر از 5 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })

                    //--------------------------------------------------------

                } else if (Number(response) === 10) {     // Number()  به صورت عددی   ,  parseInt()
                    $.toast({
                        heading: 'خطا',
                        text: 'نویسنده خالی می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })


                } else if (Number(response) === 11) {
                    $.toast({
                        heading: 'خطا',
                        text: 'نویسنده بیشتر از 100 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })


                } else if (Number(response) === 12) {
                    $.toast({
                        heading: 'خطا',
                        text: 'نویسنده کمتر از 3 کاراکتر می باشد',
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                    })

                    //----------------------------------------  successful

                } else if (Number(response) === 20) {
                    read();                                     // show select seo   , no refresh
                    $('input[name=title]').val("");            // بعد ثبت شدن بیا خالی کن
                    $('textarea[name=keywords]').val("");
                    $('textarea[name=description]').val("");
                    $('input[name=author]').val("");

                    $.toast({
                        heading: 'موفقیت آمیز',
                        text: 'عملیات ساختن دیتا با موفقیت انجام شد',
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                        //  stack: false ,
                    })
                }
            }

        })
        //--------------------------------------------------------

    })


    //------------------------------------------------------------- delete ajax


    $('table').on('click', '.delete', deleteItem);  //فانکشن(3    کلاس دلیت(2   جی کوئری بیا برو تو جدول وقتی که کلیک شد( 1    |    فعال on
    function deleteItem() {
        let id = $(this).attr('id');   //   $(this)  =  .delete اشاره به کل دلیت دارد     |     attr = attribute
        $.ajax({
            url: "seo/delete.php",
            method: 'post',    // delete update(put,patch) create -> post  همه اینا پست
            data: {id: id},
            success:function (response) {
                if (Number(response) === 1) {
                    read();
                    $.toast({
                        heading: 'موفقیت آمیز',
                        text: 'عملیات حذف با موفقیت انجام شد',
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                        position: 'top-right',   // موقعیت
                        //  stack: false ,
                    })
                }
            }
        })
    }

</script>

</body>
</html>