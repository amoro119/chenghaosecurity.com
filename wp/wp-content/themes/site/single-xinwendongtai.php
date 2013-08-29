<?php

get_header(); ?>
<div id='content' style='width:1258px;height:509px;background:url(../../effect/source/bg/cbg.png) repeat-y;margin:0px auto'>



<!-- 当前位置提示条 -->

<div id='pdv_13961' class='pdv_class'  title='' style='width:1037px;height:43px;top:0px;left:221px; z-index:6'>
<div id='spdv_13961' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(../../base/border/788/images/title.png) 0px 0px no-repeat">
    <div style="float:left;font:14px/38px Simsun,Arial;color:#303030;"></div>
    <div style="float:right;width:50px;height:40px;background:url(../../base/border/788/images/title.png) -1150px 0px no-repeat;">&nbsp;</div>
 
<link href="../../page/templates/css/nav.css" rel="stylesheet" type="text/css" />
<div id="nav">
您现在的位置：<?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>

</div>

</div>

</div>
</div>

<!-- 产品分类（列表） -->

<div id='pdv_14630' class='pdv_class'  title='产品分类' style='width:219px;height:307px;top:0px;left:0px; z-index:8'>
<div id='spdv_14630' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(../../base/border/549/images/title.png) 0 0 no-repeat">
<div style="height:38px;border:0px;padding:0;margin:0;">
    <div style="float:left;color:#e0e0e0;font:14px/36px 'microsoft yahei',simsun;padding-left:33px">产品分类</div>
    <div style="float:right;width:55px;height:38px;background:url(../../base/border/549/images/title.png) -945px 0px no-repeat;"><a href="-1" style="display:none;">
    <img src="../../base/border/549/images/more.png" style="border:0px;padding-top:12px;"></a></div>
</div>
<div style="margin:0px;padding:0px">

<link href="../../product/templates/css/productclass_dolphin.css" rel="stylesheet" type="text/css" />
<?php 
wp_nav_menu( array( 'menu' => 'sidebar','container_class' => 'productclass_dolphin') ); 
?>
</div>
</div>

</div>
</div>

<!-- 文章翻页检索 -->

<div id='pdv_14266' class='pdv_class'  title='' style='width:969px;height:347px;top:72px;left:252px; z-index:8'>
<div id='spdv_14266' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
    <div style="height:25px;margin:1px;display:none;background:;">
        <div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
        
        </div>
        <div style="float:right;margin-right:10px;display:none">
        <a href="-1" style="line-height:25px;color:">更多</a>
        </div>
    </div>
<div style="padding:0px">

<link href="../../news/templates/css/newscontent.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../news/js/newscontent.js"></script>
<div id="newscontent">
    <div class="newstitle"><?php the_title(); ?></div>

    <div class="info">作者：管理员 &nbsp;&nbsp; 发布于：<?php the_time('Y年m月j日') ?> &nbsp;&nbsp; </div>
    <div id="memo" class="memo" style="display:block"><span style="color:#ff6600">摘要：</span><?php $excerpt = get_the_excerpt( $deprecated );echo $excerpt; ?></div>
    <div id="con" class="con"><div id="con" class="con">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div>
</div>
<script>
$(function(){
$().contentPages('346');
});

</script>

</div>
</div>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>