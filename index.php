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
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="center-center-frame">
				<div id="posts-title">
					<?php the_title(); ?>
				</div>
				<div id="posts-content">
					<?php the_content(); ?>
				</div>
				<div class="clear"></div>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="clear"></div>
	<?php get_footer(); ?>
</div>