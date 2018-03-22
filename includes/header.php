
<header id="header" class="clearfix px-5">

    <div class="language float-left relative">
        <div class="language_choice text-uppercase font-weight-bold  px-2 py-4 js-drop-btn">english</div>
        <ul class="language_list js-booking js-drop-list absolute no_display">
            <li class="text-uppercase font-weight-bold px-2 py-1" data-name="english">english</li>
            <li class="text-uppercase font-weight-bold px-2 py-1" data-name="german">german</li>
            <li class="text-uppercase font-weight-bold px-2 py-1" data-name="french">french</li>
            <li class="text-uppercase font-weight-bold px-2 py-1" data-name="spanish">spanish</li>
            <li class="text-uppercase font-weight-bold px-2 py-1" data-name="italian">italian</li>
        </ul>
    </div>

    <div class="book_wrapper float-right py-4 relative">

        <button class="js-drop-btn book px-3 py-1">Book now</button>

        <div class="booking_form_wrapper js-booking js-drop-list absolute absolute no_display">
            <form id="check_form" class="booking_form was-validated py-3 px-4" method="post" action="">


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
                        <select id="js_children" name="children">
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

    <div class="preloader_wrapper">
        <div class="preloader absolute text-center">
            <img class="my-3" src="img/loader.gif">
            <span>Loading...</span>
        </div>
    </div>
</header>

