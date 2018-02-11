(function($) {

    $(window).on('load', function() {
        $(".preloader_wrapper").fadeOut(700);
    });

    $(document).ready(function() {

        $('.js_drop_down_btn_menu').click(function(e) {
            $('.js_drop_down_menu').slideToggle(400);
            e.stopPropagation();
        });

        $(".js_drop_down_btn").click(function(e){
            var $dropMenu = $(this).siblings(".js_drop_down");
            $dropMenu.slideToggle(400);
            $('.js_drop_down').not($dropMenu).slideUp(400);
            e.stopPropagation();
        });

        $('.js_drop_down, .js_drop_down_menu').click(function(e) {
            e.stopPropagation();
        });

        $('body').click(function () {
            $('.js_drop_down').slideUp(400);
            if($('.js_drop_down_btn_menu').is(':visible')) {
                $('.js_drop_down_menu').slideUp(400);
            }
        });

        $(".language_list li").click(function(){
            LanguageChoose($(this));
        });

    });


    function LanguageChoose(elem){

        var data_name = elem.text();
        var input = elem.closest('div').find('div');

        input.text(data_name);
    }


})(jQuery);

var page = 4;

function paginateData(url, data, type, selector) {

    $.ajax({
        method: "POST",
        url: url,
        dataType: 'json',
        data: data
    })

    .done(function(result) {

        if(result.success) {
            console.log(result.data);

            var htmlData = '';
            for(var i = 0; i < result.data.length; i++) {
                if(type === 'rooms') {
                    htmlData += generateRoomsHtml(result.data[i]);
                }

                if(type === "restaurant") {
                    htmlData += generateRestaurantHtml(result.data[i]);
                }

            }
            $(selector).append(htmlData);
            page++;
        }

    });
}

function generateRoomsHtml(data) {

    return '<div class="offer_content col-12 col-sm-6 col-xl-4 relative my-15">'+
        '<a href="room_review.php"><img src="'+data.image+'" class="w-100"></a>'+
        '<div class="price absolute top0 p5">'+
        '<span class="d-block text-center font-weight-bold">'+data.price+'$</span>'+
        '<span class="d-block text-center">per night</span>'+
        '<div class="triangle absolute left0"></div>'+
        '<div class="triangle absolute right0 rotate"></div>'+
        '</div>'+

        '<div class="offer_name_wrapper relative">'+
        '<div class="offer_name w-100 text-center absolute">'+
        '<h3 class="py-20 m-0">'+data.title+'</h3>'+
        '<a class="book_room d-inline-block p5-10" href="room_review.php">Book Now</a>'+
        '</div></div></div>';

}

function generateRestaurantHtml(data) {

    return '<div class="offer_content col-12 col-sm-6 col-xl-4 float-left relative my-15">'+
        '<img src="'+data.image+'" class="w-100">'+
        '<div class="price absolute top0 p5">'+
        '<span class="d-block text-center font-weight-bold py-2">'+data.price+'$</span>'+
        '<span class="d-block text-center">per night</span>'+
        '<div class="triangle absolute left0"></div>'+
        '<div class="triangle absolute right0 rotate"></div>'+
        '</div>'+

        '<div class="offer_name_wrapper relative">'+
        '<div class="offer_name w-100 text-center absolute pb-3">'+
        '<h3 class="py-20 m-0">'+data.title+'</h3>'+
        '<p>(Samon, Avocado, Lettuce, Cherry tomato,  Lemon)</p>'+
        '</div></div></div>';

}


