<?php
/*
Template Name: News
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
			<h1 class="subHead"><?php the_title(); ?></h1>
				<!--?php the_meta(); ?-->
			<!--?php include (TEMPLATEPATH . '/inc/meta.php' ); ?-->
			<!--div class="entry"-->

	<?php the_content(); ?>
<?php endwhile; endif; ?>				                  
    <div class="accordion" id="news-blog">
    <?php
              $mypost = array( 'post_type' => 'caymus_news', );
              $loop = new WP_Query( $mypost );
          ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post();?>
    <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle news-toggle" data-toggle="collapse" data-parent="#ourCompany" href="#article<?php echo get_the_ID();?>">
        <span class="header"><?php the_title(); ?></span><br />
        <span class="date"><?php echo the_date('F Y'); ?> - <?php the_field('article_location'); ?></span><span class="continue-reading plus">Continue Reading</span>
      </a>
    </div>
    <div id="article<?php echo get_the_ID();?>" class="accordion-body collapse">
      <div class="accordion-inner">
<p><?php the_content(); ?></p>
<a href="#" onclick="return false;" class="download-pdf">Download PDF</a>
      </div>
    </div>
  </div>
  <?php endwhile; ?> 
       </div> 

			<!--/div-->

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		<form method="post" action="<?php bloginfo('template_directory'); ?>/pdfgenme.php" style="display: none;">
		    <input type="text" name="pdf-header" id="hidden_form_header">
		    <input type="text" name="pdf-date" id="hidden_form_date">
		    <textarea name="content" id="hidden_form_content"></textarea>
		    <br />
		    <button type="submit" name="submit" id="submit" class="btn" value="Generate Pdf">Generate PDF</button> 
	  </form>
	  <script type="text/javascript">
      $('.download-pdf').click(function() {
      // Create Variable and Clean Up String
      var content = $(this).parent().html();
      content = content.replace(/<p><\/p>/gi, '');
      content = content.replace(/<\/p>/gi, '</p><br /><br />');
      content = content.replace('<a href="#" onclick="return false;" class="download-pdf">Download PDF<\/a>', '');
      content = content.replace('<a class="download-pdf" onclick="return false;" href="#">Download PDF<\/a>', '');  
      var title = $(this).parent().parent().parent().find(".header").html();
      var date = $(this).parent().parent().parent().find(".date").html();
      $('#hidden_form_content').val(content);
      $('#hidden_form_header').val(title);
      $('#hidden_form_date').val(date);

      $('#submit').click();
});
  </script>
		
		<?php // comments_template(); ?>

		
<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>