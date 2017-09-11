// Used to show full width banner on The Events Calendar 
// Located in the header.php file 

<!-- Purge if no work -->
<?php if (has_post_thumbnail( $post->ID ) ): ?>
         
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <div id="tm-main" class="tm-main uk-section uk-section-default <?php if ( tribe_is_event() && is_single() ) { ?> spf-banner" style="background-image: url(<?php echo $image[0]; } ?>);" uk-height-viewport="expand: true">
<?php endif; ?>

<!-- End Purge -->

// Updated Version 2
// Use the code below for secondary image support
// https://wordpress.org/plugins/multiple-featured-images/		   
<!-- Purge if no work -->
	
         <?php if ( tribe_is_event() && is_single() ) : ?><div class="spf-banner-overlay"></div><?php endif ?>
    <?php if( kdmfi_has_featured_image( 'featured-image-2' ) ) : ?>
         
   
            <div id="tm-main" class="tm-main uk-section uk-section-default <?php if ( tribe_is_event() && is_single() ) : ?> spf-banner" style="background-image: url(<?php echo kdmfi_get_featured_image_src( 'featured-image-2', 'full' ); endif ?>);" uk-height-viewport="expand: true">
			

<?php else : ?>
<div id="tm-main" class="tm-main uk-section uk-section-default <?php if ( tribe_is_event() && is_single() ) : ?> spf-banner" style="background-image: url(wp-content/uploads/page-bg-1.jpg);<?php endif ?>" uk-height-viewport="expand: true">
<?php endif; ?>

<!-- End Purge -->
