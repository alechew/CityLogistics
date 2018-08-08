<?php
class WPCargo{
	public $status;
	public $settings;
	public $logo;
	public $mail_status;
	public $mail_cc;
	public $mail_bcc;
	public $agents;
	public $prefix;
	public $autogenerate_title;

	function __construct( ){
		$this->status 		= $this->status();
		$this->settings 	= $this->settings();
		$this->logo 		= $this->logo();
		$this->mail_status 	= $this->mail_status();
		$this->mail_cc 		= $this->mail_cc();
		$this->mail_bcc 	= $this->mail_bcc();
		$this->agents  		= $this->agents();
		$this->prefix  		= $this->prefix();
		$this->autogenerate_title();
	}
	/*
	** Public Functions
	*/
	public function history( $shipmentID ){
		return maybe_unserialize( get_post_meta( $shipmentID, 'wpcargo_shipments_update', true ) );
	}
	public function barcode( $shipmentID, $html = false, $width = 180, $height = 50 ){
		$barcode_url 	= WPCARGO_PLUGIN_URL."/includes/barcode.php?codetype=Code128&size=60&text=";
		$barcode 		= $barcode_url . get_the_title( $shipmentID );
		if( $html ){
			$barcode = '<img style="width: '.$width.'px;height: '.$height.'px;" src="'.$barcode.'" alt="'.get_the_title( $shipmentID ).'" />';
		}
		return $barcode;
	}
	/*
	** Protected Functions
	*/
	protected function status(){
		$status = array();
		$wpcargo_option_settings 	= $this->settings();
		if( $wpcargo_option_settings ){
			if( array_key_exists( 'settings_shipment_status', $wpcargo_option_settings)){
				$get_all_status 	= $wpcargo_option_settings['settings_shipment_status'];
				$status 			= array_map( 'trim', explode(",", $get_all_status) );
			}
		}
		$status	  		= apply_filters( 'wpcargo_status_option', $status  );
		return $status;
	}
	protected function settings(){
		return ( get_option('wpcargo_option_settings') ) ? get_option('wpcargo_option_settings') : array();
	}
	protected function logo(){
		$wpcargo_option_settings 	= $this->settings();
		$logo = '';
		if( $wpcargo_option_settings ){
			if( array_key_exists( 'settings_shipment_ship_logo', $wpcargo_option_settings)){
				$logo 	= $wpcargo_option_settings['settings_shipment_ship_logo'];
			}
		}
		return $logo;
	}
	protected function mail_status(){
		$status 		= array();
		$mail_status 	=  get_option('wpcargo_mail_status');
		if( $mail_status ){
			$status = $mail_status;
		}
		return $status;
	}
	protected function mail_cc(){
		return get_option('wpcargo_email_cc');
	}
	protected function mail_bcc(){
		return get_option('wpcargo_email_bcc');
	}
	public function user_time( $userID ){
		global $wpdb, $user;
		$time = date( get_option( 'time_format' ) );
		if( get_option('wpcargo_user_timezone') ){
			$timezone = get_user_meta( $userID, 'wpc_user_timezone', true );
			if( $timezone ){
				$findme = 'UTC';
				$result = stripos( $timezone, $findme );
				if( $result === false ){
					date_default_timezone_set($timezone);
					date_default_timezone_get();
					$time = date( get_option( 'time_format' ) );
					date_default_timezone_set('UTC');
				}
			}
		}
		return $time;

	}
	public function user_date( $userID ){
		$date = date('Y-m-d');
		if( get_option('wpcargo_user_timezone') ){
			$timezone = get_user_meta( $userID, 'wpc_user_timezone', true );
			if( $timezone ){
				$findme = 'UTC';
				$result = stripos( $timezone, $findme );
				if( $result === false ){
					date_default_timezone_set($timezone);
					date_default_timezone_get();
					$date = date('Y-m-d');
					date_default_timezone_set('UTC');
				}
			}
		}
		return $date;
	}
	function agents(){
		$users = array();
		$args = array(
		'role__in'     => array('cargo_agent'),
		 );
		$agents = get_users( $args );
		if( !empty($agents) ){
			foreach ($agents as $agent ) {
				$full_name = ( !empty( $agent->first_name ) && !empty( $agent->last_name ) ) ? $agent->first_name.' '.$agent->last_name : $agent->display_name ;
				$users[$agent->ID] = $full_name;
			}
		}
		return $users;
	}
	function get_shipment_agent( $shipmentID ){
		$agent = get_post_meta( $shipmentID, 'agent_fields', true );
		if( !is_numeric( $agent ) ){
			$agent = $this->agent_id( 'display_name', $agent );
		}
		return $agent;
	}
	function agent_display_name( $userID ){
		global $wpdb;
		$table_prefix = $wpdb->prefix;
		$display_name = $userID;
		if( is_numeric( $userID  ) ) {
			$query = 'SELECT `display_name` FROM `'.$table_prefix.'users` WHERE `ID` = %d';
			$display_name =  $wpdb->get_var( $wpdb->prepare( $query, $userID ) );
		}
		return $display_name;
	}
	function user_fullname( $userID ){
		$user = get_userdata( $userID );
		$user_fullname = $user->display_name;
		if( !empty( $user->first_name ) && !empty( $user->last_name ) ){
			$user_fullname = $user->first_name.' '.$user->last_name;
		}
		return $user_fullname;
	}
	function agent_id( $field = 'display_name', $value ){
		global $wpdb;
		$table_prefix = $wpdb->prefix;
		$query = 'SELECT `ID` FROM `'.$table_prefix.'users` WHERE `'.$field.'` LIKE %s';
		$display_name =  $wpdb->get_var( $wpdb->prepare( $query, $value ) );
		return $display_name;
	}
	protected function prefix(){
		$options 	= $this->settings;
		$prefix 	= '';
		if( array_key_exists( 'wpcargo_title_prefix', $options ) ){
	        $prefix = trim( $options['wpcargo_title_prefix'] );
	    }
	    return $prefix;
	}
	protected function autogenerate_title(){
		$options 	= $this->settings;
		$autogenerate 	= false;
		if( array_key_exists( 'wpcargo_title_prefix_action', $options ) ){
	        $autogenerate = true;
	    }
	    $this->autogenerate_title = $autogenerate;
	}
	public function create_shipment_number(){
    	global $wpdb;
		$numdigit  	= ( get_option('wpcargo_title_numdigit') ) ? get_option('wpcargo_title_numdigit') : 12 ;
		$numstr = '';
		for ( $i = 1; $i < $numdigit; $i++ ) {
			$numstr .= 9;
		}
	    $shipment_title = $this->prefix.str_pad( wp_rand( 0, $numstr ), $numdigit, "0", STR_PAD_LEFT );
	    if( $this->is_title_exist( $shipment_title ) ) {
	        $shipment_title = create_shipment_number();
	    }
	    return $shipment_title;
	}
	protected function is_title_exist( $title = '' ){
		global $wpdb;
		$result =  $wpdb->get_var( "SELECT COUNT(*) FROM `{$wpdb->prefix}posts` WHERE `post_type` LIKE 'wpcargo_shipment' AND `post_title` LIKE '".$title."'" );
		return $result;
	}
}
$wpcargo = new WPCargo();