<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php flat_post_nav(); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
			
		</div>
	</div>
<?php get_footer(); ?>