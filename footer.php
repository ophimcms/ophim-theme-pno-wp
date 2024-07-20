<?php
if ( is_active_sidebar('widget-footer') ) {
    dynamic_sidebar( 'widget-footer' );
} else {
    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
</div>
</div>


<script src="<?= get_template_directory_uri() ?>/assets/assets/theme/default/swiper/js/swiper.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(".dropdown").hover(function() {
        $(this).addClass("open");
    }, function() {
        $(this).removeClass("open");
    });
</script>
<script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js">
</script>
<link href="<?= get_template_directory_uri() ?>/assets/assets/plugins/swal2/sweetalert2.min.css" rel="stylesheet">
<script src="<?= get_template_directory_uri() ?>/assets/assets/theme/default/js/swiper.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/assets/assets/theme/default/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/assets/assets/plugins/swal2/sweetalert2.min.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</html>