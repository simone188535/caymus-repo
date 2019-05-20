<?php get_header(); ?>

		

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="wrap" id="top-breadcrumb-wrap">
			<div class="container">
			<ul class="breadcrumb" id="top-breadcrumb">
			  <li><a href="<?php bloginfo('url'); ?>">Home</a> <span class="divider">/</span></li>
			  <li class="active"><a href="#"><?php the_title(); ?></a></li>
			</ul>
			</div>
			</div>	
			<div class="container" id="main-content">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<!--?php include (TEMPLATEPATH . '/inc/meta.php' ); ?-->

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<!--?php include (TEMPLATEPATH . '/inc/nav.php' ); ?-->

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</div>   
<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>