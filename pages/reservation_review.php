<html>
<?php include "../includes/head.php";?>
<body>
<div id="reservation_review">
    <div id="container">

        <?php include "../includes/sidebar.php";?>

        <div id="content">

            <?php include "../includes/header.php";?>

            <section id="reservation_review_section">

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20 ">Reserve Review</h2>
                    <a href="room_review.php" class="back absolute font-weight-bold">Back</a>
                </div>

                <span class="d-block py-60">Selected services</span>

                <h3 class="font-weight-bold">Honeymoon Room</h3>
                <div class="row">

                    <div class="selected_room_wrapper col-md-12 col-xl-8 p-0">

                        <div class="selected_room_content">

                            <div class="selected_room  col-md-12 col-xl-7  float-left">

                                <div class="room_img_wrapper pt-2">
                                    <img class="w-100" src="../img/rooms/room1.jpg">
                                    <p class="py-2">Double bad room, 1 Night</p>
                                </div>
                            </div>

                            <div class="price_review  col-md-12 col-xl-5 float-left pt-2">

                                <div class="float-left">
                                    <span class="d-block pb-1">Price</span>
                                    <span class="d-block">300$ x 2</span>
                                </div>

                                <div class="float-right">
                                    <span class="d-block">Total</span>
                                    <span class="d-block font-weight-bold pb-1">600$</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-12 col-xl-4">

                        <div class="booking_form_wrapper w-100">
                            <form id="check_reservation" class="booking_form form-group was-validated py-3 px-4" method="post" action="">


                                <div class="check_in_wrapper relative">
                                    <label for="js_check_in" class="pt-2">Check in</label>
                                    <input id="js_check_in" class="check_in" name="check_in" value=""  type="text" data-start-view="2"
                                           data-rule-required="true" data-msg-required="This field is required"/>
                                </div>

                                <div class="check_out_wrapper relative">
                                    <label for="js_check_out" class="pt-2">Check out</label>
                                    <input id="js_check_out" name="check_out"
                                           data-rule-required="true" data-msg-required="This field is required"/>
                                </div>

                                <div class="room_type_wrapper form-group relative">
                                    <label for="select_room" class="col-form-label pt-2">Room type</label>
                                    <select id="select_room" name="room_type" required class="select_room form-control required">
                                        <option value="honeymoon">Honeymoon</option>
                                        <option value="presidential">Presidential Room</option>
                                        <option value="apartment">Apartment Room</option>
                                        <option value="family">Family Room</option>
                                        <option value="luhury">Luhury Room</option>
                                        <option value="standard">Standard Room</option>
                                        <option value="single">Single Room</option>
                                    </select>
                                </div>

                                <div class="guests_wrapper clearfix">
                                    <div class="adult_wrapper float-left relative select2-bootstrap-append">
                                        <label for="js_adult" class="pt-2">Adult</label>
                                        <select id="js_adult" name="adult">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <div class="children_wrapper float-right relative">
                                        <label for="js_children" class="pt-2">Children</label>
                                        <select id="js_children"  class="float-right" name="children">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>

                                <button id="check_avail" class="check_btn py-3 mt-4 w-100">Check Availability</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="text-center py-60">
                    <a class="checkout py-2 px-4" href="checkout.php">Checkout</a>
                </div>

            </section>

            <?php include "../includes/footer.php";?>
        </div>
    </div>
</div>

<script src="../js/jquery-3.1.1.js"></script>

<script src="../js/tether-1.4.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="../js/bootstrap-datepicker.min.js"></script>

<script src="../js/jquery.validate.js"></script>
<script src="../js/select2/select2.js"></script>
<script src="../js/select2/select2-bootstrap-min.js"></script>
<script src="../js/main.js"></script>

<script>

    (function($) {
        $(function() {


            $("#check_reservation").validate();
        });


    })(jQuery);

</script>
</body>
</html>