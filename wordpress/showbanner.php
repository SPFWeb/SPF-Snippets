// Used to show full width banner on The Events Calendar 
// Located in the header.php file 

<!-- Purge if no work -->
<?php if (has_post_thumbnail( $post->ID ) ): ?>
         
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <div id="tm-main" class="tm-main uk-section uk-section-default <?php if ( tribe_is_event() && is_single() ) { ?> spf-banner" style="background-image: url(<?php echo $image[0]; } ?>);" uk-height-viewport="expand: true">
<?php endif; ?>

<!-- End Purge -->
