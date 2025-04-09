<?php
/*
Template Name: Tin Tức
*/
?>
<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container news" id= "body">
            <div class="row header-css"></div>
            <div class="row"></div>
            <div class="wraper"><div class="row"><div class="col-md-24"></div></div></div>
            <div class="row"></div>
            <nav class="third-nav wraper">
                <div class="row">
                  <div class="bg">
                  <div class="clearfix">
                    <div class="col-xs-24 col-sm-18 col-md-18">
                        <div class="breadcrumbs-wrap">
                            <div class="display">
                                <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                    <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php get_permalink()?>"><span>Tin Tức<i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                            </div>
                                    <ul class="sub-breadcrumbs"></ul>
                                </div>
                            </div>
                        <div class="headerSearch hiden col-sx-24 col-sm-6 col-md-6"></div>
                    </div>
                  </div>  
                </div>
            </nav>
            <div class="wraper">
                <div class="row css-description-new">
                    <div class="col-md-24">
                        <div class="newstab-slide">
                            <div class="box-icon-title box-icon-titles" id= "style-3">
                                <ul class="mtab">
                                <?php
                                    $terms = get_terms( 'tintuc' );
                                    $index = 1;

                                    foreach ( $terms as $term ) {
                                        $term_link = get_term_link( $term );
                                        if ( is_wp_error( $term_link ) ) {
                                            continue;
                                        }
                                        $active_class = ($index === 1) ? 'active' : '';
                                        ?>
                                        <li class="item-nav">
                                            <a href="#newstabhomejcarousel-<?= $index; ?>" class="<?= $active_class; ?>" data-toggle="newtabslide">
                                                <span><?= esc_html($term->name); ?></span>
                                            </a>
                                        </li>
                                        <?php
                                        $index++;
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="newstabhomejcarousel-wraper">
                            <?php
                                $terms = get_terms(array(
                                    'taxonomy'   => 'tintuc',
                                    'hide_empty' => true,
                                ));
                                $index = 1;
                                if (!empty($terms) && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {

                                        $args = array(
                                            'post_type'      => 'post', // hoặc custom post type của bạn
                                            'posts_per_page' => -1,
                                            'tax_query'      => array(
                                                array(
                                                    'taxonomy' => 'tintuc',
                                                    'field'    => 'term_id',
                                                    'terms'    => $term->term_id,
                                                ),
                                            ),
                                        );
                                        $active_class = ($index === 1) ? 'active' : '';
                                        $count = 0;
                                        $so = 0;
                                        $query = new WP_Query($args);
                                        ?>
                                        <div class ="newstabhomejcarousel-ctn <?= $active_class; ?>" id= "newstabhomejcarousel-<?= $index; ?>">
                                            <div class= "newstabhomejcarousel-items">
                                                <div class ="container newstabhomejcarousel">
                                                <ul class="news-slider non-slider"></ul>
                                                <ul class= "news-slider show-slider slick-initialized slick-slider slick-dotted" >
                                                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                                                <div class= "slick-list draggable">
                                                    <div class="slick-track" style="opacity: 1; width: 5200px; transform:;">
                                                    <?php
                                                        $post_group = [];

                                                        while ($query->have_posts()) {
                                                            $query->the_post();
                                                            $post_group[] = [
                                                                'title' => get_the_title(),
                                                                'link'  => get_permalink(),
                                                                'date'  => get_the_date('d/m/Y'),
                                                                'img'   => get_the_post_thumbnail_url(),
                                                            ];
                                                        }

                                                        $total_posts = count($post_group);
                                                        for ($i = 0; $i < $total_posts; $i += 2) {
                                                            echo '<div class="slick-slide slick-active" data-slick-index="' . $i . '" aria-hidden="false" style="width: 340px;">';
                                                            for ($j = 0; $j < 2 && ($i + $j) < $total_posts; $j++) {
                                                                $post = $post_group[$i + $j];
                                                                ?>
                                                                <div>
                                                                    <li style="width: 100%; display: inline-block;">
                                                                        <div class="ibg-item">
                                                                            <div class="ibg">
                                                                                <div class="height-tabs">
                                                                                    <div class="img">
                                                                                        <a href="<?= esc_url($post['link']); ?>" title="<?= esc_attr($post['title']); ?>" tabindex="0">
                                                                                            <img src="<?= esc_url($post['img']); ?>" alt="<?= esc_attr($post['title']); ?>">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="ct">
                                                                                        <h3>
                                                                                            <a class="show" href="<?= esc_url($post['link']); ?>" data-content="<?= esc_attr($post['title']); ?>" data-img="<?= esc_url($post['img']); ?>" data-rel="cattitlebox" tabindex="0" title="">
                                                                                                <?= esc_html($post['title']); ?>
                                                                                            </a>
                                                                                        </h3>
                                                                                        <div class="text-muted"><?= esc_html($post['date']); ?></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                                <?php
                                                            }
                                                            echo '</div>';
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                                                </ul>
                                                <ul class="news-slider show-slider-mobile slick-initialized slick-slider">
                                                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                                                <div class= "slick-list draggable">
                                                    <div class="slick-track" style="opacity: 1;">
                                                    <?php
                                                        $post_group = [];

                                                        while ($query->have_posts()) {
                                                            $query->the_post();
                                                            $post_group[] = [
                                                                'title' => get_the_title(),
                                                                'link'  => get_permalink(),
                                                                'date'  => get_the_date('d/m/Y'),
                                                                'img'   => get_the_post_thumbnail_url(),
                                                            ];
                                                        }

                                                        $total_posts = count($post_group);
                                                        for ($i = 0; $i < $total_posts; $i += 2) {
                                                            echo '<div class="slick-slide slick-active" data-slick-index="' . $i . '" aria-hidden="false" style="width: 380px;">';
                                                            for ($j = 0; $j < 2 && ($i + $j) < $total_posts; $j++) {
                                                                $post = $post_group[$i + $j];
                                                                ?>
                                                                <div>
                                                                    <li style="width: 100%; display: inline-block;">
                                                                        <div class="ibg-item">
                                                                            <div class="ibg">
                                                                                <div class="height-tabs">
                                                                                    <div class="img">
                                                                                        <a href="<?= esc_url($post['link']); ?>" title="<?= esc_attr($post['title']); ?>" tabindex="0">
                                                                                            <img src="<?= esc_url($post['img']); ?>" alt="<?= esc_attr($post['title']); ?>">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="ct">
                                                                                        <h3>
                                                                                            <a class="show" href="<?= esc_url($post['link']); ?>" data-content="<?= esc_attr($post['title']); ?>" data-img="<?= esc_url($post['img']); ?>" data-rel="cattitlebox" tabindex="0" title="">
                                                                                                <?= esc_html($post['title']); ?>
                                                                                            </a>
                                                                                        </h3>
                                                                                        <div class="text-muted"><?= esc_html($post['date']); ?></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                                <?php
                                                            }
                                                            echo '</div>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                       
                                        $index++;
                                        wp_reset_postdata();
                                    }
                                } else {
                                    echo '<p>Không có chuyên mục nào.</p>';
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer('footer') ?>