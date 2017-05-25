<?php
// wp-content/plugins/widgetkit/plugins/content/wordpress/plugin.php
// Fix for widgetkit to work with Categories for pages
'items' => function($items, $content, $app) {

        $order = explode('_asc', $content['order_by']);
        $args  = array(
			// SPF edit - added post type page line 32 edit
		'post_type'   => array( 'post' , 'page') , 
            'numberposts' => $content['number'] ?: 5,
            'category'    => $content['category'] ? implode(',', $content['category']) : 0,
            'orderby'     => isset($order[0]) ? $order[0] : 'post_date',
            'order'       => isset($order[1]) ? 'ASC' : 'DESC',
            'post_status' => 'publish'
        );
?>
