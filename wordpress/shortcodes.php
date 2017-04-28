// Add Shortcode
// [info people="2" price="$250"]
function custom_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'people' => '2',
			'price' => '$0',
		),
		$atts,
		'info'
	);

	return '<div style="float: right;border-left: 1px solid #c6c6c6;border-left-width: 2px;padding: 5px 10px 0px 40px;text-align:center;"><h2>' . $atts['price'] . ' NZD</h2> <i>Per Night</i><br /><i class="wk-icon-users" style="font-size: 15px;padding: 0px;margin-right: 10px;"></i> x' .$atts['people']. ' People</div>';


}
add_shortcode( 'info', 'custom_shortcode' );
