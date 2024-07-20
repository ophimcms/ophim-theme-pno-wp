<section class="inner-banner-section banner-section bg-overlay-black bg_img">
    <div id="movie-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row movies-list-wrap">
                        <div class="ml-title">
                            <div class="tab-content">
                                <div id="info" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-3 m-t-10">
                                            <img class="img-responsive" style="min-width: 100%;"
                                                 src="<?= op_get_thumb_url() ?>" alt="<?php the_title(); ?>">

                                            <div class="block_watch">
                                                <?php if (watchUrl()) { ?>
                                                <a class="btn btn-primary btn_watch" href="<?= watchUrl() ?>"><i class="fa fa-play-circle"
                                                                                                                aria-hidden="true"></i> Xem Phim</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1><?php the_title(); ?></h1>
                                                    <h2><?= op_get_original_title() ?>
                                                        (<?= op_get_year() ?>)</h2>
                                                    <div class="box-rating">
                                                        <input id="hint_current" type="hidden" value="">
                                                        <input id="score_current" type="hidden"
                                                               value="<?= op_get_rating() ?>">
                                                        <div id="star"
                                                             data-score="<?= op_get_rating() ?>"
                                                             style="cursor: pointer; float: left; width: 200px;">
                                                        </div>
                                                        <span id="hint"></span>
                                                        <div id="div_average"
                                                             style="float:left; line-height:20px; margin:0 5px; ">(<span
                                                                    class="average"
                                                                    id="average"><?= op_get_rating() ?></span>
                                                            đ/<span id="rate_count"> /
                                                                    <?= op_get_rating_count() ?></span> lượt)
                                                        </div>
                                                    </div>
                                                    <div class="addthis_inline_share_toolbox_yl99 m-t-30 m-b-10"
                                                         data-url=""
                                                         data-title="Watch & Download <?php the_title(); ?>">

                                                        <p><?php the_content();?></p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    <p>
                                                        <strong>Trạng thái: </strong>
                                                        <?= op_get_status() ?>
                                                    </p>
                                                    <p>
                                                        <strong>Thể loại: </strong>
                                                        <?= op_get_genres(', ') ?>
                                                    </p>
                                                    <p>
                                                        <strong>Quốc gia: </strong>
                                                        <?= op_get_regions() ?>
                                                    </p>
                                                    <p>
                                                        <strong>Năm phát hành: </strong>
                                                        <?= op_get_year() ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <p>
                                                        <strong>Tổng số tập:</strong>
                                                        <?= op_get_total_episode() ?>
                                                    </p>
                                                    <p>
                                                        <strong>Thời lượng:</strong> <?= op_get_runtime() ?>
                                                    </p>
                                                    <p>
                                                        <strong>Chất Lượng:</strong>
                                                        <span class="label label-primary"><?= op_get_quality() ?>
                                                                - <?= op_get_lang() ?></span>
                                                    </p>
                                                    <p>
                                                        <strong>Tổng lượt xem:</strong> <?= op_get_post_view() ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        <strong>Diễn Viên: </strong>
                                                        <?= op_get_actors(10,', ') ?>
                                                    </p>
                                                    <p>
                                                        <strong>Đạo Diễn: </strong>
                                                        <?= op_get_directors(10,', ') ?>
                                                    </p>
                                                    <p>
                                                        <strong>Từ khóa:</strong>
                                                          <?= op_get_tags(', ')?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="similler-movie">
                            <div class="movie-heading overflow-hidden">
                                <span class="fadeInUp" data-wow-duration="0.8s"> Bình luận </span>
                                <div class="disable-bottom-line" data-wow-duration="0.8s"></div>
                            </div>
                            <div style="width: 100%; background-color: #fff">
                                <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="similler-movie">
                            <div class="movie-heading overflow-hidden">
                                <span class="fadeInUp" data-wow-duration="0.8s"> Có Thể Bạn Thích </span>
                                <div class="disable-bottom-line" data-wow-duration="0.8s"></div>
                            </div>
                            <div class="row">
                                <div class="movie-container">
                                    <?php
                                    $postType = 'ophim';
                                    $taxonomyName = 'ophim_genres';
                                    $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
                                    if ($taxonomy) {
                                        $category_ids = array();
                                        foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                                        $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 12, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                                        $my_query = new wp_query($args);

                                        if ($my_query->have_posts()):
                                            while ($my_query->have_posts()):$my_query->the_post();
                                                echo ' <div class="col-md-2 col-sm-3 col-xs-6">';
                                                include THEMETEMPLADE.'/section/section_thumb_item.php';
                                                echo '</div>';
                                            endwhile;
                                        endif;
                                        wp_reset_query();
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='movie-container'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function (){?>
    <link href="<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/jquery.raty.css" rel="stylesheet" />
    <script src="<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/jquery.raty.js"></script>

    <script>
        var rated = false;
        jQuery(document).ready(function($) {
            $('#star').raty({
                number: 10,
                starHalf: '<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/images/star-half.png',
                starOff: '<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/images/star-off.png',
                starOn: '<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/images/star-on.png',
                click: function(score, evt) {
                    if (!rated) {
                        $.ajax({
                            url: '<?php echo admin_url('admin-ajax.php')?>',
                            type: 'POST',
                            data:{
                                action: "ratemovie",
                                rating: score,
                                postid: '<?php echo get_the_ID(); ?>',
                            },
                        }).done(function (data) {
                            alert("Đánh giá của bạn đã được gửi đi!")
                            rated = true;
                        });
                    }
                }
            });
        })
    </script>
<?php }) ?>