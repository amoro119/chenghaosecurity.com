<?php
/**
 * The template for displaying Category Archive pages.
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
    <div id='content' style='width:1258px;height:509px;background:url(../../effect/source/bg/cbg.png) repeat-y;margin:0px auto'>


<!-- 网页内容详情 -->

<div id='pdv_13549' class='pdv_class'  title='' style='width:970px;height:230px;top:75px;left:253px; z-index:3'>
<div id='spdv_13549' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
    <div style="height:25px;margin:1px;display:none;background:;">
        <div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
        
        </div>
        <div style="float:right;margin-right:10px;display:none">
        <a href="-1" style="line-height:25px;color:">更多</a>
        </div>
    </div>
<div style="padding:0px">
<link href="../../page/templates/css/pagecontent.css" rel="stylesheet" type="text/css" />
<div id='pagecontent' class='page_content'>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>
<script>

$(window).load(function(){
    $("#pagecontent").find("img").hide();
    var w=$("#pagecontent")[0].offsetWidth;
    $("#pagecontent").find("img").each(function(){
        $(this).show();
        if(this.offsetWidth>w){
            this.style.width=w + "px";
        }
    });
        
});

</script>

</div>
</div>

</div>
</div>

<!-- 产品搜索表单 -->

<div id='pdv_13547' class='pdv_class'  title='产品搜索' style='width:219px;height:195px;top:314px;left:0px; z-index:4'>
<div id='spdv_13547' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(../../base/border/549/images/title.png) 0 0 no-repeat">
<div style="height:38px;border:0px;padding:0;margin:0;">
    <div style="float:left;color:#e0e0e0;font:14px/36px 'microsoft yahei',simsun;padding-left:33px">产品搜索</div>
    <div style="float:right;width:55px;height:38px;background:url(../../base/border/549/images/title.png) -945px 0px no-repeat;"><a href="-1" style="display:none;">
    <img src="../../base/border/549/images/more.png" style="border:0px;padding-top:12px;"></a></div>
</div>
<div style="margin:0px;padding:5px">
<link href="../../product/templates/css/product_searchform_dolphin.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../../product/js/selectbox.js"></script>
<div class="productsearchformzone">
<form id="productsearchform" method="get" action="../../product/class/index.php">
  
   <div class="productsearchform">
    <select name="catid" id="catid" class="box" style="display:none; background:#ffffff; width:136px; height:19px;">
      <option value="0" >请选择分类</option>
      
      <option value='74'>无级变速器系列</option><option value='115'>齿轮减速机系列</option><option value='116'>摆线针轮减速机</option><option value='119'>F3系列齿轮减速机</option><option value='156'>减速机配件</option><option value='155'>汽车变速箱系列</option><option value='154'>伺服电机系列</option><option value='153'>精密行星减速机</option>
    
    </select> 
    <script>
    makeSelectBox('catid','../../');
    </script>
  </div>
    <div class="productsearchform">
    <input name="key" type="text" id="productsearchform_key" value="" style="width:134px;" class="inputproduct">
  </div>
  <div class="productsearchform2">
  <input name="imageField" id="button" type="image" src="../../product/templates/images/search5.gif" >
  </div>
</form>
</div>

</div>
</div>

</div>
</div>

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
</div>
<?php get_footer(); ?>

