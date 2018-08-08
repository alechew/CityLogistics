<?php
if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}
class WPCargo_Print {
	public function __construct(){
		add_action( 'wpcargo_print_btn', array($this, 'wpcargo_print_results') );
	}
	function wpcargo_print_results() {
		?>
		<script>
			function wpcargo_print(wpcargo_class) {
				var printContents = document.getElementById(wpcargo_class).innerHTML;
				var originalContents = document.body.innerHTML;
				document.body.innerHTML = printContents;
				window.print();
				document.body.innerHTML = originalContents;
				location.reload(true);
			}
		</script>
		<style>
			a:link:after, a:visited:after {
				content: "";
			}
			.noprint {
				display: none !important;
			}
			a:link:after, a:visited:after {
				display: none;
				content: "";
			}
		</style>
		<div class="wpcargo-print-btn">
			<a class="wpcargo-print button button-secondary button-large" type="button" onclick="wpcargo_print('wpcargo-result-print')"><span class="ti-printer"></span> <?php _e( 'Invoice', 'wpcargo'); ?></a>
		</div>
		<?php
	}
}
$wpcargo_print = new WPCargo_Print();