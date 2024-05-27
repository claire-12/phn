<?php
use Automattic\WooCommerce\Utilities\OrderUtil;
use Automattic\WooCommerce\Internal\DataStores\Orders\CustomOrdersTableController;

// WooCommerce Support
function woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

// Redirect Product to Home
function redirect_product_to_home()
{
    if (is_product()) {
        wp_redirect(home_url());
        exit();
    }
}
add_action('template_redirect', 'redirect_product_to_home');

// Reduce ticket hotel stock
function reduce_ticket_hotel_stock($order_id)
{
    if (!$order_id) {
        return;
    }
    $order = wc_get_order($order_id);
    foreach ($order->get_items() as $item_id => $item) {
        $product_id = $item->get_product_id();
        $type = get_post_meta($product_id, 'phn_type_product', true);
        $stock = get_post_meta($product_id, '_stock', true);
        if ($type === "event") {
            $event_id = get_post_meta($product_id, 'events_of_product', true);
            update_post_meta($event_id, 'number_tickets', $stock);
        } else {
            $hotel_id = get_post_meta($product_id, 'hotels_of_product', true);
            update_post_meta($hotel_id, 'rooms', $stock);
        }
    }
}
add_action('woocommerce_thankyou', 'reduce_ticket_hotel_stock');

// Get quantity product in cart
function quantity_product_cart($product_id)
{
    $cart = WC()->cart;
    $cart_items = $cart->get_cart();
    $product_quantity = 0;
    foreach ($cart_items as $cart_item_key => $cart_item) {
        if ($cart_item['product_id'] === $product_id) {
            $product_quantity = $cart_item['quantity'];
            break;
        }
    }
    return $product_quantity;
}

// Custom cart item permalink
function custom_cart_item_permalink($permalink, $cart_item, $cart_item_key)
{
    if (is_cart()) {
        $product_id = $cart_item['product_id'];
        $type = get_post_meta($product_id, 'phn_type_product', true);
        if ($type === "event") {
            $post_id = get_post_meta($product_id, 'events_of_product', true);
            $permalink = get_permalink($post_id);
        } else {
            $id_ticket = id_ticket_in_cart();
            $post_id = get_post_meta($product_id, 'hotels_of_product', true);
            $permalink = get_permalink($post_id) . $id_ticket;
        }
    }
    return $permalink;
}
add_filter('woocommerce_cart_item_permalink', 'custom_cart_item_permalink', 10, 3);

// Define custom function to modify product permalink
function custom_modify_product_permalink($permalink, $post)
{
    if ('product' === $post->post_type && !is_admin()) {
        $permalink = permalink_custom($post->ID);
    }

    if (is_checkout() && get_query_var('order-received')) {
        $order_id = absint(get_query_var('order-received'));
        $order = wc_get_order($order_id);
        foreach ($order->get_items() as $item_id => $item) {
            $product_id = $item->get_product_id();
            $type = get_post_meta($product_id, 'phn_type_product', true);
            if ($type === "event") {
                $id_ticket = get_post_meta($product_id, 'events_of_product', true);
                break;
            }
        }

        if (get_post_type($post->ID) === 'hotel') {
            $permalink .= $id_ticket;
        }
    }

    return $permalink;
}
add_filter('post_type_link', 'custom_modify_product_permalink', 10, 2);

// Permalink custom
function permalink_custom($product_id)
{
    $type = get_post_meta($product_id, 'phn_type_product', true);
    $post_id = ($type === "event") ? get_post_meta($product_id, 'events_of_product', true) : get_post_meta($product_id, 'hotels_of_product', true);
    return get_permalink($post_id);
}

// Define custom function to modify product edit order admin
function custom_modify_product_edit_order_admin($item_id, $item, $product)
{
    if ($product) {
        $product_id = $product->get_id();
        $type = get_post_meta($product_id, 'phn_type_product', true);
        $post_id = ($type === "event") ? get_post_meta($product_id, 'events_of_product', true) : get_post_meta($product_id, 'hotels_of_product', true);
        $product_link = $product ? admin_url('post.php?post=' . $post_id . '&action=edit') : '';
        echo '<a href="' . $product_link . '" class="wc-order-item-name custom">' . $item->get_name() . '</a>';
        // echo woocommerce_add_text_after_item($product_id);
    }
}
add_action('woocommerce_before_order_itemmeta', 'custom_modify_product_edit_order_admin', 10, 3);

// Custom add text after cart item name
function custom_add_text_after_cart_item_name($cart_item, $cart_item_key)
{
    // echo woocommerce_add_text_after_item($cart_item['product_id']);
}
add_action('woocommerce_after_cart_item_name', 'custom_add_text_after_cart_item_name', 10, 3);

