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

		<div class="center-center-frame">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
		<?php endwhile; ?>

		</div>

	</div>

	<div class="clear"></div>

	<?php get_footer(); ?>

</div>