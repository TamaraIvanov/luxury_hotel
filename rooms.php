<html>
<?php include "includes/head.php";?>
<body>
<div id="rooms">

    <div id="container">

        <?php include "includes/sidebar.php";?>

        <div id="content">

            <?php include "includes/header.php";?>

            <section id="rooms_section">


                <h2 class="text-center  font-weight-bold py-20">Rooms Greed</h2>

                <div class="filter_wrapper d-flex justify-content-center text-center py-60 relative">

                    <button type="button" class="js-drop-btn filter_btn absolute no-display"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>

                    <ul class="filter_offers  js-drop-list clearfix relative">
                        <li class="all float-left active" data-id="all">All</li>
                        <li class="float-left" data-id="apartment">Apartments</li>
                        <li class="float-left" data-id="double">Double Room</li>
                        <li class="float-left" data-id="single">Single Room</li>
                        <li class="float-left" data-id="family">Family Room</li>
                    </ul>
                </div>


                <div id="rooms_list" class="offer_container row">

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="double">
                        <a href="room_review.php"><img src="img/room1.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">300$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Honeymoon Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer col-12 col-sm-6 col-xl-4 relative my-15" data-type="apartment">
                        <a href="room_review.php"><img src="img/room2.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">1000$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Presidential Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="apartment">
                        <a href="room_review.php"><img src="img/room3.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">400$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Apartment Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="family">
                        <a href="room_review.php"><img src="img/room4.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">350$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Family Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="double">
                        <a href="room_review.php"><img src="img/room5.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">500$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Luhury Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="double">
                        <a href="room_review.php"><img src="img/room6.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">200$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Standard Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="double">
                        <a href="room_review.php"><img src="img/room7.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">200$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Standard Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="single">
                        <a href="room_review.php"><img src="img/room8.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">150$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Single Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="offer offer_content col-12 col-sm-6 col-xl-4 relative my-15" data-type="double">
                        <a href="room_review.php"><img src="img/room9.jpg" class="w-100"></a>
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold">450$</span>
                            <span class="d-block text-center">per night</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute">
                                <h3 class="py-20 m-0">Luhury Room</h3>
                                <a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include "includes/footer.php";?>
        </div>
    </div>
</div>

<script>

    $(document).ready(function() {

        $(window).scroll(function(){
            if($(window).scrollTop() + window.innerHeight === $(document).height()) {

                var active_filter = filter_room.filter('.active').data('id');
                paginateData("http://localhost/tamara/luxury_hotel/structure/rooms.php", {page: page, offset: 3, active_filter: active_filter}, 'rooms', '#rooms_list');
            }
        });

    });

</script>

</body>
</html>