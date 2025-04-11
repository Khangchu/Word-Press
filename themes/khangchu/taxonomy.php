<?php get_header("v2")?>
<div class="section-body">
        <div>
            <section>
                <div class="container news" id="body">
                    <nav class="third-nav wraper">
                        <div class="row">
                            <div class="bg">
                            <div class="clearfix">
                                <div class="col-xs-24 col-sm-18 col-md-18">
                                                                        <div class="breadcrumbs-wrap">
                                        <div class="display">
                                            <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                            <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php the_permalink(91)?>"><span>Tin Tức<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_2">
                                            <?php
                                            $post_id = get_the_ID();
                                            $terms = get_the_terms($post_id, 'tintuc');
                                            
                                            if (!empty($terms) && !is_wp_error($terms)) {

                                                foreach ($terms as $term) {
                                                    $term_link = get_term_link( $term )
                                                    ?>
                                                    <a href="<?php echo esc_url( $term_link )?>"><span><?php echo $term->name?><i class="fa fa-lg fa-angle-right"></i></span></a>
                                                    <?php
                                                }
                                            } else {
                                                echo 'Bài viết này không có tag nào trong taxonomy này.';
                                            }
                                            ?>
                                        </li></ul>
                                        </div>
                                        <ul class="subs-breadcrumbs"></ul>
                                        <ul class="temp-breadcrumbs hidden" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/" itemprop="item" title="Trang chủ"><span itemprop="name">Trang chủ</span></a><i class="hidden" itemprop="position" content="1"></i></li>
                                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/" itemprop="item" title="Tin Tức"><span class="txt" itemprop="name">Tin Tức</span></a><i class="hidden" itemprop="position" content="2"></i></li><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/khoa-hoc-cong-nghe-dmst/" itemprop="item" title="Khoa học - Công nghệ - ĐMST"><span class="txt" itemprop="name">Khoa học - Công nghệ - ĐMST</span></a><i class="hidden" itemprop="position" content="3"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="headerSearch hidden col-xs-24 col-sm-6 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" maxlength="60" placeholder="Tìm kiếm..."><span class="input-group-btn"><button type="button" class="btn btn-info" data-url="/vi/seek/?q=" data-minlength="3" data-click="y"><em class="fa fa-search fa-lg"></em></button></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </nav>
<div class="row">
</div>
<div class="row wraper">
    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
<div class="news_column">
<?php
$term = get_queried_object(); // lấy term hiện tại (ví dụ: chuyên mục đang truy cập)

$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'tintuc',
            'field' => 'slug',
            'terms' => $term->slug,
        ),
    ),
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    echo '<ul>';
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail pull-left imghome')); ?>
                </a>
                <h3>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="text-muted">
                    <ul class="list-unstyled list-inline">
                        <li><em class="fa fa-clock-o">&nbsp;</em> <?php echo get_the_date('d/m/Y H:i:s'); ?></li>
                        <li><em class="fa fa-eye">&nbsp;</em> Đã xem: <?php echo function_exists('getPostViews') ? getPostViews(get_the_ID()) : '0'; ?></li>
                    </ul>
                </div>
                <?php the_excerpt();?>
            </div>
        </div>
        <?php
    }
    echo '</ul>';
} else {
    echo 'Không có bài viết nào trong chuyên mục này.';
}

wp_reset_postdata();
?>

</div>
    </div>
    <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
<div class="clearfix metismenu custom-metis">
    <aside class="sidebar">
        <nav class="sidebar-nav">
            <ul id="menu_65">
                                    <li class="active">
                                                <ul class="collapse in">
                                                <?php
                                                    $terms = get_terms( 'tintuc' );
                                                    
                                                    if (!empty($terms) && !is_wp_error($terms)) {
                                                        foreach ($terms as $term) {
                                                            $term_link = get_term_link( $term )
                                                           ?>
                                                             <li class="custom-metis-sub-item active_sub ">
                                    <a id="height-a" title="<?php echo $term->name?>" href="<?php echo esc_url( $term_link )?>" class="sf-with-ul"><?php echo $term->name?></a>
                                                        </li>
                                                           <?php
                                                        }
                                                    } else {
                                                        echo 'Bài viết này không có tag nào trong taxonomy này.';
                                                    }
                                                    ?>

                        </ul>
                    </li>
            </ul>
        </nav>
    </aside>
</div>
    </div>
</div>
<div class="row">
</div>
                </div>
            </section>
        </div>
    </div>
    <?php get_footer('footer') ?>