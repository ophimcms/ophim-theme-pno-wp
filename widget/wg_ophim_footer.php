<?php
class WG_oPhim_Footer extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_footer', // Base ID
            __( 'Ophim Footer', 'ophim' ), // Name
            array( 'description' => __( 'Mẫu footer', 'ophim' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract($args);
        ob_start();
        echo $instance['footer'] ?? '';
        echo $after_widget;
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array(
            'title' 	=> '',
            'slug' 	=> '#',
            'postnum' 	=> 5,
            'style'		=> '1',
            'status'		=> 'all',
            'orderby'		=> 'new',
            'categories'		=> 'all',
            'actors'		=> 'all',
            'directors'		=> 'all',
            'genres'		=> 'all',
            'regions'		=> 'all',
            'years'		=> 'all',
        ) );
        extract($instance);

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('footer'); ?>"><?php _e('Footer', 'ophim') ?></label>
            <br />
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>"  ><?php if(isset($instance['footer']) && $instance['footer']){ echo $instance['footer'];}else{ ?> <div id="footer">
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
                    </div><?php } ?></textarea>
        </p>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['footer'] = $new_instance['footer'];
        return $instance;
    }

}
function register_new_widget_Footer() {
    register_widget( 'WG_oPhim_Footer' );
}
add_action( 'widgets_init', 'register_new_widget_Footer' );
