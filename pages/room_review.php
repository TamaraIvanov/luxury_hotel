<html>
<?php include "../includes/head.php";?>
<body>
<div id="rooms">
    <div id="container">

        <?php include "../includes/sidebar.php";?>

        <div id="content">

            <?php include "../includes/header.php";?>

            <section id="rooms_review_section">

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20 ">Rooms Details</h2>
                    <a href="rooms.php" class="back absolute font-weight-bold">Back</a>
                </div>

                <div class="row py-60">
                    
                    <div class="room_img_wrapper col-12 col-md-6">
                        <img class="w-100" src="../img/room1.jpg">
                    </div>

                    <div class="room_details col-12 col-md-12 col-xl-6">
                        <div class="room_details_title pb-15 clearfix">
                            <h3 class="font-weight-bold float-left m-0">Honeymoon Room</h3>
                            <span class="d-block float-right">per night</span>
                            <span class="d-block float-right px-2 font-weight-bold">$300</span>
                        </div>

                        <ul class="room_details_content row py-10 m-0">
                            <li class="col-6 col-sm-4 relative">Double bad</li>
                            <li class="col-6 col-sm-4 relative">Free lunch & dinner</li>
                            <li class="col-6 col-sm-4 relative">Free Wifi</li>
                            <li class="col-6 col-sm-4 relative">Room service</li>
                            <li class="col-6 col-sm-4 relative">Satellite channels</li>
                            <li class="col-6 col-sm-4 relative">Wake-up service</li>
                        </ul>

                        <div class="room_details_social py-10 row">

                            <div class="col-12 col-sm-6 float-left text-right">
                                <ul class="social d-inline-block m-0 ">
                                    <li class="facebook float-left"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                    <li class="twitter float-left"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                    <li class="instagram float-left"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                                    <li class="youtube float-left"><i class="fa fa-youtube" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                            <div class="col-12 col-sm-6 float-right">
                                <span>36 comments</span>
                            </div>
                        </div>

                        <div class="rating text-center py-30">
                            <span class="d-block">Rating</span>
                            <ul class="clearfix d-inline-block">
                                <li class="float-left p-1"><i class="fa fa-star fa-lg" aria-hidden="true"></i></li>
                                <li class="float-left p-1"><i class="fa fa-star fa-lg" aria-hidden="true"></i></li>
                                <li class="float-left p-1"><i class="fa fa-star fa-lg" aria-hidden="true"></i></li>
                                <li class="float-left p-1"><i class="fa fa-star fa-lg" aria-hidden="true"></i></li>
                                <li class="float-left p-1"><i class="fa fa-star-o fa-lg" aria-hidden="true"></i></li>
                            </ul>
                        </div>

                        <div class="text-center">
                            <a href="reservation_review.php" class="book p5-10">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20 ">Rooms Gallery</h2>
                </div>

                <div id="grid_gallery" class="d-flex flex-wrap py-5">

                    <div>
                        <img src="../img/04_Room_review_01.jpg">
                        <img src="../img/04_Room_review_03.jpg">
                        <img src="../img/04_Room_review_02.jpg">
                        <img src="../img/04_Room_review_04.jpg">
                    </div>

                    <div>
                        <img src="../img/04_Room_review_02.jpg">
                        <img src="../img/04_Room_review_04.jpg">
                        <img src="../img/04_Room_review_01.jpg">
                        <img src="../img/04_Room_review_03.jpg">
                    </div>
                </div>

                <div id="gallery_view" class="no-display">
                    <div class="gallery_view_content relative">
                        <div class="img_view"></div>
                        <button type="button" class="exit absolute"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button>
                    </div>
                </div>
            </section>

            <?php include "../includes/footer.php";?>
        </div>
    </div>
</div>

<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/main.js"></script>
<script>

    (function($) {
        $(document).ready(function () {

            $("#grid_gallery").find("img").click(function () {

                var src = $(this).attr("src");
                var gallery =  $(this).closest("#grid_gallery").next("#gallery_view");

                gallery.addClass("activeClass").removeClass("no-display");
                gallery.find(".img_view").html('<img class="gallery_view_img w-100" src="' + src + '"/>');

            });

            $(".exit").click(function () {
                $(this).closest("#gallery_view").addClass("no-display");
            });
        });
    })(jQuery);

</script>

</body>
</html>