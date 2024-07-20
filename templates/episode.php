<link rel="stylesheet" type="text/css"
      href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/episode.css">
<section class="inner-banner-section banner-section bg-overlay-black bg_img">
    <div id="movie-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="movie-payer">
                                <div class="video-embed-container" id="video-embed-container">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 m-t-10">
                                        <div class="text-center text-primary">
                                            Đổi nguồn phát hoặc tải lại trang khi lỗi
                                            <a data-id="<?= episodeName() ?>" data-link="<?= m3u8EpisodeUrl() ?>"
                                               data-type="m3u8"
                                               onclick="chooseStreamingServer(this)"
                                               class="btn btn-default streaming-server">
                                                <i class='icon-play'></i>
                                                <span class='title'>VIP #1</span>
                                            </a>
                                            <a data-id="<?= episodeName() ?>" data-link="<?= embedEpisodeUrl() ?>"
                                               data-type="embed"
                                               onclick="chooseStreamingServer(this)"
                                               class="btn btn-default streaming-server">
                                                <i class='icon-play'></i>
                                                <span class='title'>VIP #2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach (episodeList() as $key => $server) { ?>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="latest-movie movie-opt">
                                            <div class="movie-heading overflow-hidden">
                                                <span>Danh sách tập phim: <?= $server['server_name'] ?></span>
                                                <div class="disable-bottom-line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <ul class="col-md-12 col-sm-12 list-episodes">
                                        <?php foreach ($server['server_data'] as $list) {
                                            if (slugify($list['name']) == episodeName()&& episodeSV() == $key) {
                                                echo '<li>
                                        <span>' . $list['name'] . '</span>
                                    </li>';
                                            } else {
                                                echo '
                                            <li><a href="' . hrefEpisode($list["name"],$key) . '">
                                                ' . $list['name'] . '
                                            </a>  </li>
                                        ';
                                            }
                                        } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row movies-list-wrap">
                        <div class="ml-title">
                            <div class="tab-content">
                                <div id="info" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-2 m-t-10">
                                            <img class="img-responsive" style="min-width: 100%;"
                                                 src="<?= op_get_thumb_url() ?>" alt="<?php the_title(); ?>">
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

                                                        <p><?php the_content(); ?></p>

                                                    </div>
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
                                                include THEMETEMPLADE . '/section/section_thumb_item.php';
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
add_action('wp_footer', function ()  { ?>
    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-core.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-hlsjs.min.js"></script>
    <?php op_jwpayer_js(); ?>

    <script>
        jQuery(document).ready(function () {
            jQuery('html, body').animate({
                scrollTop: jQuery('#video-embed-container').offset().top
            }, 'slow');
        });
    </script>

    <script>
        var episode_id = <?= episodeName() ?>;
        const wrapper = document.getElementById('video-embed-container');
        const vastAds = "<?= get_option('ophim_jwplayer_advertising_file') ?>";

        function chooseStreamingServer(el) {
            const type = el.dataset.type;
            const link = el.dataset.link.replace(/^http:\/\//i, 'https://');
            const id = el.dataset.id;


            episode_id = id;


            Array.from(document.getElementsByClassName('streaming-server')).forEach(server => {
                server.classList.remove('active');
            })
            el.classList.add('active');

            renderPlayer(type, link, id);
        }

        function renderPlayer(type, link, id) {
            if (type == 'embed') {
                if (vastAds) {
                    wrapper.innerHTML = `<div id="fake_jwplayer"></div>`;
                    const fake_player = jwplayer("fake_jwplayer");
                    const objSetupFake = {
                        key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                        aspectratio: "16:9",
                        width: "100%",
                        file: "<?= get_template_directory_uri() ?>/assets/player/1s_blank.mp4",
                        volume: 100,
                        mute: false,
                        autostart: true,
                        advertising: {
                            tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                            client: "vast",
                            vpaidmode: "insecure",
                            skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?: 5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                            skipmessage: "Bỏ qua sau xx giây",
                            skiptext: "Bỏ qua"
                        }
                    };
                    fake_player.setup(objSetupFake);
                    fake_player.on('complete', function (event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adSkipped', function (event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adComplete', function (event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });
                } else {
                    if (wrapper) {
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                    }
                }
                return;
            }

            if (type == 'm3u8' || type == 'mp4') {
                wrapper.innerHTML = `<div id="jwplayer"></div>`;
                const player = jwplayer("jwplayer");
                const objSetup = {
                    key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                    aspectratio: "16:9",
                    width: "100%",
                    image: "<?= op_get_poster_url() ?>",
                    file: link,
                    playbackRateControls: true,
                    playbackRates: [0.25, 0.75, 1, 1.25],
                    sharing: {
                        sites: [
                            "reddit",
                            "facebook",
                            "twitter",
                            "googleplus",
                            "email",
                            "linkedin",
                        ],
                    },
                    volume: 100,
                    mute: false,
                    autostart: true,
                    logo: {
                        file: "<?= get_option('ophim_jwplayer_logo_file') ?>",
                        link: "<?= get_option('ophim_jwplayer_logo_link') ?>",
                        position: "<?= get_option('ophim_jwplayer_logo_position') ?>",
                    },
                    advertising: {
                        tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                        client: "vast",
                        vpaidmode: "insecure",
                        skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?: 5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                        skipmessage: "Bỏ qua sau xx giây",
                        skiptext: "Bỏ qua"
                    }
                };

                if (type == 'm3u8') {
                    const segments_in_queue = 50;

                    var engine_config = {
                        debug: !1,
                        segments: {
                            forwardSegmentCount: 50,
                        },
                        loader: {
                            cachedSegmentExpiration: 864e5,
                            cachedSegmentsCount: 1e3,
                            requiredSegmentsPriority: segments_in_queue,
                            httpDownloadMaxPriority: 9,
                            httpDownloadProbability: 0.06,
                            httpDownloadProbabilityInterval: 1e3,
                            httpDownloadProbabilitySkipIfNoPeers: !0,
                            p2pDownloadMaxPriority: 50,
                            httpFailedSegmentTimeout: 500,
                            simultaneousP2PDownloads: 20,
                            simultaneousHttpDownloads: 2,
                            // httpDownloadInitialTimeout: 12e4,
                            // httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpDownloadInitialTimeout: 0,
                            httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpUseRanges: !0,
                            maxBufferLength: 300,
                            // useP2P: false,
                        },
                    };
                    if (Hls.isSupported() && p2pml.hlsjs.Engine.isSupported()) {
                        var engine = new p2pml.hlsjs.Engine(engine_config);
                        player.setup(objSetup);
                        jwplayer_hls_provider.attach();
                        p2pml.hlsjs.initJwPlayer(player, {
                            liveSyncDurationCount: segments_in_queue, // To have at least 7 segments in queue
                            maxBufferLength: 300,
                            loader: engine.createLoaderClass(),
                        });
                    } else {
                        player.setup(objSetup);
                    }
                } else {
                    player.setup(objSetup);
                }


                const resumeData = 'OPCMS-PlayerPosition-' + id;
                player.on('ready', function () {
                    if (typeof (Storage) !== 'undefined') {
                        if (localStorage[resumeData] == '' || localStorage[resumeData] == 'undefined') {
                            console.log("No cookie for position found");
                            var currentPosition = 0;
                        } else {
                            if (localStorage[resumeData] == "null") {
                                localStorage[resumeData] = 0;
                            } else {
                                var currentPosition = localStorage[resumeData];
                            }
                            console.log("Position cookie found: " + localStorage[resumeData]);
                        }
                        player.once('play', function () {
                            console.log('Checking position cookie!');
                            console.log(Math.abs(player.getDuration() - currentPosition));
                            if (currentPosition > 180 && Math.abs(player.getDuration() - currentPosition) >
                                5) {
                                player.seek(currentPosition);
                            }
                        });
                        window.onunload = function () {
                            localStorage[resumeData] = player.getPosition();
                        }
                    } else {
                        console.log('Your browser is too old!');
                    }
                });

                player.on('complete', function () {
                    <?php if(nextEpisodeUrl()){ ?>
                    window.location.href = "<?= nextEpisodeUrl() ?>";
                    <?php }?>
                    if (typeof (Storage) !== 'undefined') {
                        localStorage.removeItem(resumeData);
                    } else {
                        console.log('Your browser is too old!');
                    }
                })

                function formatSeconds(seconds) {
                    var date = new Date(1970, 0, 1);
                    date.setSeconds(seconds);
                    return date.toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
                }
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const episode = '<?= episodeName() ?>';
            let playing = document.querySelector(`[data-id="${episode}"]`);
            if (playing) {
                playing.click();
                return;
            }

            const servers = document.getElementsByClassName('streaming-server');
            if (servers[0]) {
                servers[0].click();
            }
        });
    </script>

    <link href="<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/jquery.raty.css" rel="stylesheet"/>
    <script src="<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/jquery.raty.js"></script>

    <script>
        var rated = false;
        jQuery(document).ready(function ($) {
            $('#star').raty({
                number: 10,
                starHalf: '<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/images/star-half.png',
                starOff: '<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/images/star-off.png',
                starOn: '<?= get_template_directory_uri() ?>/assets/libs/jquery-raty/images/star-on.png',
                click: function (score, evt) {
                    if (!rated) {
                        $.ajax({
                            url: '<?php echo admin_url('admin-ajax.php')?>',
                            type: 'POST',
                            data: {
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