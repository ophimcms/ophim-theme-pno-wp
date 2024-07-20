<?php
get_header();
?>


<?php if ( is_active_sidebar('widget-slider-poster') ) {
    dynamic_sidebar( 'widget-slider-poster' );
} else {
    _e('This is widget poster. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<section class="inner-banner-section banner-section bg-overlay-black bg_img">
    <?php if ( is_active_sidebar('widget-area') ) {
        dynamic_sidebar( 'widget-area' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>
</section>

<?php
get_footer();
?>
