<style>
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 400px;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    .column {
        float: left;
        padding: 5px;
    }

    .left {
        text-align: center;
        width: 20%;
    }

    .right {
        width: 80%;
    }
    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #282525;
    }
</style>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="">
                <?php op_the_logo('max-width:50px') ?>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-left">

                <?php
                $menu_items = wp_get_menu_array('primary-menu');
                foreach ($menu_items as $key => $item) : ?>
                    <?php if (empty($item['children'])) { ?>
                          <li><a href=<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
                    <?php } else { ?>
                         <li class="dropdown">
                    <a href=<?= $item['url'] ?>" class="dropdown-toggle"
                       data-toggle="dropdown"><?= $item['title'] ?> <span class="caret"></span></a>
                    <div class="dropdown-menu row col-lg-12 three-column-navbar" role="menu">
                                <?php foreach ($item['children'] as $k => $child): ?>
                                    <div class="col-md-3">
                            <ul class="menu-item list-unstyled">
                                <li><a href="<?= $child['url'] ?>"><?= $child['title'] ?></a></li>
                            </ul>
                        </div>
                                <?php endforeach; ?>
        </div>
        </li>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>
            <form class="navbar-form navbar-left" method="get" id="form-search" action="/">
                <div class="input-group">
                    <input type="text" name="s" value="<?php echo "$s"; ?>" autocomplete="off" onkeyup="fetch()"
                           id="search-input" class="form-control" placeholder="Tìm kiếm phim..">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                    <div class="" id="result"></div>
            </form>
        </div>
    </div>
</nav>
