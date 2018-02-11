<html>
<?php include "../includes/head.php";?>
<body>
<div id="reservation_review">
    <div id="container">

        <?php include "../includes/sidebar.php";?>

        <div id="content">

            <?php include "../includes/header.php";?>

            <section id="meeting_section">

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20">We proudly present our restaurant</h2>
                </div>

                <div class="meeting_wrapper col-8 py-60">
                    <img src="../img/meeting.jpg">
                </div>

                <div class="meeting_offer row">
                    <div class="col-md-12 col-xl-4 text-center">
                        <i class="material-icons d-block py-3">videocam</i>
                        <span class="font-weight-bold">Projector</span>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer dignissim tempushendrerit. Ut aliquam gravida diam at ullamcorper.
                        </p>
                    </div>

                    <div class="col-md-12 col-xl-4 text-center">
                        <i class="material-icons text-center d-block py-3"">hearing</i>
                        <span class="font-weight-bold">Translators</span>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer dignissim tempushendrerit. Ut aliquam gravida diam at ullamcorper.
                        </p>
                    </div>

                    <div class="col-md-12 col-xl-4 text-center">
                        <i class="material-icons d-block py-3"">restaurant_menu</i>
                        <span class="font-weight-bold">Free Lunch</span>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer dignissim tempushendrerit. Ut aliquam gravida diam at ullamcorper.
                        </p>
                    </div>
                </div>

                <div class="title_wrapper relative py-60">
                    <h2 class="text-center font-weight-bold py-20">Conference Room</h2>
                </div>

                <div class="offer_container row">

                    <div class="offer_content col-sm-12 col-md-6 col-xl-4 float-left relative my-15">
                        <a href="room_review.php"><img src="../img/meeting1.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">1500$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Conference Hall</h3>
                                <button type="button" class="book_room p5-10">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="offer_content col-sm-12 col-md-6 col-xl-4 float-left relative my-15">
                        <a href="room_review.php"><img src="../img/meeting2.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">500$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Meeting Room</h3>
                                <button type="button" class="book_room p5-10">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="offer_content col-sm-12 col-md-6 col-xl-4 float-left relative my-15">
                        <a href="room_review.php"><img src="../img/meeting3.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">1000$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Wedding Hallm</h3>
                                <button type="button" class="book_room p5-10">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include "../includes/footer.php";?>
        </div>
    </div>
</div>

<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/main.js"></script>

</body>
</html>