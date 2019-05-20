<?php
/*
Template Name: Partner Login
*/



 get_header(); ?>

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
			
				<!--?php the_meta(); ?-->
			<!--?php include (TEMPLATEPATH . '/inc/meta.php' ); ?-->
			<form class="form-signin">
			<h1 class="subHead"><?php the_title(); ?></h1>
        <p>In order to log in to the Limited Partners Login section of the Caymus Equity website, please submit your Username and Password and click Login. <b>Please note this section of our website is coming soon!<b/></p>
        <input type="text" class="input-block-level" placeholder="Username">
        <input type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn" type="submit">Sign in</button>
        <br /><br /><a class="nonblock" href="javascript:void(0);">Forgot password</a> / 
        <a class="nonblock" href="javascript:void(0);">Help</a>
      </form>
			<!-- <div class="entry"> -->

				<?php the_content(); ?>

				<!--?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?-->

			<!-- </div> -->

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>
		
<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>