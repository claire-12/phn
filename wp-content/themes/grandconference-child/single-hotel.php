<?php
get_header();
$post_id = get_the_ID();
$lan = get_field('language', $post_id);
$thumbnail_id = get_post_meta($post_id, '_thumbnail_id', true);
$thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'full');
$thumbnail_title = get_the_title($thumbnail_id);
$address = get_field('address', $post_id);
$number_of_people = ($lan === 'french') ? get_field('number_of_people_fr', 'option') : get_field('number_of_people', 'option');
$rooms = ($lan === 'french') ? get_field('rooms_fr', 'option') : get_field('rooms', 'option');
$checkout = ($lan === 'french') ? get_field('checkout_fr', 'option') : get_field('checkout', 'option');
$price = get_field('price', $post_id);
$rooms_hotel = get_field('rooms', $post_id);
$room_is_out = ($lan === 'french') ? get_field('room_is_out_fr', 'option') : get_field('room_is_out', 'option');
$product_id = get_post_meta($post_id, 'product_of_hotels', true);
$maximum_guest_title = ($lan === 'french') ? get_field('maximum_guest_per_room_fr', 'option') : get_field('maximum_guest_per_room', 'option');
$maximum_guest = get_field('maximum_guest_per_room', $post_id);

$text_menu_evh = ($lan === 'french') ? get_field('text_menu_evh_fr', 'option') : get_field('text_menu_evh', 'option');
$text_menu_evt = ($lan === 'french') ? get_field('text_menu_evt_fr', 'option') : get_field('text_menu_evt', 'option');
$text_menu_evp = ($lan === 'french') ? get_field('text_menu_evp_fr', 'option') : get_field('text_menu_evp', 'option');
$text_menu_evhotel = ($lan === 'french') ? get_field('text_menu_evhotel_fr', 'option') : get_field('text_menu_evhotel', 'option');
$text_menu_evpartners = ($lan === 'french') ? get_field('text_menu_evpartners_fr', 'option') : get_field('text_menu_evpartners', 'option');
$title_location = ($lan === 'french') ? get_field('locations_evhotel_fr', 'option') : get_field('locations_evhotel', 'option');
$get_maps_direction = ($lan === 'french') ? get_field('get_maps_direction_fr', 'option') : get_field('get_maps_direction', 'option');

$event_id_url = get_query_var( 'event_id' );
if($event_id_url){
    $event_id_url =  (int) $event_id_url;
}
// if($event_id_url){
    
// }else{
//     if (isset($_SERVER["HTTP_REFERER"])) {
//         $link = str_replace('hotels/', '', $_SERVER["HTTP_REFERER"]);
//     } else {
//         $event_id = get_event_first_hotel($post_id);
//         $link = get_the_permalink($event_id);
//     }
// }

$link = get_the_permalink($event_id_url);
$event_id = $event_id_url;

// var_dump($event_id);
$list_event = get_post_meta($event_id, 'hotel_type-of-rooms', true);
$option_default = ($lan === 'french') ? get_field('option_type_of_room_fr', 'option') : get_field('option_type_of_room', 'option');
$title_price = ($lan === 'french') ? get_field('price_title_hotel_fr', 'option') : get_field('price_title_hotel', 'option');

$desired_array = null;
$hotel_stars = (!empty(get_field('hotel_stars',$post_id))) ? get_field('hotel_stars',$post_id) : 5;

