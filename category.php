<?php get_header(); ?>
<div id="center-content-outer-frame">
	<div id="center-content-inner-frame">
		<?php while ( have_posts() ) : the_post() ?>
		<div id="single-blog">
			<h1><?php the_title(); ?></h1>
			<?php the_content('Details....'); ?>
				<div id="blog-date">Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?></div>
		</div>
		<?php endwhile; ?>
		<div class="clear"></div>
	</div>
	<div id="advert-bottom">
		<script type="text/javascript"><!--
		google_ad_client = "ca-pub-8029489798825364";
		/* bottom-advert */
		google_ad_slot = "4927411625";
		google_ad_width = 728;
		google_ad_height = 90;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	</div>
	<?php get_footer(); ?>
</div>
