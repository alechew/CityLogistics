<?php do_action('wpc_label_before_header_information', $shipmentDetails['shipmentID'] ); ?>
<div id="account-copy" class="copy-section">
	<table class="shipment-header-table" cellpadding="0" cellspacing="0" style="border: 1px solid #000;width: 100%;margin:0;padding:0;">
		<tr>
			<td rowspan="3" class="align-center">
				<?php echo $shipmentDetails['logo']; ?>
			</td>
			<td rowspan="3" class="align-center">
				<img style="float: none !important; margin: 0 !important; width: 180px;height: 50px;" src="<?php echo $shipmentDetails['barcode']; ?>" alt="<?php echo get_the_title( $shipmentDetails['shipmentID'] ); ?>" />
				<p style="margin:0;padding:0;font-weight: bold;"><?php echo get_the_title( $shipmentDetails['shipmentID'] ); ?></p>
				<?php do_action('wpc_label_header_barcode_information', $shipmentDetails['shipmentID'] ); ?>
				<span class="copy-label"><?php _e( 'Accounts Copy', 'wpcargo' ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Pickup Date', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_pickup_date_picker', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Pickup Time', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_pickup_time_picker', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Delivery Date', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_expected_delivery_date_picker', true ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="label"><?php _e('Origin', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_origin_field', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Destination', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_destination', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Courier', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_courier', true ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="label"><?php _e('Carrier', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_carrier_field', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Carrier Reference No.', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_carrier_ref_number', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Departure Time', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_departure_time_picker', true ); ?></span>
			</td>
		</tr>
		<tr>

		</tr>
	</table>
	<table class="shipment-info-table" cellpadding="0" cellspacing="0" style="border: 1px solid #000;width: 100%;margin:0;padding:0;">
		<tr>
			<td>Shipper</td>
			<td><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_name', true ); ?></span></td>
			<td>Consignee</td>
			<td><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_name', true ); ?></span></td>
			<td colspan="2"><span class="label"><?php _e('Status', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_status', true ); ?></span></td>
		</tr>
		<tr>
			<td colspan="2">
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_address', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_phone', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_email', true ); ?></span></br>
			</td>
			<td colspan="2">
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_address', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_phone', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_email', true ); ?></span></br>
			</td>
			<td colspan="2" rowspan="3" style="vertical-align: baseline;"><span class="label"><?php _e('Comment', 'wpcargo'); ?></span>:<br/><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_comments', true ); ?></span></td>
		</tr>
		<tr>
			<td><span class="label"><?php _e('Type of Shipment', 'wpcargo'); ?></span>:<br/><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_type_of_shipment', true ); ?></span></td>
			<td><span class="label"><?php _e('Packages', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_packages', true ); ?></span></td>
			<td><span class="label"><?php _e('Product', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_product', true ); ?></span></td>
			<td><span class="label"><?php _e('Weight', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_weight', true ); ?></span></td>
		</tr>
		<tr>
			<td><span class="label"><?php _e('Total Freight', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_total_freight', true ); ?></td>
			<td><span class="label"><?php _e('Quantity', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_qty', true ); ?></span></td>
			<td><span class="label"><?php _e('Payment Mode', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'payment_wpcargo_mode_field', true ); ?></span></td>
			<td><span class="label"><?php _e('Mode', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_mode_field', true ); ?></span></td>
		</tr>
	</table>
	<?php
	$mp_settings = $shipmentDetails['packageSettings'];
	if( $mp_settings ){
		//** Checked in multiple setting has value
		if( array_key_exists('wpc_mp_enable_admin', $mp_settings)){
			//** Check if the multiple package is Enable
			$packages = $shipmentDetails['packages'];
			if( !empty( $packages ) ){
				//** Check if package array is not empty
				if( count($packages) == 1 ){
					//** Check if package array has value and not empty
					$package = array_filter($packages[0]);
					if( !empty( $package ) ){
						?>
						<table id="shipment-packages" cellpadding="0" cellspacing="0" style="width: 100%;border: none;margin:0;padding:0;">
							<thead>
								<tr>
									<td class="package-description"><?php _e('Description', 'wpcargo'); ?></td>
									<td><?php _e('Qty.', 'wpcargo'); ?></td>
									<td><?php _e('Piece Type', 'wpcargo'); ?></td>
									<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
										<td><?php _e('Length', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
										<td><?php _e('Width', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
										<td><?php _e('Height', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<?php endif; ?>
									<td><?php _e('Weight', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_weight_unit']; ?>)</td>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ( $packages as $package ) {
									?>
									<tr>
										<td class="package-description"><?php echo $package['wpc-pm-description']; ?></td>
										<td><?php echo $package['wpc-pm-qty']; ?></td>
										<td><?php echo $package['wpc-pm-piece-type']; ?></td>
										<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
											<td><?php echo $package['wpc-pm-length']; ?></td>
											<td><?php echo $package['wpc-pm-width']; ?></td>
											<td><?php echo $package['wpc-pm-height']; ?></td>
										<?php endif; ?>
										<td><?php echo $package['wpc-pm-weight']; ?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
						<?php
					}
				}else{
					?>
					<table id="shipment-packages" cellpadding="0" cellspacing="0" style="width: 100%;border: none;margin:0;padding:0;">
						<thead>
							<tr>
								<td class="package-description"><?php _e('Description', 'wpcargo'); ?></td>
								<td><?php _e('Qty.', 'wpcargo'); ?></td>
								<td><?php _e('Piece Type', 'wpcargo'); ?></td>
								<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
									<td><?php _e('Length', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<td><?php _e('Width', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<td><?php _e('Height', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
								<?php endif; ?>
								<td><?php _e('Weight', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_weight_unit']; ?>)</td>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ( $packages as $package ) {
								?>
								<tr>
									<td class="package-description"><?php echo $package['wpc-pm-description']; ?></td>
									<td><?php echo $package['wpc-pm-qty']; ?></td>
									<td><?php echo $package['wpc-pm-piece-type']; ?></td>
									<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
										<td><?php echo $package['wpc-pm-length']; ?></td>
										<td><?php echo $package['wpc-pm-width']; ?></td>
										<td><?php echo $package['wpc-pm-height']; ?></td>
									<?php endif; ?>
									<td><?php echo $package['wpc-pm-weight']; ?></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
					<?php
				}
			}
		}
	}
	?>
</div><!-- account copy -->
<div id="consignee-copy" class="copy-section">
	<table class="shipment-header-table" cellpadding="0" cellspacing="0" style="border: 1px solid #000;width: 100%;margin:0;padding:0;">
		<tr>
			<td rowspan="3" class="align-center">
				<?php echo $shipmentDetails['logo']; ?>
			</td>
			<td rowspan="3" class="align-center">
				<img style="float: none !important; margin: 0 !important; width: 180px;height: 50px;" src="<?php echo $shipmentDetails['barcode']; ?>" alt="<?php echo get_the_title( $shipmentDetails['shipmentID'] ); ?>" />
				<p style="margin:0;padding:0;font-weight: bold;"><?php echo get_the_title( $shipmentDetails['shipmentID'] ); ?></p>
				<?php do_action('wpc_label_header_barcode_information', $shipmentDetails['shipmentID'] ); ?>
				<span class="copy-label"><?php _e( 'Consignee Copy', 'wpcargo' ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Pickup Date', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_pickup_date_picker', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Pickup Time', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_pickup_time_picker', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Delivery Date', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_expected_delivery_date_picker', true ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="label"><?php _e('Origin', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_origin_field', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Destination', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_destination', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Courier', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_courier', true ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="label"><?php _e('Carrier', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_carrier_field', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Carrier Reference No.', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_carrier_ref_number', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Departure Time', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_departure_time_picker', true ); ?></span>
			</td>
		</tr>
		<tr>

		</tr>
	</table>
	<table class="shipment-info-table" cellpadding="0" cellspacing="0" style="border: 1px solid #000;width: 100%;margin:0;padding:0;">
		<tr>
			<td>Shipper</td>
			<td><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_name', true ); ?></span></td>
			<td>Consignee</td>
			<td><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_name', true ); ?></span></td>
			<td colspan="2"><span class="label"><?php _e('Status', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_status', true ); ?></span></td>
		</tr>
		<tr>
			<td colspan="2">
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_address', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_phone', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_email', true ); ?></span></br>
			</td>
			<td colspan="2">
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_address', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_phone', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_email', true ); ?></span></br>
			</td>
			<td colspan="2" rowspan="3" style="vertical-align: baseline;"><span class="label"><?php _e('Comment', 'wpcargo'); ?></span>:<br/><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_comments', true ); ?></span></td>
		</tr>
		<tr>
			<td><span class="label"><?php _e('Type of Shipment', 'wpcargo'); ?></span>:<br/><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_type_of_shipment', true ); ?></span></td>
			<td><span class="label"><?php _e('Packages', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_packages', true ); ?></span></td>
			<td><span class="label"><?php _e('Product', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_product', true ); ?></span></td>
			<td><span class="label"><?php _e('Weight', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_weight', true ); ?></span></td>
		</tr>
		<tr>
			<td><span class="label"><?php _e('Total Freight', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_total_freight', true ); ?></td>
			<td><span class="label"><?php _e('Quantity', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_qty', true ); ?></span></td>
			<td><span class="label"><?php _e('Payment Mode', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'payment_wpcargo_mode_field', true ); ?></span></td>
			<td><span class="label"><?php _e('Mode', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_mode_field', true ); ?></span></td>
		</tr>
	</table>
	<?php
	$mp_settings = $shipmentDetails['packageSettings'];
	if( $mp_settings ){
		//** Checked in multiple setting has value
		if( array_key_exists('wpc_mp_enable_admin', $mp_settings)){
			//** Check if the multiple package is Enable
			$packages = $shipmentDetails['packages'];
			if( !empty( $packages ) ){
				//** Check if package array is not empty
				if( count($packages) == 1 ){
					//** Check if package array has value and not empty
					$package = array_filter($packages[0]);
					if( !empty( $package ) ){
						?>
						<table id="shipment-packages" cellpadding="0" cellspacing="0" style="width: 100%;border: none;margin:0;padding:0;">
							<thead>
								<tr>
									<td class="package-description"><?php _e('Description', 'wpcargo'); ?></td>
									<td><?php _e('Qty.', 'wpcargo'); ?></td>
									<td><?php _e('Piece Type', 'wpcargo'); ?></td>
									<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
										<td><?php _e('Length', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
										<td><?php _e('Width', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
										<td><?php _e('Height', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<?php endif; ?>
									<td><?php _e('Weight', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_weight_unit']; ?>)</td>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ( $packages as $package ) {
									?>
									<tr>
										<td class="package-description"><?php echo $package['wpc-pm-description']; ?></td>
										<td><?php echo $package['wpc-pm-qty']; ?></td>
										<td><?php echo $package['wpc-pm-piece-type']; ?></td>
										<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
											<td><?php echo $package['wpc-pm-length']; ?></td>
											<td><?php echo $package['wpc-pm-width']; ?></td>
											<td><?php echo $package['wpc-pm-height']; ?></td>
										<?php endif; ?>
										<td><?php echo $package['wpc-pm-weight']; ?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
						<?php
					}
				}else{
					?>
					<table id="shipment-packages" cellpadding="0" cellspacing="0" style="width: 100%;border: none;margin:0;padding:0;">
						<thead>
							<tr>
								<td class="package-description"><?php _e('Description', 'wpcargo'); ?></td>
								<td><?php _e('Qty.', 'wpcargo'); ?></td>
								<td><?php _e('Piece Type', 'wpcargo'); ?></td>
								<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
									<td><?php _e('Length', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<td><?php _e('Width', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<td><?php _e('Height', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
								<?php endif; ?>
								<td><?php _e('Weight', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_weight_unit']; ?>)</td>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ( $packages as $package ) {
								?>
								<tr>
									<td class="package-description"><?php echo $package['wpc-pm-description']; ?></td>
									<td><?php echo $package['wpc-pm-qty']; ?></td>
									<td><?php echo $package['wpc-pm-piece-type']; ?></td>
									<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
										<td><?php echo $package['wpc-pm-length']; ?></td>
										<td><?php echo $package['wpc-pm-width']; ?></td>
										<td><?php echo $package['wpc-pm-height']; ?></td>
									<?php endif; ?>
									<td><?php echo $package['wpc-pm-weight']; ?></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
					<?php
				}
			}
		}
	}
	?>
</div><!-- Consignee copy -->
<div id="shippers-copy" class="copy-section">
	<table class="shipment-header-table" cellpadding="0" cellspacing="0" style="border: 1px solid #000;width: 100%;margin:0;padding:0;">
		<tr>
			<td rowspan="3" class="align-center">
				<?php echo $shipmentDetails['logo']; ?>
			</td>
			<td rowspan="3" class="align-center">
				<img style="float: none !important; margin: 0 !important; width: 180px;height: 50px;" src="<?php echo $shipmentDetails['barcode']; ?>" alt="<?php echo get_the_title( $shipmentDetails['shipmentID'] ); ?>" />
				<p style="margin:0;padding:0;font-weight: bold;"><?php echo get_the_title( $shipmentDetails['shipmentID'] ); ?></p>
				<?php do_action('wpc_label_header_barcode_information', $shipmentDetails['shipmentID'] ); ?>
				<span class="copy-label"><?php _e( 'Shippers Copy', 'wpcargo' ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Pickup Date', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_pickup_date_picker', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Pickup Time', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_pickup_time_picker', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Delivery Date', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_expected_delivery_date_picker', true ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="label"><?php _e('Origin', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_origin_field', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Destination', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_destination', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Courier', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_courier', true ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="label"><?php _e('Carrier', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_carrier_field', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Carrier Reference No.', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_carrier_ref_number', true ); ?></span>
			</td>
			<td>
				<span class="label"><?php _e('Departure Time', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_departure_time_picker', true ); ?></span>
			</td>
		</tr>
		<tr>

		</tr>
	</table>
	<table class="shipment-info-table" cellpadding="0" cellspacing="0" style="border: 1px solid #000;width: 100%;margin:0;padding:0;">
		<tr>
			<td>Shipper</td>
			<td><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_name', true ); ?></span></td>
			<td>Consignee</td>
			<td><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_name', true ); ?></span></td>
			<td colspan="2"><span class="label"><?php _e('Status', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_status', true ); ?></span></td>
		</tr>
		<tr>
			<td colspan="2">
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_address', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_phone', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_shipper_email', true ); ?></span></br>
			</td>
			<td colspan="2">
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_address', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_phone', true ); ?></span></br>
				<span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_receiver_email', true ); ?></span></br>
			</td>
			<td colspan="2" rowspan="3" style="vertical-align: baseline;"><span class="label"><?php _e('Comment', 'wpcargo'); ?></span>:<br/><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_comments', true ); ?></span></td>
		</tr>
		<tr>
			<td><span class="label"><?php _e('Type of Shipment', 'wpcargo'); ?></span>:<br/><span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_type_of_shipment', true ); ?></span></td>
			<td><span class="label"><?php _e('Packages', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_packages', true ); ?></span></td>
			<td><span class="label"><?php _e('Product', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_product', true ); ?></span></td>
			<td><span class="label"><?php _e('Weight', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_weight', true ); ?></span></td>
		</tr>
		<tr>
			<td><span class="label"><?php _e('Total Freight', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_total_freight', true ); ?></td>
			<td><span class="label"><?php _e('Quantity', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_qty', true ); ?></span></td>
			<td><span class="label"><?php _e('Payment Mode', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'payment_wpcargo_mode_field', true ); ?></span></td>
			<td><span class="label"><?php _e('Mode', 'wpcargo'); ?></span>: <span class="data"><?php echo get_post_meta( $shipmentDetails['shipmentID'], 'wpcargo_mode_field', true ); ?></span></td>
		</tr>
	</table>
	<?php
	$mp_settings = $shipmentDetails['packageSettings'];
	if( $mp_settings ){
		//** Checked in multiple setting has value
		if( array_key_exists('wpc_mp_enable_admin', $mp_settings)){
			//** Check if the multiple package is Enable
			$packages = $shipmentDetails['packages'];
			if( !empty( $packages ) ){
				//** Check if package array is not empty
				if( count($packages) == 1 ){
					//** Check if package array has value and not empty
					$package = array_filter($packages[0]);
					if( !empty( $package ) ){
						?>
						<table id="shipment-packages" cellpadding="0" cellspacing="0" style="width: 100%;border: none;margin:0;padding:0;">
							<thead>
								<tr>
									<td class="package-description"><?php _e('Description', 'wpcargo'); ?></td>
									<td><?php _e('Qty.', 'wpcargo'); ?></td>
									<td><?php _e('Piece Type', 'wpcargo'); ?></td>
									<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
										<td><?php _e('Length', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
										<td><?php _e('Width', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
										<td><?php _e('Height', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<?php endif; ?>
									<td><?php _e('Weight', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_weight_unit']; ?>)</td>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ( $packages as $package ) {
									?>
									<tr>
										<td class="package-description"><?php echo $package['wpc-pm-description']; ?></td>
										<td><?php echo $package['wpc-pm-qty']; ?></td>
										<td><?php echo $package['wpc-pm-piece-type']; ?></td>
										<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
											<td><?php echo $package['wpc-pm-length']; ?></td>
											<td><?php echo $package['wpc-pm-width']; ?></td>
											<td><?php echo $package['wpc-pm-height']; ?></td>
										<?php endif; ?>
										<td><?php echo $package['wpc-pm-weight']; ?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
						<?php
					}
				}else{
					?>
					<table id="shipment-packages" cellpadding="0" cellspacing="0" style="width: 100%;border: none;margin:0;padding:0;">
						<thead>
							<tr>
								<td class="package-description"><?php _e('Description', 'wpcargo'); ?></td>
								<td><?php _e('Qty.', 'wpcargo'); ?></td>
								<td><?php _e('Piece Type', 'wpcargo'); ?></td>
								<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
									<td><?php _e('Length', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<td><?php _e('Width', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
									<td><?php _e('Height', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_dimension_unit']; ?>)</td>
								<?php endif; ?>
								<td><?php _e('Weight', 'wpcargo'); ?> (<?php echo $mp_settings['wpc_mp_weight_unit']; ?>)</td>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ( $packages as $package ) {
								?>
								<tr>
									<td class="package-description"><?php echo $package['wpc-pm-description']; ?></td>
									<td><?php echo $package['wpc-pm-qty']; ?></td>
									<td><?php echo $package['wpc-pm-piece-type']; ?></td>
									<?php if( array_key_exists('wpc_mp_enable_dimension_unit', $mp_settings)): ?>
										<td><?php echo $package['wpc-pm-length']; ?></td>
										<td><?php echo $package['wpc-pm-width']; ?></td>
										<td><?php echo $package['wpc-pm-height']; ?></td>
									<?php endif; ?>
									<td><?php echo $package['wpc-pm-weight']; ?></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
					<?php
				}
			}
		}
	}
	?>
</div><!-- Shippers copy -->
<?php do_action('wpc_label_footer_information', $shipmentDetails['shipmentID'] ); ?>
</div>
<div style="text-align: center; margin:12px 0;">
	<a href="#" class="button button-secondary print" onclick="wpcargo_print('print-label')"><span class="ti-printer"></span> <?php _e('Print File', 'wpcargo'); ?></a>
</div>