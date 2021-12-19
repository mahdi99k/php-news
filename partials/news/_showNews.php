<?php
include_once "administrator/panel/config/News.php";
$news = new News();
$title = $_GET['title'];
$query = $news->searchTitle($title);
?>

<main id="main" style="direction: rtl">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>جزئیات اخبار</h2>
                <ol>
                    <li><a href="index.php">خانه</a></li>
                    <li><a href="portfolio.html"> محصولات</a></li>
                    <li> جزئیات اخبار</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/portfolio/portfolio-1.jpg" alt=""></div>
                        </div>
                        <!--<div class="swiper-pagination"></div>-->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-info">
                        <h3 style="font-weight: lighter;margin-bottom: 40px;color: royalblue">اطلاعات خبر</h3>
                        <h3><?php echo $query['title'] ?></h3>
                        <p style="text-align: justify;margin-bottom: 50px"><?php echo $query['bodyNews'] ?></p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Details Section -->

</main><!-- End #main -->