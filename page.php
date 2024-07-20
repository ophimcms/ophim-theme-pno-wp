<?php
get_header();
?>


<section class="inner-banner-section banner-section bg-overlay-black bg_img">
    <div id="section-opt">
        <div class="container">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <div class="group-film">
            <h1><?php the_title(); ?></h1>
            <div class="content">
                <?php  the_content(); ?>
            </div>
        </div>
    <?php
    endwhile;
    ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
