<?php get_header(); ?>

	<div class="main" id="thumbs">
		
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="mbx-dh">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-emo-grin"></i>汉赛尔的面包屑：<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &raquo;
<?php
if( is_single() ){
$categorys = get_the_category();
$category = $categorys[0];
echo( get_category_parents($category->term_id,true,' &raquo; ') );
the_title();
} elseif ( is_page() ){
the_title();
} elseif ( is_category() ){
single_cat_title();
} elseif ( is_tag() ){
single_tag_title();
} elseif ( is_day() ){
the_time('Y年Fj日');
} elseif ( is_month() ){
the_time('Y年F');
} elseif ( is_year() ){
the_time('Y年');
} elseif ( is_search() ){
echo $s.' 的搜索结果';
}
?>
</div>
<br>

				<?php get_template_part( 'content', get_post_format() ); ?>

<!-- JiaThis Button BEGIN -->
<div class="jiathis_style">
<span class="jiathis_txt">分享到：</span>
<a class="jiathis_button_tsina">新浪微博</a>
<a class="jiathis_button_qzone">QQ空间</a>
<a class="jiathis_button_cqq">QQ好友</a>
<a class="jiathis_button_fb">Facebook</a>
<a class="jiathis_button_googleplus">Google+</a>
<a class="jiathis_button_twitter">Twitter</a>
<a class="jiathis_button_copy">复制网址</a>

<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" >
var jiathis_config={
	summary:"",
	ralateuid:{
		"tsina":"Google黒板报"
	},
	shortUrl:false,
	hideMore:false
}
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END -->

<br><br>
<span style="font-size: 8pt;"><i class="icon-emo-grin"></i>站点维护需要很多资金和精力，希望您能对本站关闭ADBlock之类的屏蔽广告插件然后猛击广告来支持本站，以维持本站微薄的收入
<br><br>
<i class="icon-emo-grin"></i>如果本站给你带来过欢乐，或者对你有所帮助，欢迎<a href="http://www.anotherhome.net/donate" target="_blank">捐款</a>支持，本站所得捐赠之款项80%将用于<a href="http://www.anotherhome.net/projectpage" target="_blank">公益项目</a>
<br><br>
<i class="icon-emo-grin"></i>无特殊说明，本站所有原创内容采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>进行许可</span></span>
<br><br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 文章下方 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5433699470727157"
     data-ad-slot="6056478224"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
	</div><!-- main -->
<?php get_sidebar(); ?>
</div><!-- #main .wrapper -->
</div>
<?php get_footer(); ?>