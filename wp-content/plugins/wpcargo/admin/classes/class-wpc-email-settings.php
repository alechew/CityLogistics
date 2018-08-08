<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
class WPCargo_Email_Settings{
	private $text_domain = 'wpcargo';
	function __construct(){
	add_action('admin_menu', array( $this, 'add_email_settings_menu' ) );
	//call register settings function
	add_action( 'admin_init', array( $this, 'register_wpcargo_mail_settings') );

	}
	public function add_email_settings_menu(){
	add_submenu_page(
		'wpcargo-settings',
		__( 'Email Settings', $this->text_domain ),
		__( 'Email Settings', $this->text_domain ),
		'manage_options',
		'wpcargo-email-settings',

		array( $this, 'add_email_settings_menu_callback' )
	);
	}
	public function add_email_settings_menu_callback(){
		global $wpcargo;
		$options 			= get_option('wpcargo_mail_settings');
		$page_options 		= get_option('wpcargo_email_page_settings');
		$mail_status 		= $wpcargo->mail_status;
		$email_meta_tags 	= $this->email_meta_tags_callback();
		?>
	    <div class="wrap">
	        <h1><?php _e( 'Email Settings', $this->text_domain ); ?></h1>
	        <style type="text/css">
	        	table#email_meta_tags{
	        		width: 100%;
	        	}
	        	table#email_meta_tags, table#email_meta_tags tr td,table#email_meta_tags tr th{
	        		border:1px solid #000;
	        		border-collapse: collapse;
	        	}
	        </style>
	        <?php
			require_once( WPCARGO_PLUGIN_PATH.'admin/templates/admin-navigation.tpl.php' );
			require_once( WPCARGO_PLUGIN_PATH.'admin/templates/email-settings-option.tpl.php' );
		?>
	    </div>
	        <?php
	}
	function register_wpcargo_mail_settings() {
		//register our settings
		register_setting( 'wpcargo_mail_settings', 'wpcargo_mail_settings' );
		register_setting( 'wpcargo_mail_settings', 'wpcargo_mail_status' );
		register_setting( 'wpcargo_mail_settings', 'wpcargo_email_page_settings' );
		register_setting( 'wpcargo_mail_settings', 'wpcargo_email_cc' );
		register_setting( 'wpcargo_mail_settings', 'wpcargo_email_bcc' );
	}

	function email_meta_tags_callback( ){

		$tags = array(
			'{wpcargo_tracking_number}' => __('Tracking Number','wpcargo'),
			'{shipper_email}'	=> __('Shipper Email','wpcargo'),
			'{receiver_email}'	=> __('Receiver Email','wpcargo'),
			'{shipper_phone}'	=> __('Shipper Phone','wpcargo'),
			'{receiver_phone}' 	=> __('Receiver Phone','wpcargo'),
			'{admin_email}'		=> __('Admin Email','wpcargo'),
			'{shipper_name}'	=> __('Name of the Shipper','wpcargo'),
			'{receiver_name}'	=> __('Name of the Receiver','wpcargo'),
			'{status}'			=> __('Shipment Status','wpcargo'),
			'{site_name}'		=> __('Website Name','wpcargo'),
			'{site_url}'		=> __('Website URL','wpcargo'),
		);

		$tags 	= apply_filters( 'wpc_email_meta_tags', $tags );
		return $tags;
	}
}
new WPCargo_Email_Settings;