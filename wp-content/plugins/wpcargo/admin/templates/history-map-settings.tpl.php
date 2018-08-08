<form method="post" action="options.php">
	<?php
	settings_fields( 'wpc_shmap_option_group' );
	do_settings_sections( 'wpc_shmap_option_group' ); ?>
	<table class="form-table">
		<tr>
			<th><?php _e('Enable Shipment History Map', WPCARGO_TEXTDOMAIN ); ?></th>
			<td>
				<input type="checkbox" name="shmap_active" value="1" <?php checked( $shmap_active, 1 ); ?>>
			</td>
		</tr>
		<tr>
			<th><?php _e('Google Map API Key', WPCARGO_TEXTDOMAIN ); ?></th>
			<td>
				<input style="width: 380px;" type="text" name="shmap_api" value="<?php echo $shmap_api; ?>">
				<p class="description"><?php _e('Please click here to get Google Map API Key',WPCARGO_TEXTDOMAIN ); ?> <a class="button button-primary button-small" href="https://developers.google.com/maps/documentation/embed/get-api-key" target="_blank"><?php _e('Get API Key',WPCARGO_TEXTDOMAIN ); ?></a></p>
			</td>
		</tr>
		<tr>
			<th><?php _e('Google Map Label Color', WPCARGO_TEXTDOMAIN ); ?></th>
			<td>
				<p><input type="text" class="color-field" name="shmap_label_color" value="<?php echo $shmap_label_color; ?>" placeholder="#000"/></p>
			</td>
		</tr>
		<tr>
			<th><?php _e('Google Map Label Size', WPCARGO_TEXTDOMAIN ); ?></th>
			<td>
				<p><input type="text" name="shmap_label_size" value="<?php echo $shmap_label_size; ?>" placeholder=""/>px</p>
			</td>
		</tr>
		<th scope="row"><?php _e( 'Google Map Marker', WPCARGO_TEXTDOMAIN ) ; ?></th>
			<td>
				<input type="text" name='shmap_marker' id="image-chooser" value="<?php echo $shmap_marker;?>"><a id="choose-image" class="button" ><?php _e( 'Upload Logo', WPCARGO_TEXTDOMAIN ) ; ?></a>
				<script>
				jQuery(document).ready(function($){
				 // Uploading files
					var file_frame;
					$('#choose-image').live('click', function( event ){
						event.preventDefault();
						// If the media frame already exists, reopen it.
						if ( file_frame ) {
							file_frame.open();
							return;                        }
							// Create the media frame.
							file_frame = wp.media.frames.file_frame = wp.media({
								title: $( this ).data( 'uploader_title' ),
								button: {
									text: $( this ).data( 'uploader_button_text' ),
								},
								multiple: false
								// Set to true to allow multiple files to be selected
							});
							// When an image is selected, run a callback.
							file_frame.on( 'select', function() {
							// We set multiple to false so only get one image from the uploader
							attachment = file_frame.state().get('selection').first().toJSON();
							// Do something with attachment.id and/or attachment.url here
							$('#image-chooser').val( attachment.url );
						});
						// Finally, open the modal
						file_frame.open();
					});
				});
				</script>

			</td>
	</table>
	<input class="button button-primary button-large" type="submit" name="submit" value="<?php _e('Save Map Settings', WPCARGO_TEXTDOMAIN ); ?>">
</form>