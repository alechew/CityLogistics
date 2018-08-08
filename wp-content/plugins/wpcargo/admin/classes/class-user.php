<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
class WPCargo_User{
	function __construct(){

		add_action( 'show_user_profile', array( $this, 'extra_profile_fields' ) );
		add_action( 'edit_user_profile', array( $this, 'extra_profile_fields' ) );

		add_action( 'personal_options_update', array( $this, 'save_extra_profile_fields' ) );
		add_action( 'edit_user_profile_update', array( $this, 'save_extra_profile_fields' ) );
	}


	function extra_profile_fields( $user ) {
		$current_offset = get_option('gmt_offset');
		$tzstring 		= get_option('timezone_string');

		$check_zone_info = true;

		// Remove old Etc mappings. Fallback to gmt_offset.
		if ( false !== strpos($tzstring,'Etc/GMT') )
			$tzstring = '';

		if ( empty($tzstring) ) { // Create a UTC+- zone if no timezone string exists
			$check_zone_info = false;
			if ( 0 == $current_offset )
				$tzstring = 'UTC+0';
			elseif ($current_offset < 0)
				$tzstring = 'UTC' . $current_offset;
			else
				$tzstring = 'UTC+' . $current_offset;
		}
		$user_timezone = get_user_meta( $user->ID, 'wpc_user_timezone', true );
		$tzstring = $user_timezone ? $user_timezone : $tzstring ;
		?>
		<h3><?php _e('WPCargo User Timezone', WPCARGO_TEXTDOMAIN ); ?></h3>
		<table class="form-table">
			<tr>
				<th><label for="wpc_user_timezone"><?php _e('Timezone', WPCARGO_TEXTDOMAIN ); ?></label></th>
				<td>
					<select id="wpc_user_timezone" name="wpc_user_timezone" aria-describedby="timezone-description">
						<?php echo wp_timezone_choice( $tzstring, get_user_locale() ); ?>
					</select>
					<p class="description"><?php _e('Choose user timezone. This will override general settings timezone for user.', WPCARGO_TEXTDOMAIN ); ?></p>
				</td>
			</tr>
		</table>
		<?php
	}

	function save_extra_profile_fields( $user_id ) {

		if ( !current_user_can( 'edit_user', $user_id ) ){
			return false;
		}

		if( $_POST['wpc_user_timezone'] ){

		}
		update_user_meta( $user_id, 'wpc_user_timezone', $_POST['wpc_user_timezone'] );
	}
}
new WPCargo_User;