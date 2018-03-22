<html>
<?php include "includes/head.php";?>
<body>
<div id="reservation_review">
    <div id="container">

        <?php include "includes/sidebar.php";?>

        <div id="content">

            <?php include "includes/header.php";?>

            <section id="contact">

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20">We are here for you</h2>
                </div>

                <div id="contact_wrapper" class="py-60 row">
                    <div class="col-12 col-md-6">

                        <form id="js_contact_form" method="post" action="">
                            <div class="form-field">
                                <label for="full_name" class="d-block">Full Name</label>
                                <input id="full_name" type="text" name="full_name" class="w-100 my-20 px-2"
                                       data-rule-required="true" data-rule-lettersonly="true" data-msg-lettersonly="Only letters please !" data-msg-required="This field is required !"/>
                            </div>
                            <div class="form-field">
                                <label for="email" class="d-block">E-Mail</label>
                                <input id="email" type="text" name="email" class="w-100 my-20 px-2"
                                       data-rule-required="true" data-msg-required="This field is required !"
                                       data-rule-email="true" data-email-required="Please enter a valid email address !" />
                            </div>
                            <div class="form-field">
                                <label for="company_name" class="d-block">Company Name</label>
                                <input id="company_name" type="text" name="company_name" class="w-100 my-20 px-2"/>
                            </div>
                            <div class="form-field">
                                <textarea id="comment" placeholder="Comment" class="w-100 my-20  p-2" name="message" data-rule-required="true" data-msg-required="This field is required !"></textarea>
                            </div>

                            <button  class="py-2 px-5 mt-5">Send</button>
                        </form>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="contact_wrapper">

                            <div class="contact">
                                <address class="py-2 m-0">1133 N.Dysart Road, 56789, GR</address>
                                <a class="mail py-2" href="mailto:INFO@LUXURYHOTEL.COM">info@luxuryhotel.com</a>
                                <a class="tel py-2" href="tel:+3 653-306-6100">+3 653-306-6100</a>
                            </div>

                            <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sodales id nunc eget posuere.
                                Nunc fermentum porta elementum.
                                Ut tempus fringilla tincidunt. Suspendisse mattis scelerisque finibus.
                            </p>

                            <div id="map"></div>

                        </div>
                    </div>
                </div>
            </section>

            <?php include "includes/footer.php";?>
        </div>
    </div>
</div>


<script>

    $(function() {

        $("#js_contact_form").validate({
            messages: {
                email: {
                    email: "Your email address must be in the format of name@domain.com"
                }
            }
        });
    });

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: {lat: 38.449785, lng: -105.223311}
        });

        var marker = new google.maps.Marker({
            map: map,
            // Define the place with a location, and a query string.
            place: {
                location: {lat: 38.449785, lng: -105.223311},
                query: 'Companty'

            },
            // Attributions help users find your site again.
            attribution: {
                source: 'Google Maps JavaScript API',
                webUrl: 'https://developers.google.com/maps/'
            }
        });

        // Construct a new InfoWindow.
        var infoWindow = new google.maps.InfoWindow({
            content: '<b>eeee </b><br> eeee'
        });

        // Opens the InfoWindow when marker is clicked.
        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwxem7oINL8qvoUw8eufRgdQ4mbYae0i4&callback=initMap"></script>
</body>
</html>