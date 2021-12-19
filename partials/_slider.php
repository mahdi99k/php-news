<?php
include_once "administrator/panel/config/Parallax.php";
$parallax = new Parallax();
$query = $parallax->selectLatest();
?>


<!-- ======= Slider Hero Section ======= -->
<section id="hero">
    <link rel="stylesheet" href="<?php echo admin ?>">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">


                <!-- Slide  -->
                <?php if (!empty($query)): ?>          <!--  خالی نبود دیتابیس این نمایش بده وگرنه خالی بود بیا دومی else نمایش بده  -->
                    <div class="carousel-item active"
                         style="background: url('../administrator/panel/admin/parallax/images/<?php echo $query['image'] ?>') center                                                    center no-repeat fixed;background-size: cover">

                        <div class=" carousel-container">
                            <div class="carousel-content container">

                                <h2 style="color: <?php echo $query['color'] ?>;font-size: <?php echo $query['sizeH1'] . "px" ?>;text-align: left"
                                    class="animate__animated animate__fadeInDown mb-5"><?php echo $query['title'] ?></h2>

                                <p class="animate__animated animate__fadeInUp"
                                   style="text-align: right;line-height: 35px"><?php echo $query['description'] ?></p>

                                <a href="index.php"
                                   class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>

                <!-- end Slide  -->
                        <?php else : ?>     <!--  خالی نبود دیتابیس این نمایش بده وگرنه خالی بود بیا دومی else نمایش بده  -->
                <!-- Slide default -->
                <div class="carousel-item active">

                    <div class=" carousel-container">
                        <div class="carousel-content container">

                            <h2 class="animate__animated animate__fadeInDown text-warning">به وب سایت ما خوش آمدید؟</h2>

                            <p class="animate__animated animate__fadeInUp" style="text-align: right;line-height: 35px">لورم ایپسوم متن
                                ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                                نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>

                            <a href="index.php"
                               class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- end Slide default  -->
                <?php endif; ?>

            </div>

            <!--<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>-->

        </div>
    </div>
</section>
<!-- End Slider Hero Section -->