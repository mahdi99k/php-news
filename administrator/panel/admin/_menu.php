<!--  menu  -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Navbar Brand -->
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="font-size: 14px;font-family: 'IRANSans Medium'">

        <ul class="navbar-nav m-1 d-flex flex-md-row-reverse w-100">  <!-- تا حالت تبلت انجام بشو ادامه حالت عادی -->

            <li class="nav-item">
                <a class="nav-link text-white text-center" href="admin.php">تنظیمات seo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white text-center" href="create_parallax.php">پارالکس</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white text-center" href="create_news.php">اخبار</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white text-center" href="show_details_contact.php">تماس با ما</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white text-center" href="create_link.php">لینک های مرتبط</a>
            </li>

            <li class="nav-item mb-3 mb-md-0 mr-md-3">
                <a class="nav-link text-white bg-info text-center"
                   href="<?php echo URL ?>/index.php" target="_blank">نمایش سایت</a>
            </li>

            <li class="nav-item mr-md-3">
                <a class="nav-link text-white bg-danger text-center" href="../logout.php">خروج</a>
            </li>

        </ul>
    </div>
    <!-- end Navbar Brand -->
</nav>
<!--  end menu  -->