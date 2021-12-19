<?php
include_once "administrator/panel/config/Link.php";
$link = new Link();
$query = $link->select();

?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Mahdi 99k</h3>
                    <p>
                        آزادی , خیابان کارگر جنوبی <br>
                        ایران, تهران<br><br>
                        <strong dir="rtl"> : شماره موبایل </strong> +989109695037<br>
                        <strong>ایمیل : </strong> mahdishmshm1378@gmail.com<br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>لینک های مفید</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">خانه</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">درباره ما</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">محصولات</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">نظرات</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">فووتر</a></li>
                    </ul>
                </div>


                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>لینک های مرتبط</h4>
                <?php foreach ($query as $item): ?>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="<?php echo $item['url'] ?>" target="_blank"><?php echo $item['name_url'] ?></a>
                            </li>
                        </ul>
                <?php endforeach; ?>
                </div>


                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>خبرنامه ما</h4>
                    <p>.آسانترین راه برای از بین بردن افتخارات خودستایی است</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Mahdi 99k</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
            Designed by <a href="https://bootstrapmade.com/">mahdi99k</a>
        </div>
    </div>
</footer>
<!-- End Footer -->