// Custom add text after checkout item name
function custom_add_text_after_checkout_item_name($item_id, $item, $order)
{
    // echo woocommerce_add_text_after_item($item['product_id']);
}
add_action('woocommerce_order_item_meta_end', 'custom_add_text_after_checkout_item_name', 10, 3);

// Woocommerce add text after item
// function woocommerce_add_text_after_item($product_id ){
//     $text = '';
//     $type = get_post_meta( $product_id, 'phn_type_product', true );
//     if($type === "hotel"){
//         $per_room_title = get_field('maximum_guest_per_room','option');
//         $per_room = get_post_meta( $product_id, 'maximum_guest_per_room', true );
//         $text = '<p style="margin:0;padding:0;">'.$per_room_title.': '.$per_room.'</p>';
//     }
//     return $text;
// }

// Wooocommerce admin css
function wooocommerce_admin_css()
{
    echo "<style>
        .wc-order-items-editable #order_line_items .wc-order-item-name:not(.custom){
            display: none;
        }
    </style>";
}
add_action('admin_head', 'wooocommerce_admin_css');

// Action after checkout load page thankyou
function action_after_checkout_load_page_thankyou($order_id)
{
    if (!$order_id) {
        return;
    }

    $action_order_phn = get_post_meta($order_id, 'action_order_phn', true);

    if (!$action_order_phn) {

        $order = wc_get_order($order_id);

        // Update status order
        if ($order->get_status() == 'processing') {
            $order->update_status('completed');
        }

        // Send email hotel after checkout
        if ($order && is_send_email_hotel($order)) {
            $email = $order->get_billing_email();
            $status = $order->get_status();
            if ($status === "processing" || $status === "completed") {
                set_query_var('order', $order);
                ob_start();
                get_template_part('includes/emails/email-booking-hotel');
                $body = ob_get_contents();
                ob_end_clean();
                $subject = get_field('subject_email_order_hotel', 'option');
                $headers = array('Content-Type: text/html; charset=UTF-8', 'From: WordPress <wordpress@phn.pixodeo.dev>');
                wp_mail($email, $subject, $body, $headers);
            }
        }

        // Save information user ticket
        create_entry_infor_customer_buy_ticket($order_id);

        update_post_meta($order_id, 'action_order_phn', true);
    }
}
add_action('woocommerce_thankyou', 'action_after_checkout_load_page_thankyou', 10, 2);

// Is send email hotel
function is_send_email_hotel($order)
{
    $status = false;
    foreach ($order->get_items() as $item_id => $item) {
        $product_id = $item->get_product_id();
        $type = get_post_meta($product_id, 'phn_type_product', true);
        if ($type === "hotel") {
            $status = true;
            break;
        }
    }
    return $status;
}

// Number ticket in cart
function number_ticket_in_cart()
{
    $cart = WC()->cart;
    $cart_items = $cart->get_cart();
    $quantity = 0;
    if ($cart_items) {
        foreach ($cart_items as $cart_item_key => $cart_item) {
            $product_id_cart = $cart_item['product_id'];
            $type = get_post_meta($product_id_cart, 'phn_type_product', true);
            if ($type === 'event') {
                $quantity = $cart_item['quantity'];
            }
        }
    }
    return $quantity;
}

// Remove meta box order woocommerce
function remove_meta_box_order_woocommerce()
{
    echo '<style>
            #woocommerce_events_order_details,#vx_export{
                display: none;
            }
        </style>
        <script>
            jQuery(document).ready(function($){
                $("#woocommerce_events_order_details").remove();
            });
        </script>';
}
add_action('admin_footer', 'remove_meta_box_order_woocommerce');

