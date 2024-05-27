jQuery( document ).ready(function($) {
    // click show content planning day
    $(".wrap-scheduleday").on("click",".scheduleday_title", function() {
        var data = $(this).data("tab");
        $(".wrap-scheduleday .scheduleday_title").removeClass("active");
        $(this).addClass("active");
        $(".wrap-scheduleday .tab_content").addClass("hide");
        $(".wrap-scheduleday #"+data+"").removeClass("hide");
    });

    // click show description
    $(".wrap-scheduleday").on("click",".session_speakers", function(e) {
        e.preventDefault();
        $(this).closest(".engineering").find(".session_content_extend").toggleClass("hide");
    });

    // quantity plus minus
    $('.qty-js').on( 'click', '.plus, .minus', function() {
        var qty = $( this ).closest( '.qty-js' ).find( '.qty' );
        var val   = parseFloat(qty.val());
        var max = parseFloat(qty.attr( 'max' ));
        var min = parseFloat(qty.attr( 'min' ));
        var step = parseFloat(qty.attr( 'step' ));
        if ( $( this ).is( '.plus' ) ) {
            if ( max && ( max <= val ) ) {
                qty.val( max );
            } else {
                qty.val( val + step );
            }
        } else {
            if ( min && ( min >= val ) ) {
                qty.val( min );
            } else if ( val > 1 ) {
                qty.val( val - step );
            }
        }
    });

    // limit qty 
    $('.qty-js .qty').keypress(function(event) {
        var maxValue = $(this).attr('max');

        // Allow backspace, delete, tab, escape, enter, and '.' for decimals
        if (event.which == 8 || event.which == 46 || event.which == 0 || event.which == 9 || event.which == 27 || event.which == 13) {
            return;
        }
        
        // Convert the input value to a number
        var inputValue = parseFloat($(this).val() + String.fromCharCode(event.which));
        
        // Check if the new value exceeds the maximum
        if (inputValue > maxValue) {
            event.preventDefault(); // Prevent the keypress
        }
    });

    // fancybox
    Fancybox.bind('[data-fancybox]', {
        Toolbar: {
            display: {
                left: ["infobar"],
                middle: [
                    "zoomIn",
                    "zoomOut",
                    "toggle1to1",
                    "rotateCCW",
                    "rotateCW",
                    "flipX",
                    "flipY",
                ]
            },
        },
    });

    // Gallery hotel
    $('.gallery').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    //Waiting for form to be loaded 
    $(window).on("load", function() {
        $('#multiple-form').fadeIn('slow');
        var $el = $('.toggle.active');
        if (!$el.length) {
        $('.toggle').first().addClass('active');
        }
    });
    $(window).on("load", function() {
        $('#multiple-form-room').fadeIn('slow');
        var $el = $('.toggle.active');
        if (!$el.length) {
        $('.toggle').first().addClass('active');
        }
    });
    
    // Prev form
    $('#prev-form').click(function() {
        var $el = $('.active').prev('.toggle');
        if (!$el.length) //If no previous, s$elect last
        {
        $el = $('.toggle').last();;
        }
        $('.active').removeClass('active');
        $el.addClass('active');
    });
    
    // Next form
    $('#next-form').click(function() {
        var $el = $('.active').next('.toggle');
        if (!$el.length) //If no next, s$elect first
        {
        $el = $('.toggle').first();
        }
        $('.active').removeClass('active');
        $el.addClass('active');
    });

    $('#prev-form-room').click(function() {
        var $el = $('.active').prev('.toggle');
        if (!$el.length) //If no previous, s$elect last
        {
        $el = $('.toggle').last();;
        }
        $('.active').removeClass('active');
        $el.addClass('active');
    });
    
    // Next form
    $('#next-form-room').click(function() {
        var $el = $('.active').next('.toggle');
        if (!$el.length) //If no next, s$elect first
        {
        $el = $('.toggle').first();
        }
        $('.active').removeClass('active');
        $el.addClass('active');
    });
});