<html xmlns="http://www.w3.org/1999/html">
<?php include "includes/head.php";?>
<body>



<div class="container_wrapper">

    <div id="container">

        <?php include "includes/sidebar.php";?>

        <div id="content">
            <?php include "includes/header.php";?>
            <section id="home_page" class="m-0 relative">
                <div id="auto_slider" class="clearfix relative">
                    <div class="float-left">
                        <img src="img/auto_slide1.jpg" class="w-100">
                    </div>
                    <div class="float-left">
                        <img src="img/auto_slide2.jpg" class="w-100">
                    </div>
                    <div class="float-left">
                        <img src="img/auto_slide3.jpg" class="w-100">
                    </div>
                </div>


                <div id="main_title" class="text-center absolute">
                    <h1 class="py-15 font-weight-bold">Welcome to Luxury hotel</h1>
                    <p class="py-15 ">Enjoy your stay</p>
                    <a href="rooms.php">Take a tour</a>
                </div>
            </section>

            <?php include "includes/footer.php";?>
        </div>
    </div>
</div>

<script src="js/slick/slick.min.js"></script>

<script>
    (function($) {

        $(document).ready(function() {
            slickSlider();
        });

        function slickSlider() {

            $("#auto_slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                autoplay: true,
                autoplaySpeed: 3000,
                prevArrow: false,
                nextArrow: false,
                responsive: [
                    {
                        breakpoint: 750,
                        settings: {
                            height: 300
                        }

                    }
                ]
            });
        }
    })(jQuery);

</script>
</body>
</html>