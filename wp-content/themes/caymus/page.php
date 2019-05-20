<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<!--div class="post" id="post-<?php the_ID(); ?>"-->
		<div class="wrap" id="top-breadcrumb-wrap">
			<div class="container">
			<ul class="breadcrumb" id="top-breadcrumb">
			  <li><a href="<?php bloginfo('url'); ?>">Home</a> <span class="divider">/</span></li>
			  <li class="active"><a href="#"><?php the_title(); ?></a></li>
			</ul>
			</div>
			</div>	
			<div class="container" id="main-content">	
			<h1 class="subHead"><?php the_title(); ?></h1>
				<!--?php the_meta(); ?-->
			<!--?php include (TEMPLATEPATH . '/inc/meta.php' ); ?-->

			<div class="entry">

				<?php the_content(); ?>

				<!--?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?-->

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>
		
<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>