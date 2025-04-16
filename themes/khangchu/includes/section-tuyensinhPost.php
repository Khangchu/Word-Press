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
                                            $terms = get_the_terms($post_id, 'tuyensinh');
                                            
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
                                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/" itemprop="item" title="Tin Tức"><span class="txt" itemprop="name">Tin Tức</span></a><i class="hidden" itemprop="position" content="2"></i></li><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/dao-tao/" itemprop="item" title="Đào tạo"><span class="txt" itemprop="name">Đào tạo</span></a><i class="hidden" itemprop="position" content="3"></i></li>
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
                        <div class="news_column panel panel-default" itemtype="http://schema.org/NewsArticle" itemscope="">
                            <div class="panel-body">
                                <h1 class="title margin-bottom-lg" itemprop="headline"><?php the_title()?></h1>
                                <div class="hidden hide d-none" itemprop="author" itemtype="http://schema.org/Person" itemscope="">
                                    <span itemprop="name">Điện - Điện tử</span>
                                </div>
                                <span class="hidden hide d-none" itemprop="datePublished"><?php get_the_date('d/m/Y h:i:s')?></span>
                                <span class="hidden hide d-none" itemprop="dateModified"><?php get_the_date('d/m/Y h:i:s')?></span>
                                <span class="hidden hide d-none" itemprop="mainEntityOfPage">https://seee.hust.edu.vn/vi/news/dao-tao/thong-bao-ve-le-tot-nghiep-02-2025-317646.html</span>
                                <span class="hidden hide d-none" itemprop="image">https://seee.hust.edu.vn/uploads/seee/news/2025_02/cover-page01-avatar.jpg</span>
                                <div class="hidden hide d-none" itemprop="publisher" itemtype="http://schema.org/Organization" itemscope="">
                                    <span itemprop="name">Trường Điện - Điện tử</span>
                                    <span itemprop="logo" itemtype="http://schema.org/ImageObject" itemscope="">
                                        <span itemprop="url">https://seee.hust.edu.vn/uploads/seee/logo-dhbk-1-02_130_191.png</span>
                                    </span>
                                </div>
                                <div class="row margin-bottom-lg">
                                    <div class="col-md-12">
                                        <span class="h5"><?php echo get_the_date('l, d/m/Y H:i:s'); ?></span>
                                    </div>
                                    <div class="col-md-12">
                                        <ul class="list-inline text-right">
                                            <li class=""><a class="dimgray" title="Giới thiệu bài viết cho bạn bè" href="javascript:void(0);" onclick="newsSendMailModal('#newsSendMailModal', '/vi/news/sendmail/dao-tao/thong-bao-ve-le-tot-nghiep-02-2025-317646.html', 'a3fe36b902af9e3ae7e13ddf56c0ea21');"><em class="fa fa-envelope fa-lg">&nbsp;</em></a></li>
                                                                <li><a class="dimgray" rel="nofollow" title="In ra" href="javascript: void(0)" onclick="nv_open_browse('/vi/news/print/dao-tao/thong-bao-ve-le-tot-nghiep-02-2025-317646.html','',840,500,'resizable=yes,scrollbars=yes,toolbar=no,location=no,status=no');return false"><em class="fa fa-print fa-lg">&nbsp;</em></a></li>
                                                                <li><a class="dimgray" rel="nofollow" title="Lưu bài viết này" href="/vi/news/savefile/dao-tao/thong-bao-ve-le-tot-nghiep-02-2025-317646.html"><em class="fa fa-save fa-lg">&nbsp;</em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                    if(have_posts(  )){
                                        while(have_posts()) {
                                            the_post();
                                            ?>
                                <div class="css-page">
                                    <div id="page-bodyhtml" class="bodytext margin-bottom-lg">
                                        <?php
                                            $content = get_the_content();
                                            $content = apply_filters('the_content', $content);
                                            $content = preg_replace('/<img([^>]*)>/', '<img class="img-thumbnail"$1 width="800"">', $content);
                                            echo $content;
                                            ?>
                                        <p style="text-align: justify;"></p>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    }
                                    ?>
                            </div>
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
                                                $terms = get_terms([
                                                    'taxonomy' => 'tuyensinh',
                                                    'hide_empty' => false,
                                                ]);

                                                if (!empty($terms) && !is_wp_error($terms)) {
                                                    foreach ($terms as $term) {
                                                        $term_link = get_term_link($term);

                                                        $check_args = [
                                                            'post_type' => 'post',
                                                            'posts_per_page' => 1,
                                                            'tax_query' => [
                                                                [
                                                                    'taxonomy' => 'tuyensinh',
                                                                    'field' => 'slug',
                                                                    'terms' => $term->slug,
                                                                ],
                                                            ],
                                                        ];

                                                        $term_query = new WP_Query($check_args);
                                                        $has_posts = $term_query->have_posts();

                                                        $li_class = 'custom-metis-sub-item';
                                                        if ($has_posts) {
                                                            $li_class .= ' active_sub';
                                                        }
                                                        ?>
                                                        <li class="<?php echo esc_attr($li_class); ?>">
                                                            <a id="height-a" title="<?php echo esc_attr($term->name); ?>" href="<?php echo esc_url($term_link); ?>" class="sf-with-ul">
                                                                <?php echo esc_html($term->name); ?>
                                                            </a>
                                                            <?php if ($has_posts){ ?>
                                                                <span id="span-id" class="fa arrow expand" style="margin-top: -52px;"></span>
                                                                <ul class = "collapse">
                                                                <?php echo do_shortcode('[list_tuyensinh slug="' . $term->slug . '"]'); ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                        <?php
                                                        wp_reset_postdata();
                                                    }
                                                } else {
                                                    echo '<li>Không có chuyên mục nào trong taxonomy này.</li>';
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                        </div>
                    </div>
                <div class="row"></div>
            </div>
        </section>
    </div>
   </div>
   <script>
document.addEventListener("DOMContentLoaded", function () {
    const arrows = document.querySelectorAll(".arrow.expand");

    arrows.forEach(arrow => {
        arrow.addEventListener("click", function (e) {
            e.preventDefault();
            const parentLi = this.closest("li");
            const submenu = parentLi.querySelector("ul.collapse");
            if (!submenu) return;
            parentLi.classList.toggle("active");
            submenu.classList.toggle("in");
            const isExpanded = submenu.classList.contains("in");
            submenu.setAttribute("aria-expanded", isExpanded);
            submenu.style.height = isExpanded ? submenu.scrollHeight + "px" : "0px";
        });
    });
});

</script>

