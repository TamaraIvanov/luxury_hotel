<?php include "head.php";?>
<footer id="footer" class="no-display">
    <div class="contact_wrapper py-4 px-3">

        <div class="contact py-4 col-sm-6">
            <address class="py-2 m-0">1133 N.Dysart Road, 56789, GR</address>
            <a class="mail py-2" href="mailto:INFO@LUXURYHOTEL.COM">info@diamondhotel.com</a>
            <a class="tel py-2" href="tel:+3 653-306-6100">+30 666-33</a>
        </div>

        <ul class="social py-2 col-12 mb-0 col-sm-6 clearfix">
            <li class="facebook float-left"><i class="fa fa-facebook" aria-hidden="true"></i></li>
            <li class="twitter float-left"><i class="fa fa-twitter" aria-hidden="true"></i></li>
            <li class="instagram float-left"><i class="fa fa-instagram" aria-hidden="true"></i></li>
            <li class="youtube float-left"><i class="fa fa-youtube" aria-hidden="true"></i></li>
        </ul>
    </div>
</footer>

<script src="js/jquery-3.1.1.js"></script>
<script src="js/tether-1.4.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/select2/select2.js"></script>
<script src="js/select2/select2-bootstrap-min.js"></script>
<script src="js/main.js"></script>

<script>
    (function($) {
        $(function() {

            $(".select_room").select2({
                placeholder: 'Select a room',
                allowClear: true,
                theme: "classic"
            });

            $("#js_adult,#js_children ").select2({
                placeholder: 'Select a adult',
                allowClear: true,
                theme: "classic"
            });

            $.validator.addMethod("greaterThanDate",
                function(value, element, params) {

                    var elementVal = $(element).val();
                    var	paramsVal = $(params).val();

                    var startDate = new Date(swapPositionDate(paramsVal)).getTime();
                    var endDate = new Date(swapPositionDate(elementVal)).getTime();

                    return endDate > startDate;

                }, 'Must be greater than {0}.');

            $("#check_form").validate();


            $("#js_check_in, #js_check_out ").datepicker({
                format: "dd.mm.yyyy",
                weekStart: 1,
                todayHighlight: true,
                startDate: 'd',
                autoclose: true

            });
        });

        function swapPositionDate(date) {

            var dateParams = date.split(".");
            return dateParams[1]+'/'+dateParams[0]+'/'+dateParams[2];
        }

    })(jQuery);

</script>

