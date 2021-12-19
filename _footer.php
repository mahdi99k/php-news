<!-- footer  -->
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // direction: "vertical",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        autoplay: {
            delay: 3000,
        },

        effect: 'fade',  /* ناپدید شدن */
        fadeEffect: {
            crossFade: true
        },

        /*effect: 'flip',    /!* پریدن و چرخش 360 *!/
        flipEffect: {
            slideShadows: false,
        },*/

    });
</script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- link js me -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php echo toastJS ?>"></script>

<script>
    $('form#form').submit(function (e) {
        e.preventDefault();  // no refresh
        let fullname = $('input[name=fullname]').val();  // val == value مقدار
        let email = $('input[name=email]').val();
        let subject = $('input[name=subject]').val();
        let comment = $('textarea[name=comment]').val();


        $.ajax({
            url: "administrator/panel/admin/contact/insert.php",  // address
            type: "post",
            data: {fullname: fullname, email: email, subject: subject, comment: comment},
            success: function (response) {

                //--------------------------------------------------------

                if (Number(response) === 1) {
                    $.toast({
                        heading: 'خطا',
                        text: 'عنوان خالی می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن

                    })



                } else if (Number(response) === 2) {
                    $.toast({
                        heading: 'خطا',
                        text: 'عنوان بیشتر از 100 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })


                } else if (Number(response) === 3) {
                    $.toast({
                        heading: 'خطا',
                        text: 'عنوان کمتر از 3 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })


                    //--------------------------------------------------------


                } else if (Number(response) === 4) {
                    $.toast({
                        heading: 'خطا',
                        text: 'ایمیل خالی می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                } else if (Number(response) === 5) {
                    $.toast({
                        heading: 'خطا',
                        text: 'ایمیل بیشتر از 100 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })


                } else if (Number(response) === 6) {
                    $.toast({
                        heading: 'خطا',
                        text: 'ایمیل کمتر از 5 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                    //--------------------------------------------------------


                } else if (Number(response) === 7) {
                    $.toast({
                        heading: 'خطا',
                        text: 'موضوع خالی می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                } else if (Number(response) === 8) {
                    $.toast({
                        heading: 'خطا',
                        text: 'موضوع بیشتر از 100 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                } else if (Number(response) === 9) {
                    $.toast({
                        heading: 'خطا',
                        text: 'موضوع کمتر از 5 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                    //--------------------------------------------------------

                } else if (Number(response) === 10) {
                    $.toast({
                        heading: 'خطا',
                        text: 'توضیحات خالی می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                } else if (Number(response) === 11) {
                    $.toast({
                        heading: 'خطا',
                        text: 'توضیحات بیشتر از 1000 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                } else if (Number(response) === 12) {
                    $.toast({
                        heading: 'خطا',
                        text: 'توضیحات کمتر از 5 کاراکتر می باشد',
                        position: 'top-right',
                        icon: 'error',
                        showHideTransition: 'slide',
                        hideAfter: 5000,  // Delay   تاخیر داشتن
                    })

                    //-------------------------------------------------------- Successful


                } else if (Number(response) === 20) {
                    $('input[name=fullname]').val("");            // بعد ثبت شدن بیا خالی کن
                    $('input[name=email]').val("");
                    $('input[name=subject]').val("");
                    $('textarea[name=comment]').val("");

                    $.toast({
                        heading: 'موفقیت آمیز',
                        text: 'پیام شما با موفقیت ارسال شد, با تشکر',
                        position: 'top-right',
                        icon: 'success',
                        showHideTransition: 'slide',
                        hideAfter: 7000,  // Delay   تاخیر داشتن
                    })
                }


            }
        })

    })


</script>
</body>
</html>
<!-- footer -->