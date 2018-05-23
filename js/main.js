(function($) {

    $(window).on('load', function() {
        $(".preloader_wrapper").fadeOut(700);
    });

    $(document).ready(function() {

        var windowSize = $(window).width();

        /************  DROP LIST  *************/

        var dropList = $(".js-drop-list");
        var mainDropList = $(".js-main-drop-list");
        var dropBtn =  $(".js-drop-btn");

        dropBtn.click(function () {

            $(".js-booking").slideUp(400);
            if(windowSize <= 576) {
                dropList.slideUp(400);
            }
            $(this).next(".js-drop-list").slideToggle(500);

        });

        dropBtn.click(function(e) {
            e.stopPropagation();
        });

        $('body').click(function () {
            if(windowSize <= 1000) {
                mainDropList.slideUp(400);
            }
            if(windowSize <= 576) {
                dropList.slideUp(400);
            }
            $(".js-booking").slideUp(400);
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

    //   FILTER OFFER   //

    var filter_room = $(".filter_offers li");
    filter(filter_room);



})(jQuery);


function filter(filter_room){
    filter_room.on('click', function () {
        var $this = $(this);
        var type = $this.data("id");
        var room = $(".offer_container").find(".offer_content");

        $this.siblings("li").removeClass("active");
        $this.addClass("active");

        if(type === "all") {
            room.addClass("active");
        } else {
            room.removeClass("active");
            room.filter('[data-type="'+type+'"]').addClass("active");
        }
    });
    filter_room.filter('[data-id="all"]').trigger('click');
}

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

    return '<div class="offer_content active col-12 col-sm-6 col-xl-4 relative my-15" data-type="'+data.type+'">'+
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


