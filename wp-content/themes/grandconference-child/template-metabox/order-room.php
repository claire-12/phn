<?php
/**
 * Order room generated template
 *
 * @link https://www.fooevents.com
 * @package woocommerce_events
 */
$config = new FooEvents_Config();
$FooEvents_Orders_Helper = new FooEvents_Orders_Helper($config);
?>
<div id="fooevents-orders-ticket-details">
	<div class="clear"></div>
	
	<?php 
	foreach ( $woocommerce_order_room as $event ) : ?>
		<div class="fooevents-orders-ticket-details-container">
			<div class="fooevents-orders-ticket-details-tickets">
				<?php
				 foreach ( $event['tickets'] as $ticket ) : ?>
					<div class="fooevents-orders-ticket-details-tickets-inner"> 
						<table id="fooevents-order-attendee-details" cellpadding="0" cellspacing="0"> 
							<?php
								$room_id = $ticket['WooCommerceEventsTicketID'];
								$information_user_each_room = information_user_each_room($room_id);
								if($information_user_each_room){
									foreach($information_user_each_room as $value){
										?>
										<tr>
											<td><strong><?php echo esc_attr( $value['name'] ); ?>:</strong></td>
											<td>
												<?php 
													if(filter_var($value['value'], FILTER_VALIDATE_EMAIL)) {
														?>
														<a href="mailto:<?php echo esc_attr( $value['value'] ); ?>"><?php echo esc_attr( $value['value'] ); ?></a>
														<?php
													}
													else {
														echo esc_attr( $value['value'] );
													}
												?>
											</td>
										</tr>
										<?php
									}
								}
							?>
						</table>
						<div class="clear"></div>
					</div>
				<?php endforeach; ?>
			</div>
			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	<?php endforeach; ?>
</div>