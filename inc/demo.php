<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<div id="footer">
                    <div class="container">
                    <div class="row">
                    <div class="col-md-4 col-sm-6">
                    <div class="footer-about  ">
                    <div class="movie-heading"> <span>About</span>
                    <div class="disable-bottom-line"></div>
                    </div>
                    <img class="img-responsive" src="https://ophim.cc/logo-ophim-5.png"
                    alt="Logo">
                    <p>Xem phim thuyết minh hay, phim hot hàn quốc trung quốc. Phim online thuyết minh nhanh
                    chất lượng&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br></p>
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <div class="bottom-post ">
                    <div class="movie-heading"> <span>Liên Kết</span>
                    <div class="disable-bottom-line"></div>
                    </div>
                    <p><br></p>
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <div class="sendus  ">
                    <div class="movie-heading"> <span>Liên hệ</span>
                    <div class="disable-bottom-line"></div>
                    </div>
                    <div id="contact-form">
                    <div class="expMessage"></div>
                    <p class="text-light">Email:</p>
                    <p class="text-light">Telegram:</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div id="copyright">
                    <div class="container">
                    <div class="row">
                    <div class="col-sm-6 text-left">
                    <p> Xem phim mới miễn phí nhanh chất lượng cao. Xem Phim online Việt Sub, Thuyết minh, lồng
                    tiếng chất lượng HD. Xem phim nhanh online chất lượng cao</p>
                    </div>
                    <div class="col-sm-6 text-right">
                    <ul class="footer-list">
                    <li><a href="">Phim bộ</a></li>
                    <li><a href="">DMCA</a></li>
                    <li><a href="">Liên Hệ Chúng Tôi</a></li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);