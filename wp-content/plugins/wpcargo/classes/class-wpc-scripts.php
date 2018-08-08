<?php
if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}
class WPCargo_Scripts{
	function __construct(){
		add_action('wp_enqueue_scripts', array( $this, 'frontend_scripts' ) );
	}
	function frontend_scripts(){
		wp_register_style('wpcargo-styles', WPCARGO_PLUGIN_URL . 'assets/css/wpcargo-style.css', array(), '4.0.7');
		wp_enqueue_style('wpcargo-styles');
	}
}
$class_wpcargo_scripts = new WPCargo_Scripts;
add_action('wp_head', function(){
	$options 		= get_option('wpcargo_option_settings');
	$baseColor 		= '#00A924';
	if( $options ){
		if( array_key_exists('wpcargo_base_color', $options) ){
			$baseColor = ( $options['wpcargo_base_color'] ) ? $options['wpcargo_base_color'] : $baseColor ;
		}
	}

	?>
	<style type="text/css">
		#book thead th,
		#book .button.button-quotation,
		#pq-add-address-form input[type="submit"],
		#wpc-pq-address-book #add-address,
		#wpc-pick-up-management .ui-tabs .ui-tabs-panel  #wpc-submit-pickup,
		#wpc-pick-up-management a.mover,
		#wpc-pick-up-management .ui-tabs #steps.ui-tabs-nav li,
		#pq_package_wrap table thead th,
		#wpc-pq-form input[type="button"],
		#wpc-pq-form input[type="submit"],
		#wpc-pq-dasboard #order-wrap #orders th,
		#wpc-pq-dasboard #wpc-pq-request,
		#wpc-cashier input[type="submit"],
		#wpc-cashier input.wpc-add,
		.wpc-cashier-package thead th,
		.wpcargo-vehicle-table th,
		.wpc-multiple-package .wpc-mp-table thead th,
		#wpcargo-history-section #list-container thead th,
		.wpcargo-track .track_form_table .track_form_tr .track_form_td input#submit_wpcargo,
		input[type=checkbox].wpc-checkbox:checked:before,
		input[type=checkbox].wpc-checkbox:checked:before,
		.wpc-button{
			background-color: <?php echo $baseColor; ?> !important;
			border-color: <?php echo $baseColor; ?> !important;
			color:#fff;
		}
		#wpc-pq-address-book #orders-pagination li.active a,
		#wpc-pq-dasboard #order-wrap #orders-pagination li.active a{
			border-bottom: 2px solid <?php echo $baseColor; ?> !important;
		}
		#wpc-pick-up-management .ui-tabs #steps.ui-tabs-nav{
		    border-top: 1px solid <?php echo $baseColor; ?> !important;
		    border-left: 1px solid <?php echo $baseColor; ?> !important;
		    border-right: 1px solid <?php echo $baseColor; ?> !important;
		}
		#wpc-pum-tabs.ui-tabs .ui-tabs-panel{
			border: 1px solid <?php echo $baseColor; ?> !important;
		}
	</style>
	<?php
});