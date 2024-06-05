jQuery(document).ready(function($) {
    // string date to timestamp
    function dateStringToTimestamp(dateString) {
        // Parse the date string
        var parts = dateString.split('-');
        var day = parseInt(parts[0], 10);
        var month = parseInt(parts[1], 10) - 1; // Months are zero-based in JavaScript
        var year = parseInt(parts[2], 10);
        // Create a Date object
        var date = new Date(year, month, day);
        // Get the timestamp
        var timestamp = date.getTime()/1000;
        return timestamp;
    }

    // get current day timestamp
    function getCurrentDayTimestamp() {
        // Get the current date
        var currentDate = new Date();
        // Set the time to midnight
        currentDate.setHours(0, 0, 0, 0);
        // Get the timestamp in milliseconds
        return currentDate.getTime()/1000;
    }

    // calendar booking
    $("#calendar-booking").datepicker({
        minDate: 0,
        dateFormat: "dd-mm-yy", // Set the date format to dd-mm-yy
        beforeShowDay: function(date) {
            var dateFormat = "dd-mm-yy"; // Define the date format
            var date1 = $.datepicker.parseDate(dateFormat, $("#start_day").val());
            var date2 = $.datepicker.parseDate(dateFormat, $("#end_day").val());
            return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
        },
        onSelect: function(dateText, inst) {
            var dateFormat = "dd-mm-yy"; // Define the date format
            var date1 = $.datepicker.parseDate(dateFormat, $("#start_day").val());
            var date2 = $.datepicker.parseDate(dateFormat, $("#end_day").val());
            var selectedDate = $.datepicker.parseDate(dateFormat, dateText);
    
            if (!date1 || date2) {
                $("#start_day").val(dateText);
                $("#end_day").val("");
                $(this).datepicker();
            } else if (selectedDate < date1) {
                $("#end_day").val($("#start_day").val());
                $("#start_day").val(dateText);
                $(this).datepicker();
            } else {
                $("#end_day").val(dateText);
                $(this).datepicker();
            }
            var start_day = $("#start_day").val(),end_day = $("#end_day").val();
            if(start_day !="" && end_day !=""){
                start_day = dateStringToTimestamp(start_day);
                end_day = dateStringToTimestamp(end_day);
                var total = (end_day - start_day)/86400;
                var day_available_list = new Array();
                var data_day = new Array();
                var all_days_available = true;
                
                $('.day-available input').each(function() {
                    var timestamp = $(this).data('timestamp');
                    var stock = $(this).data('stock');
                    day_available_list.push(timestamp);
                    data_day.push({ timestamp: timestamp, stock: stock });
                });

                // Function to get stocks between a range of timestamps
                function getStocksBetween(startTimestamp, endTimestamp) {
                    return data_day.filter(function(item) {
                        return item.timestamp >= startTimestamp && item.timestamp <= endTimestamp;
                    }).map(function(item) {
                        return item.stock;
                    });
                }

                // Function to get the minimum stock value from the stocksInRange array
                function getMinStockValue(stocksInRange) {
                    if (stocksInRange.length === 0) {
                        return null; // or any other value indicating no stocks in range
                    }
                    return Math.min(...stocksInRange);
                }

                for(var i=0;i<=total;i++){
                    var day_i = start_day + (86400*i);
                    if (!day_available_list.includes(day_i)) {
                        all_days_available = false;
                        break;
                    }
                }

                if (!all_days_available) {
                } else {
                    var stocksInRange = getStocksBetween(start_day, end_day);
                    var minStockValue = getMinStockValue(stocksInRange);
                    $(".wrap-qty-js .qty").val(1);
                    $(".wrap-qty-js .qty").attr("max",minStockValue);
                    $(".wrap-qty-js").removeClass("disable");
                    $(".add-to-cart-hotel").slideDown(100);
                    $("#start_day").data('timestamp',start_day);
                    $("#end_day").data('timestamp',end_day);
                }
            }else{
                $(".add-to-cart-hotel").hide();
            }
        }
    }); 

    // select type of room
    $(".select_type_of_room").on("change", function () { 
        $("body").addClass("ajax-load");
        $('.woocommerce-notices-wrapper').hide();
        $(".add-to-cart-hotel").hide();
        $(".wrap-qty-js").addClass("disable");
        $('#calendar-booking').datepicker('setDate', null);
        var id_variation = $(this).find(':selected').val(),
        price = $(this).find(':selected').data('price'),
        maximum = $(this).find(':selected').data('maximum'),
        event_id = $(this).find(':selected').data('event'),
        hotel_id = $(this).find(':selected').data('hotel'),
        current_day_timestamp = getCurrentDayTimestamp();
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'select_type_of_room',
                id_variation: id_variation,
                price: price,
                maximum: maximum,
                event_id: event_id,
                hotel_id: hotel_id,
                current_day_timestamp: current_day_timestamp
            },
            success: function (response) {
                var price_js = $(".select_type_of_room").find(':selected').data('price');
                var maximum = $(".select_type_of_room").find(':selected').data('maximum');
                var currency = $("#currency").val();
                var price_html = price_js+currency;
                $(".form-booking .day-available").html(response.day_available);
                $('#calendar-booking').datepicker('refresh');
                $("#calendar-booking").slideDown(100);
                $(".wrap-qty-js").slideDown(100);
                $(".js-price-html").text(price_html);
                $(".number-maximum").text(maximum);
                $(".price-typeroom-new").slideDown(100);
                $(".description-typeroom-new").slideDown(100);
                $("body").removeClass("ajax-load");
            },
            error: function (err) {
                console.log(err);
            }
        });
    });

    // add hotel to cart
    $("body").on("click",".add-to-cart-hotel", function (e) { 
        e.preventDefault();
        $("body").addClass("ajax-load");
        $('.woocommerce-notices-wrapper').hide();
        var id_variation = $(".select_type_of_room").find(':selected').val(),
        price = $(".select_type_of_room").find(':selected').data('price'),
        maximum = $(".select_type_of_room").find(':selected').data('maximum'),
        event_id = $(".select_type_of_room").find(':selected').data('event'),
        hotel_id = $(".select_type_of_room").find(':selected').data('hotel'),
        start_day_string = $("#start_day").val(),
        start_day_timestamp = $("#start_day").data("timestamp"),
        end_day_string = $("#end_day").val(),
        end_day_timestamp = $("#end_day").data("timestamp"),
        quantity = $(".form-booking .qty").val(),
        current_day_timestamp = getCurrentDayTimestamp();
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'add_to_cart_hotel',
                id_variation: id_variation,
                price: price,
                maximum: maximum,
                event_id: event_id,
                hotel_id: hotel_id,
                start_day_string: start_day_string,
                start_day_timestamp: start_day_timestamp,
                end_day_string: end_day_string,
                end_day_timestamp: end_day_timestamp,
                quantity: quantity,
                current_day_timestamp: current_day_timestamp
            },
            success: function (response) {
                if(response.success){
                    $('.woocommerce-notices-wrapper').html('<div class="woocommerce-message" role="alert">'+response.message+'</div>');
                }else{
                    $('.woocommerce-notices-wrapper').html('<ul class="woocommerce-error" role="alert"><li>'+response.message+'</li></ul>');
                }
                $('.woocommerce-notices-wrapper').show();
                $('.count-cart').html(response.quantity_total);
                $("body").removeClass("ajax-load");
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
});