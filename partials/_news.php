<?php
include_once "administrator/panel/config/News.php";
$news = new News();
$query = $news->selectLimit(6,0);
$number = 1;
?>


<!-- ======= News Lists Section ======= -->
<section class="about-lists" id="about">
    <div class="container">

        <div class="section-title">
            <h2>درباره ما</h2>
            <p class="text-end mb-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
            </p>

        </div>

        <div class="row no-gutters shadow">

            <?php foreach ($query as $item): ?>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" style="direction: rtl">
                <span style="margin-right: 50%"><?php echo $number++ ?></span>
                <h4 style="font-family: 'IRANSans Medium';font-size: 23px;margin-right: 5%"><?php echo $item['title'] ?></h4>
                <p style="margin-right: 5%;text-align: justify;padding-left: 20px"><?php echo $item['bodyNews'] ?></p>
                <span style="margin-right: 5%"><a href="news.php?title=<?php echo $item['title'] ?>" class="btn btn-danger text-capitalize mt-5">ادامه مطلب</a></span>

            </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>
<!-- End News Lists Section -->