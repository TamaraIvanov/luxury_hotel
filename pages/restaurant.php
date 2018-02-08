<html>
<?php include "../includes/head.php";?>
<body>
<div id="reservation_review">
    <div id="container">

        <?php include "../includes/sidebar.php";?>

        <div id="content">



            <?php include "../includes/header.php";?>

            <section id="restaurant_section">

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20">We proudly present our restaurant</h2>
                </div>

                <div class="restaurant_wrapper col-10 py-60">
                    <img src="../img/07_Restaurant_01.jpg">
                    <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida semper augue, vitae suscipit velit rutrum eu.
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Donec sodales enim sit amet egestas condimentum. Nullam in nibh vel dolor tempor commodo eu sed lacus.
                        Integer dignissim massa at ipsum facilisis, porta aliquam urna convallis.
                    </p>
                </div>

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20">Exclusive Menu</h2>
                </div>

                <div class="filter_rooms_wrapper d-flex justify-content-center text-center py-60 relative">
                    <button type="button" class="js_drop_down_btn filter_btn absolute no-display"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>

                    <ul class="js_drop_down filter_rooms clearfix">
                        <li class="float-left">All</li>
                        <li class="float-left">Breakfast</li>
                        <li class="float-left">Lunch</li>
                        <li class="float-left">Dinner</li>
                        <li class="float-left">Drinks</li>
                    </ul>
                </div>

                <div id="restaurant_offer" class="offer_container row">

                    <div class="offer_content col-12 col-sm-6 col-xl-4 float-left relative my-15">
                        <img src="../img/Restaurant1.jpg" class="w-100">
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold py-2">200$</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute pb-3">
                                <h3 class="py-20 m-0">Baked Salmon</h3>
                                <p>(Samon, Avocado, Lettuce, Cherry tomato,  Lemon)</p>
                            </div>
                        </div>
                    </div>

                    <div class="offer_content col-12 col-sm-6 col-xl-4 col-xl-4 float-left relative my-15">
                        <img src="../img/Restaurant2.jpg" class="w-100">
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold py-2">150$</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute pb-3">
                                <h3 class="py-20 m-0">Royal Pasta </h3>
                                <p>(Samon, Avocado, Lettuce, Cherry tomato,  Lemon)</p>
                            </div>
                        </div>
                    </div>

                    <div class="offer_content col-12 col-sm-6 col-xl-4 float-left relative my-15">
                        <img src="../img/Restaurant3.jpg" class="w-100">
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold py-2">250$</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute pb-3">
                                <h3 class="py-20 m-0">Beef Steak</h3>
                                <p>(Samon, Avocado, Lettuce, Cherry tomato,  Lemon)</p>
                            </div>
                        </div>
                    </div>

                    <div class="offer_content col-12 col-sm-6 col-xl-4 float-left relative my-15">
                        <img src="../img/Restaurant4.jpg" class="w-100">
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold py-2">25$</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute pb-3">
                                <h3 class="py-20 m-0">Pancakes with Dressing</h3>
                                <p>(Samon, Avocado, Lettuce, Cherry tomato,  Lemon)</p>
                            </div>
                        </div>
                    </div>

                    <div class="offer_content col-12 col-sm-6 col-xl-4 float-left relative my-15">
                        <img src="../img/Restaurant5.jpg" class="w-100">
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold py-2">350$</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute pb-3">
                                <h3 class="py-20 m-0">Roast Lamb</h3>
                                <p>(Samon, Avocado, Lettuce, Cherry tomato,  Lemon)</p>
                            </div>
                        </div>
                    </div>

                    <div class="offer_content col-12 col-sm-6 col-xl-4 float-left relative my-15">
                        <img src="../img/Restaurant6.jpg" class="w-100">
                        <div class="price absolute top0 p5">
                            <span class="d-block text-center font-weight-bold py-2">300$</span>
                            <div class="triangle absolute left0"></div>
                            <div class="triangle absolute right0 rotate"></div>
                        </div>

                        <div class="offer_name_wrapper relative">
                            <div class="offer_name w-100 text-center absolute pb-3">
                                <h3 class="py-20 m-0">Fish Grilled Specialties</h3>
                                <p>(Samon, Avocado, Lettuce, Cherry tomato,  Lemon)</p>
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

<script>




</script>

</body>
</html>