//Multiple form during checkout
function multiple_forms_shortcode()
{
    ob_start();
    if (!is_admin()) {
        $cart = WC()->cart;
        $cart_items = $cart->get_cart();
        if ($cart_items) {
            $quantity = 0;
            foreach ($cart_items as $cart_item_key => $cart_item) {
                $product_id_cart = $cart_item['product_id'];
                $type = get_post_meta($product_id_cart, 'phn_type_product', true);
                if ($type === 'event') {
                    $quantity = $cart_item['quantity'];
                    $event_id = get_post_meta($product_id_cart, 'events_of_product', true);
                    $form_event = get_field('form_event', $event_id);
                }
            }
            if ($quantity != 0) {
                ?>
                <div id="multiple-form">
                    <?php
                    for ($i = 1; $i <= $quantity; $i++) {
                        $class = ($i == $quantity) ? 'last' : '';
                        ?>
                        <div class="toggle form-<?php echo $i; ?> <?php echo $class; ?>">
                            <h2>Form Ticket <?php echo $i; ?></h2>
                            <?php echo do_shortcode('[contact-form-7 id="' . $form_event . '"]'); ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="action">
                        <span id="prev-form"></span>
                        <span id="next-form"></span>
                    </div>
                </div>
                <?php
            }
        }
    }
    $result = ob_get_contents();
    ob_end_clean();
    return $result;
}

// Add orders ticket meta boxes
function add_orders_ticket_meta_boxes($post_type, $post)
{
    $screens = array('shop_orders', 'shop_order');
    $id = '';

    if (isset($_GET['id'])) {
        $id = sanitize_text_field(wp_unslash($_GET['id']));
    } else {
        $id = $post->ID;
    }

    foreach ($screens as $screen_name) {
        if (('shop_order' === get_post_type($id) && isset($_GET['post'])) || (isset($_GET['page']) && 'wc-orders' === $_GET['page'] && isset($id))) {
            $order = wc_get_order($id);
            $woocommerce_events_order_tickets = $order->get_meta('WooCommerceEventsOrderTickets', true);
            $woocommerce_events_order_admin_add_ticket = $order->get_meta('WooCommerceEventsOrderAdminAddTicket', true);
            if (!empty($woocommerce_events_order_tickets) || 'yes' === $woocommerce_events_order_admin_add_ticket) {
                $screen = wc_get_container()->get(CustomOrdersTableController::class)->custom_orders_table_usage_is_enabled() ? wc_get_page_screen_id($screen_name) : $screen_name;
                add_meta_box(
                    'woocommerce_events_order_ticket_details',
                    __('Attendee Details', 'woocommerce-events'),
                    'add_orders_ticket_meta_boxes_details',
                    $screen,
                    'normal'
                );
            }
        }
    }
}
add_action('add_meta_boxes', 'add_orders_ticket_meta_boxes', 10, 2);

// Add orders ticket meta boxes details
function add_orders_ticket_meta_boxes_details($post)
{
    $id = '';
    if (isset($_GET['id'])) {
        $id = sanitize_text_field(wp_unslash($_GET['id']));
    } else {
        $id = $post->ID;
    }

    $order = wc_get_order($id);
    $order_status = $order->get_status();
    $woocommerce_events_sent_ticket = $order->get_meta('WooCommerceEventsTicketsGenerated', true);
    $global_woocommerce_events_send_on_status = get_option('globalWooCommerceEventsSendOnStatus');
    $order_statuses = wc_get_order_statuses();

    $status_output = '';
    if (!is_array($global_woocommerce_events_send_on_status) && !empty($global_woocommerce_events_send_on_status)) {
        $status_output = $order_statuses[$global_woocommerce_events_send_on_status];
    } elseif (!empty($global_woocommerce_events_send_on_status)) {
        foreach ($global_woocommerce_events_send_on_status as $status) {
            $status_output .= $order_statuses[$status] . ', ';
        }
        $status_output = substr($status_output, 0, strlen($status_output) - 2);
    } else {
        $status_output = 'Completed';
    }

    if ('yes' === $woocommerce_events_sent_ticket) {
        $tickets_query = new WP_Query(
            array(
                'post_type' => array('event_magic_tickets'),
                'posts_per_page' => -1,
                'meta_query' => array(
                    array(
                        'key' => 'WooCommerceEventsOrderID',
                        'value' => $id,
                        'compare' => '=',
                    ),
                ),
            )
        );
        $event_tickets = $tickets_query->get_posts();
        $config = new FooEvents_Config();
        $FooEvents_Orders_Helper = new FooEvents_Orders_Helper($config);
        $woocommerce_events_order_tickets = $FooEvents_Orders_Helper->process_event_tickets_for_display($event_tickets);
        set_query_var('woocommerce_events_order_tickets', $woocommerce_events_order_tickets);
        get_template_part('template-metabox/order', 'tickets');
    }
}

// Information user each ticket
function information_user_each_ticket($ticket_id)
{
    global $wpdb;
    $information = [];
    $sql = "SELECT id,form_id FROM {$wpdb->prefix}vxcf_leads WHERE meta = $ticket_id";
    $result = $wpdb->get_results($sql);
    if ($result) {
        $lead_id = (int) $result[0]->id;
        $form_id = $result[0]->form_id;
        $tags = vxcf_form::get_form_fields($form_id);
        $vxcf_form = new vxcf_form();
        $entry_detail = $vxcf_form->get_entry_detail($lead_id);
        if ($entry_detail && $tags) {
            unset($entry_detail['order_id']);
            unset($entry_detail['ticket_id']);
            foreach ($entry_detail as $key => $value) {
                if ($tags[$key]['values']) {
                    $name = $tags[$key]['values'][0]['label'];
                } else {
                    $name = $tags[$key]['label'];
                }
                $information[] = ['name' => $name, 'value' => $value['value']];
            }
        }
    }
    return $information;
}

// Quantity cart
function quantity_cart()
{
    $total_quantity = 0;
    if (class_exists('WooCommerce')) {
        $cart_contents = WC()->cart->get_cart();
        foreach ($cart_contents as $cart_item_key => $cart_item) {
            $total_quantity += $cart_item['quantity'];
        }
    }
    return $total_quantity;
}

// Cart icon
function cart_icon_phn()
{
    echo '<li>
        <a href="' . wc_get_cart_url() . '" class="themelink cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="count-cart">' . quantity_cart() . '</span>
        </a>
    </li>';
}

// Id ticket in cart
function id_ticket_in_cart()
{
    $id_ticket = 0;
    $cart = WC()->cart;
    $cart_items = $cart->get_cart();
    foreach ($cart_items as $cart_item_key => $cart_item) {
        $product_id = $cart_item['product_id'];
        $type = get_post_meta($product_id, 'phn_type_product', true);
        if ($type === "event") {
            $id_ticket = get_post_meta($product_id, 'events_of_product', true);
            break;
        }
    }
    return $id_ticket;
}

// Custom get privacy policy text
function custom_get_privacy_policy_text($text)
{
    if (is_checkout()) {
        $id_ticket = id_ticket_in_cart();
        if ($id_ticket != 0) {
            $lan = get_field('language', $id_ticket);
            $url_to_postid = url_to_postid(wc_get_checkout_url());
            if ($lan === 'french') {
                $text = get_field('terms_and_conditions_french', $url_to_postid);
            }
        }
    }
    return $text;
}
add_filter('woocommerce_get_privacy_policy_text', 'custom_get_privacy_policy_text');

// Custom cart item price
function custom_cart_item_price($wc_cart)
{
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    foreach (WC()->cart->get_cart() as $key => $cart_item) {
        if (isset($cart_item['array_typeOfRoom'])) {
            $cart_item['data']->set_price($cart_item['array_typeOfRoom']['roomTypes'][0]['price']);
        }
    }
}
add_action('woocommerce_before_calculate_totals', 'custom_cart_item_price', 20, 1);

// Custom override checkout fields
function custom_override_checkout_fields($fields)
{
    $fields['billing']['billing_address_2']['required'] = true;
    return $fields;
}
// add_filter( 'woocommerce_checkout_fields', 'custom_override_checkout_fields' );

// Custom text tax cart
function custom_text_tax_cart($value)
{
    if (isset($_SESSION['locale'])) {
        $locale = $_SESSION['locale'];
        if ($locale === 'fr_FR') {
            $text = "TVA";
        } else {
            $text = "VAT";
        }
        $value = str_replace('Tax hotel', $text, $value);
        $value = str_replace('Tax ticket', $text, $value);
    }
    return $value;
}
add_filter('woocommerce_cart_totals_order_total_html', 'custom_text_tax_cart');

function number_room_in_cart()
{
    $cart = WC()->cart;
    $cart_items = $cart->get_cart();
    $quantity = 0;
    if ($cart_items) {
        foreach ($cart_items as $cart_item_key => $cart_item) {
            $product_id_cart = $cart_item['product_id'];
            $type = get_post_meta($product_id_cart, 'phn_type_product', true);
            if ($type === 'hotel') {
                $quantity = $cart_item['quantity'];
            }
        }
    }
    return $quantity;
}
if (!is_admin()) {
    function multiple_forms_room_shortcode()
    {
        ob_start();

        $cart = WC()->cart;
        $cart_items = $cart->get_cart();
        if ($cart_items) {
            $quantity = 0;
            foreach ($cart_items as $cart_item_key => $cart_item) {
                $product_id_cart = $cart_item['product_id'];
                $type = get_post_meta($product_id_cart, 'phn_type_product', true);
                if ($type === 'hotel') {
                    $quantity = $cart_item['quantity'];
                    // $event_id = get_post_meta($product_id_cart, 'events_of_product', true);
                    // $form_event = get_field('form_event', $event_id);
                }
            }
            
            if ($quantity != 0) {
                ?>
                <div id="multiple-form-room">
                    <?php
                    for ($i = 1; $i <= $quantity; $i++) {
                        $class = ($i == $quantity) ? 'last' : '';
                        ?>
                        <div class="toggle form-<?php echo $i; ?> <?php echo $class; ?>">
                            
                            <h2>Form Room<?php echo $i; ?></h2>
                            <?php echo do_shortcode('[contact-form-7 id="8722398" title="Form Room Checkout"]'); ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="action">
                        <span id="prev-form-room"></span>
                        <span id="next-form-room"></span>
                    </div>
                </div>
                <?php
            }
        }

        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
}
?>