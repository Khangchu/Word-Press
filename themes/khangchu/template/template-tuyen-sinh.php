<?php
/*
Template Name: tuyển sinh 
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
                                    <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php get_permalink()?>"><span><?php echo get_the_title( )?><i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                            </div>
                                    <ul class="sub-breadcrumbs"></ul>
                                </div>
                            </div>
                        <div class="headerSearch hiden col-sx-24 col-sm-6 col-md-6"></div>
                    </div>
                  </div>  
                </div>
            </nav>
            <div class="wraper"></div>
</div>
<?php get_footer('footer') ?>