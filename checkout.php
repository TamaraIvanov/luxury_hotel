<html>
<?php include "includes/head.php";?>
<body>
<div id="reservation_review">
    <div id="container">

        <?php include "includes/sidebar.php";?>

        <div id="content">

            <?php include "includes/header.php";?>

            <section id="reservation_review_section">

                <div class="title_wrapper relative">
                    <h2 class="text-center font-weight-bold py-20">Billing Details</h2>
                    <a href="reservation_review.php" class="back absolute font-weight-bold">Back</a>
                </div>

                <form id="js_checkout_form" class="row py-30" method="post" action="">

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="first_name" class="d-block font-weight-bold m-0 py-20">First name</label>
                        <input id="first_name" name="first_name" class="w-100 px-2" type="text"
                               data-rule-required="true" data-msg-required="This field is required !"
                               data-rule-lettersonly="true" data-msg-lettersonly="Letters only please !"/>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="last_name" class="d-block font-weight-bold m-0 py-20">Last name</label>
                        <input id="last_name" name="last_name" class="w-100 px-2" type="text"
                               data-rule-required="true" data-rule-lettersonly="true" data-msg-lettersonly="Only letters please !" data-msg-required="This field is required !"/>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="company_name" class="d-block font-weight-bold m-0 py-20">Company name</label>
                        <input id="company_name" class="w-100 px-2" type="text"/>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="email_name" class="d-block font-weight-bold m-0 py-20">E-mail</label>
                        <input id="email_name" name="email" class="w-100 px-2" type="text"
                               data-rule-required="true" data-msg-required="This field is required !"
                               data-rule-email="true" data-email-required="Please enter a valid email address !" />
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="phone" class="d-block font-weight-bold m-0 py-20">Phone</label>
                        <input id="phone" name="phone" class="w-100 px-2" type="text"
                               data-rule-required="true" data-msg-required="This field is required !"
                               data-rule-number="true" data-number-required="Your phone must be numeric !"/>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="postcode" class="d-block font-weight-bold m-0 py-20">Postcode-zip</label>
                        <input id="postcode" name="postcode" class="w-100 px-2" type="text"
                               data-rule-required="true" data-msg-required="This field is required !"
                               data-rule-number="true" data-number-required="Your phone must be numeric !"
                               data-rule-minlength="5" data-msg-minlength="Postcode must have minimum 5 numbers"/>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="country" class="d-block font-weight-bold m-0 py-20">Country</label>
                        <input id="country" class="w-100 px-2" type="text"
                               data-rule-required="true" data-msg-required="This field is required !"/>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="city" class="d-block font-weight-bold m-0 py-20">City</label>
                        <input id="city" class="w-100 px-2" type="text"
                               data-rule-required="true" data-msg-required="This field is required !"
                               data-rule-lettersonly="true" data-msg-lettersonly="Letters only please !"/>
                    </div>


                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <label for="address" class="d-block font-weight-bold m-0 py-20">Address</label>
                        <input id="address" class="w-100 px-2" type="text"
                               data-rule-required="true" data-msg-required="This field is required !"
                               data-rule-lettersonly="true" data-msg-lettersonly="Letters only please !"/>
                    </div>


                    <button type="submit" class="check_btn py-3 px-5 mt-5">Send</button>
                </form>

                <div class="billing_method_wrapper py-60">
                    <div class="title_wrapper">
                        <h2 class="billing_title text-center font-weight-bold py-20">Choose a payment method</h2>
                    </div>

                    <div class="billing_method py-30 row">
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <img class="px-2 py-20" src="img/card_pay_pal.jpg">
                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <img class="px-2 py-20" src="img/card_mastercard.jpg">
                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <img class="px-2 py-20" src="img/card_american.jpg">
                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <img class="px-2 py-20" src="img/card_visa.jpg">
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

        $("#js_checkout_form").validate({
            messages: {
                email: {
                    email: "Your email address must be in the format of name@domain.com"
                }
            }
        });
    });

</script>
</body>
</html>