?>
<div class="content-details-hotel">
    <ul class="menu-single-event">
        <li>
            <a href="<?php echo esc_url($link); ?>" class="themelink"><?php echo esc_html($text_menu_evh); ?></a>
        </li>
        <li>
            <a href="<?php echo esc_url($link . 'tickets'); ?>"
                class="themelink"><?php echo esc_html($text_menu_evt); ?></a>
        </li>
        <li>
            <a href="<?php echo esc_url($link . 'planning'); ?>"
                class="themelink"><?php echo esc_html($text_menu_evp); ?></a>
        </li>
        <li>
            <a href="<?php echo esc_url($link . 'hotels'); ?>"
                class="themelink active"><?php echo esc_html($text_menu_evhotel); ?></a>
        </li>
        <li>
            <a href="<?php echo esc_url($link . 'partners'); ?>"
                class="themelink"><?php echo esc_html($text_menu_evpartners); ?></a>
        </li>
        <?php cart_icon_phn(); ?>
    </ul>
    <?php
    if (!empty($address)) {
        ?>
        <div id="map-event">
            <?php
            if (!empty($address['lat']) && !empty($address['lng'])) {
                ?>
                <div id="map-details"></div>
                <?php
            }
            ?>
            <div id="tribe-events-pg-template" class="tribe-events-pg-template-absolute">
                <div class="address-box">
                    <h1 class="title"><?php echo $title_location; ?></h1>
                    <p class="address">
                        <?php
                        if (!empty($address['address'])) {
                            echo $address['address'];
                        }
                        ?>
                    </p>
                    <?php
                    if (!empty($address['lat']) && !empty($address['lng'])) {
                        ?>
                        <a class="button-link-map"
                            href="https://www.google.com/maps?q=<?= $address['lat'] ?>,<?= $address['lng'] ?>" target="_blank">
                            <?php echo $get_maps_direction; ?>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1800 5.8" preserveAspectRatio="none">
                    <path class="elementor-shape-fill"
                        d="M5.4.4l5.4 5.3L16.5.4l5.4 5.3L27.5.4 33 5.7 38.6.4l5.5 5.4h.1L49.9.4l5.4 5.3L60.9.4l5.5 5.3L72 .4l5.5 5.3L83.1.4l5.4 5.3L94.1.4l5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3L161 .4l5.4 5.3L172 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3L261 .4l5.4 5.3L272 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3L361 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3L461 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1L550 .4l5.4 5.3L561 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2L650 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2L750 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2L850 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4V0H-.2v5.8z">
                    </path>
                </svg>
            </div>
        </div>
        <?php
    }
    ?>
    <div id="tribe-events-pg-template" class="details-hotel">
        <h1 class="title-hotel">
            <?php 
                // echo get_the_title() . ' - ' . wc_price($price); 
                echo get_the_title(); 
            ?>
        </h1>
        <?php
            // echo do_shortcode('[list_event_hotel post_id="' . $post_id . '"]');
            if($event_id){
                echo '<div class="event-hotel-list">';
                    echo '<a href="'.get_permalink($event_id).'">'.get_the_title($event_id).'</a>';
                echo '</div>';
            }
        ?>

        <div class="review-hotel">
            <span class="rate"><?php echo number_format($hotel_stars,1); ?></span>
            <div class="list-star">
                <?php echo generateStars($hotel_stars); ?>
            </div>
        </div>

        <div class="woocommerce-notices-wrapper"></div>

        <?php
            $gallery = get_field('gallery');
            if(!$thumbnail_url && !$gallery){
                $thumbnail_url = home_url('/wp-content/uploads/woocommerce-placeholder.png');
            }
        ?>
        <div class="row-hotel">
            <div class="wrap-gallery">
                <div class="gallery">
                    <?php
                        if($thumbnail_url){
                            ?>
                            <div class="item">
                                <a data-fancybox="gallery" data-src="<?php echo $thumbnail_url; ?>"
                                    data-caption="<?php echo $thumbnail_title; ?>">
                                    <img src="<?php echo $thumbnail_url; ?>" alt="">
                                </a>
                            </div>
                            <?php
                        }
                    ?>
                    
                    <?php
                    
                    if ($gallery) {
                        foreach ($gallery as $id) {
                            $image_url = wp_get_attachment_image_url($id, 'full');
                            $image_title = get_the_title($id);
                            ?>
                            <div class="item">
                                <a data-fancybox="gallery" data-src="<?php echo $image_url; ?>"
                                    data-caption="<?php echo $image_title; ?>">
                                    <img src="<?php echo $image_url; ?>" alt="">
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="wrap-form-booking">
                <?php if ($rooms_hotel != 0): ?>
                    <form action="" class="form-booking">

                        <?php
                        
                        if ($list_event) {
                            // echo "<pre>";
                            // var_dump($list_event);
                            foreach ($list_event as $event) {
                                if ($event['hotelId'] == $post_id) {
                                    $desired_array = $event['roomTypes'];
                                    $prices = array();
                                    foreach ($desired_array as $typeroom) {
                                        $price = $typeroom["price"];
                                        if($typeroom["pricenew"] !=""){
                                            $price = $typeroom["pricenew"];
                                        }
                                        $prices[] = $price;
                                    }

                                    $minPrice = min($prices) . get_woocommerce_currency_symbol(get_option('woocommerce_currency'));
                                    $maxPrice = max($prices) . get_woocommerce_currency_symbol(get_option('woocommerce_currency'));
                                    ?>
                                    <h3 class="title">
                                    <?php echo esc_html($title_price); ?> : <?php echo $minPrice; ?> - <?php echo $maxPrice; ?> / <?php echo esc_html($rooms); ?>
                                    </h3>
                                    <div class="event_type-of-room">
                                        <input type="hidden" readonly name="rooms" value="<?php echo esc_html($rooms); ?>"/>
                                        <input type="hidden" readonly name="title_price" value="<?php echo esc_html($title_price); ?>"/>
                                        <input type="hidden" readonly name="descrription_type" value="<?php echo $maximum_guest_title; ?>"/>
                                        <select id="select_typeOfRoom" name="select_typeOfRoom" class="form-control" required>
                                            <option value="" selected disabled><?php echo esc_html($option_default); ?></option>
                                            <?php

                                            $currency = get_woocommerce_currency_symbol(get_option('woocommerce_currency'));
                                            foreach ($desired_array as $type) {
                                                echo '<option  data-description="' . $type["descriptionTypeRoom"] . '" data-currency="' . $currency . '" data-quantity="' . $type["fooEvents"] . '" data-price="' . $type["price"] . '" data-pricenew="' . $type["pricenew"] . '" value="' . $type["name"] . '">' . $type["name"] . '</option>';
                                            }

                                            ?>
                                        </select>
                                        
                                    </div>
                                    <?php
                                } else {


                                }
                            }
                        } else {
                            ?>
                            <h3 class="title">
                                <?php echo $rooms; ?>
                            </h3>
                            <?php
                        }
                        ?>

                        <div class="quantity buttons_added qty-js">
                            <a href="javascript:void(0)" id="minus_qty" class="minus">-</a>
                            <input type="number" id="" class="input-text qty text" name="quantity" value="1"
                                aria-label="Product quantity" size="4" min="1" max="" step="1" placeholder=""
                                inputmode="numeric" autocomplete="off">
                            <a href="javascript:void(0)" id="plus_qty" class="plus">+</a>
                        </div>
                        <div class="content-event">
                            <h6 class="price-typeroom"></h6>
                            <!-- <h6 class="title title-rooms"><?php echo $maximum_guest_title . ' ' . $maximum_guest; ?></h6> -->
                            <h6 class="description-typeroom"></h6>
                        </div>
                        
                        <input type="hidden" class="hotel_id" value="<?php echo $post_id; ?>">
                        <input type="hidden" class="name_typeOfRoom" value="">
                        <input type="hidden" class="price_typeOfRoom" value="">
                        <input type="hidden" class="fooEvents_typeOfRoom" value="">
                        <input type="hidden" class="description_number" value="">
                        <input type="hidden" class="event_id" value="<?php echo $event_id; ?>">
                        <button type="submit" name="add-to-cart" value="<?php echo $product_id; ?>"
                            class="add_hotel_to_cart button alt">
                            <?php echo $checkout; ?>
                        </button>
                    </form>
                <?php else: ?>
                    <p class="out-of-stock-tickets"><?php echo $room_is_out; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="desscription-hotel">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php
echo footer_elementor();
get_footer();
?>
<script>
    jQuery(document).ready(function ($) {
        function initMap() {
            var myLatLng = { lat: <?php echo $address['lat']; ?>, lng: <?php echo $address['lng']; ?> };
            var map = new google.maps.Map(document.getElementById('map-details'), {
                zoom: 16,
                disableDefaultUI: true,
                center: myLatLng
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    fillColor: '#ff2d55',
                    fillOpacity: 0.5,
                    scale: 50,
                    strokeColor: 'transparent',
                    strokeWeight: 0,
                },
            });
        }
        initMap();
    });
</script>