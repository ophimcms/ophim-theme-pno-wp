<?php
get_header();
?>

<?php
if (!isset($_GET['filter'])){
    $_GET['filter']['categories'] ='';
    $_GET['filter']['genres'] ='';
    $_GET['filter']['regions'] ='';
    $_GET['filter']['years'] ='';
}
?>
<section class="inner-banner-section banner-section bg-overlay-black bg_img">

    <div id="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="page-title">
                        <h1 class="text-uppercase">   Tìm kiếm : <?php echo "$s"; ?></h1>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-right">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/"><i class="fi ion-ios-home"></i>Trang chủ</a>
                        </li>
                        <li class="active">Tất cả phim</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="section-opt">
        <div class="container">
            <form id="form-search" class="form-inline" method="GET">
                <div class="filter-box mt-3">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <select class="form-control" id="type" name="filter[categories]" form="form-search">
                                <option value="">Mọi định dạng</option>
                                <?php $categories = get_terms(array('taxonomy' => 'ophim_categories', 'hide_empty' => false,));?>
                                <?php foreach($categories as $category) { ?>
                                    <option value='<?php echo $category->name; ?>' <?php if ($category->name == $_GET['filter']['categories']) echo 'selected="selected"'; ?>><?php echo $category->name ; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <select class="form-control" name="filter[regions]" form="form-search">
                                <option value="">Tất cả quốc gia</option>
                                <?php $regions = get_terms(array('taxonomy' => 'ophim_regions', 'hide_empty' => false,));?>
                                <?php foreach($regions as $region) { ?>
                                    <option value='<?php echo $region->name; ?>' <?php if ($region->name == $_GET['filter']['regions']) echo 'selected="selected"'; ?>><?php echo $region->name ; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <select class="form-control" id="category" name="filter[genres]" form="form-search">
                                <option value="">Tất cả thể loại</option>
                                <?php $genres = get_terms(array('taxonomy' => 'ophim_genres', 'hide_empty' => false,));?>
                                <?php foreach($genres as $genre) { ?>
                                    <option value='<?php echo $genre->name; ?>' <?php if ($genre->name == $_GET['filter']['genres']) echo 'selected="selected"'; ?>><?php echo $genre->name ; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <select class="form-control" name="filter[years]" form="form-search">
                                <option value="">Tất cả năm</option>
                                <?php $years = get_terms(array('taxonomy' => 'ophim_years', 'hide_empty' => false,));?>
                                <?php foreach($years as $year) { ?>
                                    <option value='<?php echo $year->name; ?>' <?php if ($year->name == $_GET['filter']['years']) echo 'selected="selected"'; ?>><?php echo $year->name ; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <button type="submit" form="form-search" class="button_filter">Lọc phim</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="latest-movie movie-opt">
                        <div class="row clean-preset">
                            <div class="pagination-container-top text-center" id="pagination_link1">
                                <div class="pagination-container text-center">
                                    <?php ophim_pagination(); ?>
                                </div>
                            </div>
                            <div class="movie-container">
                                <?php
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post(); echo '<div class="col-md-2 col-sm-3 col-xs-6">';
                                        include THEMETEMPLADE.'/section/section_thumb_item.php';  echo ' </div>';
                                    } wp_reset_postdata();  }
                                else { ?>
                                    <p>Rất tiếc, không có nội dung nào trùng khớp yêu cầu</p>
                                <?php } ?>
                            </div>
                            <div class="pagination-container text-center" id="pagination_link2">
                                <div class="pagination-container text-center">
                                    <?php ophim_pagination(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
