<div id="section-opt">
    <div class="container">
        <div class="movies-list-wrap mlw-latestmovie">
            <div class="ml-title">
                <span class="pull-left title"><?= $title; ?></span>
                <?php if($slug ) : ?>
                <a href="<?= $slug; ?>" class="pull-right cat-more">Xem Thêm »</a>
               <?php endif ?>
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <div class="movies-list movies-list-full tab-pane fade active in">
                    <div class="row clean-preset">
                        <div class="movie-container">
<?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++; ?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php     include THEMETEMPLADE.'/section/section_thumb_item.php'; ?>
                            </div>
                           <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>