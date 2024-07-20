<div class="MovieListTopCn">
    <div class="MovieListTop owl-carousel">
        <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++ ?>
        <li class="TPostMv">
            <article id="post-<?= $key ?>"
                     class="TPost C post-<?= $key ?> post type-post status-publish format-standard has-post-thumbnail hentry">
                <a href="<?php the_permalink(); ?>">
                    <div class="Image">
                        <figure class="Objf TpMvPlay AAIco-play_arrow"><img width="215" height="320"
                                                                            src="<?= op_get_thumb_url() ?>"
                                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                            alt="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)"
                                                                            title="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)" />
                        </figure>
                        <span class="mli-quality">
                                    <?= op_get_quality() ?> <?= op_get_lang() ?>
                                </span>
                    </div>
                    <h2 class="Title"><?php the_title(); ?></h2> <span class="Year"><?= op_get_original_title() ?>
                                (<?= op_get_year() ?>)
                            </span>
                </a>
            </article>
        </li>
        <?php endwhile; ?>
    </div>
</div>

<div class="inner-banner-section banner-section bg-overlay-black bg_img">
    <div class="slider-content container">
        <div id="slider" class="swiper-container-horizontal">
            <div class="swiper-wrapper">
                <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++ ?>
                <div class="swiper-slide" style="background-image: url('<?= op_get_poster_url() ?>');">
                    <a href="<?php the_permalink(); ?>" class="slide-link" title="<?php the_title(); ?>"></a>
                    <span class="slide-caption">
                            <h2><?php the_title(); ?></h2>
                            <p class="sc-desc">
                               <?php the_excerpt(); ?>
                            </p>
                            <div class="slide-caption-info">
                                <div class="block">
                                    <strong>Thể loại: </strong> <?= op_get_genres(', ') ?>
                                </div>
                                <div class="block">
                                    <strong>Trạng thái:</strong> <?= op_get_episode() ?> [<?= op_get_quality() ?>-<?= op_get_lang() ?>]
                                </div>
                                <div class="block">
                                    <strong>Năm:</strong> <?= op_get_year() ?>
                                </div>
                                <div class="block">
                                    <strong>Đánh giá:</strong> <?= op_get_rating() ?> sao/<?= op_get_rating_count() ?> lượt
                                </div>
                            </div>
                            <a href="">
                                <div class="btn btn-sm btn-success mt20" style="margin-top: 10px;">Xem Ngay </div>
                            </a>
                        </span>
                </div>
                <?php endwhile; ?>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px;"></div>
</div>
