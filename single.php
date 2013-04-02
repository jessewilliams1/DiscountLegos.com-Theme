<?php get_header(); ?>

<div class="outer-frame">

	<div class="sidebar-frame-blank">

		<div class="sidebar-frame">

			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'left-nav-list' ) ); ?>

		</div>

		<div class="sidebar-frame">

			<?php wp_nav_menu( array( 'theme_location' => 'category-menu', 'menu_class' => 'left-nav-list' ) ); ?>

		</div>

		<div class="sidebar-frame">

			<?php get_sidebar(); ?>

		</div>

	</div>

	<div class="center-frame">

		<div class="center-center-frame">

		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

			<h2><?php the_title(); ?></h2>  

			<?php the_content(); ?>  

		    <?php endwhile; else: ?>

			<h2>Woops...</h2>

			<p>Sorry, no products were found.</p>  

		<?php endif; ?>  

		    <p align="center"><?php posts_nav_link(); ?></p>

		</div>

	</div>

	<div class="clear"></div>

	<?php get_footer(); ?>

</div>