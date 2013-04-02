<?php get_header(); ?>
<div class="outer-frame">
	<div class="sidebar-frame-blank">
		<div class="sidebar-frame">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'left-nav-list' ) ); ?>
		</div>
		<div class="sidebar-frame">
			<?php include("cat-menu.php"); ?>
		</div>
		<div class="sidebar-frame">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<div class="center-frame">
		<h2 class="pagetitle">Search results for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('items'); wp_reset_query(); ?></h2>
		<div class="center-center-frame">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="search-result-frame">
					<div class="search-results-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<div class="search-results-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div><div class="clear"></div>
				</div>
			<hr>
		<?php endwhile; ?>
		</div>
	</div>
	<div class="clear"></div>
	<?php get_footer(); ?>
</div>