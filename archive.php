<?php
get_header();
?>
<section class="inner-banner-section banner-section bg-overlay-black bg_img">
    <div id="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h1 class="text-uppercase"><?= single_tag_title(); ?></h1>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-right">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/"><i class="fi ion-ios-home"></i>Trang chủ</a>
                        </li>
                        <li class="active"><?= single_tag_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="section-opt">
        <div class="container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-md-12 blogShort">

                            <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                                     alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                            <br>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <article>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p></article>
                            <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                        </div>

                    </div>
                <?php }
                wp_reset_postdata();
            } ?>
            <?php ophim_pagination(); ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
