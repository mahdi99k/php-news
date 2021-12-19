<?php
include_once "administrator/panel/config/Seo.php";
$seo = new Seo();
$query = $seo->selectLatestSeo();
?>


<!--  make header  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- meta and title seo+ -->



    <?php if (!empty($query)): ?>       <!--  خالی نبود دیتابیس این نمایش بده وگرنه خالی بود بیا دومی else نمایش بده  -->

        <title><?php echo $query['title'] ?></title>
        <meta name="keywords" content="<?php echo $query['keywords'] ?>"/>
        <meta name="description" content="<?php echo $query['description'] ?>"/>
        <meta name="author" content="<?php echo $query['author'] ?>"/>
        <meta name="robots" content="index,follow"/><!--ربات گوگل هر لحظه آپدیت بشه ایندکس گذاری کنن و فکر نکنن جزبک اند-->

        <!-- telegram meta -->
        <meta property="og:title" content="<?php echo $query['title'] ?>"/>
        <meta property="og:site_name" content="<?php echo $query['title'] ?>"/>
        <meta property="og:description" content="<?php echo $query['description'] ?>"/>
        <meta property="og:keywords" content="<?php echo $query['keywords'] ?>"/>
        <meta property="og:image" content="Link to your logo"/>               <!-- Link to your logo -->
        <!-- For Facebook -->
        <meta property="og:url" content="https://mysite/myarticle"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="<?php echo $query['title'] ?>"/>
        <meta property="og:description" content="<?php echo $query['description'] ?>"/>
        <meta property="og:image" content="https://mysite/my-article-image.jpg"/>  <!-- Link to your logo -->
        <!--End  meta and title seo+ -->

    <?php else : ?>  <!--  خالی نبود دیتابیس این نمایش بده وگرنه خالی بود بیا دومی else نمایش بده  -->

        <title>وب سایت فروشگاهی</title>
        <meta name="keywords" content="سایت شخصی ,  سایت خرید لوازم تزیینی , سایت فروشگاهی , وب سایت فروشگاهی"/>
        <meta name="description" content="شما می توانیید انوان لوازم شیک و مجلسی برای تزیین خونه تهیه نمایید"/>
        <meta name="author" content="mahdi"/>
        <meta name="robots" content="index,follow"/>  <!--ربات گوگل هر لحظه آپدیت بشه ایندکس گذاری کنن و فکر نکنن جزبک اند-->

         <!-- telegram meta -->
        <meta property="og:title" content="وب سایت فروشگاهی"/>
        <meta property="og:site_name" content="وب سایت فروشگاهی"/>
        <meta property="og:description" content="شما می توانیید انوان لوازم شیک و مجلسی برای تزیین خونه تهیه نمایید"/>
        <meta property="og:keywords" content="سایت شخصی ,  سایت خرید لوازم تزیینی , سایت فروشگاهی , وب سایت فروشگاهی"/>
        <meta property="og:image" content="Link to your logo"/>               <!-- Link to your logo -->
                                                                              <!-- For Facebook -->
        <meta property="og:url" content="https://mysite/myarticle"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="وب سایت فروشگاهی"/>
        <meta property="og:description" content="شما می توانیید انوان لوازم شیک و مجلسی برای تزیین خونه تهیه نمایید"/>
        <meta property="og:image" content="https://mysite/my-article-image.jpg"/>  <!-- Link to your logo -->
        <!--End  meta and title seo+ -->

    <?php endif; ?>


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?php echo toastCss ?>">
    <!--<link rel="stylesheet" href="<?php /*echo swiperCss */?>">-->
    <link href="assets/css/sliderSwiper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!--  link css me  -->
    <!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
</head>
<body>
<!--  End make header  -->