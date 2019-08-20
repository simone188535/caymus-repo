<?php
/*
Template Name: Home Page
*/
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<!--div class="post" id="post-<?php the_ID(); ?>"-->
<div class="wrap slider_section">		
<div class="container" id="splash-slider">
	<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php bloginfo('template_directory'); ?>/img/slider1a.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                    <a href="/our-company#collapseOne" class="btn-large learn-more">LEARN MORE<i class="icon-chevron-right icon-white"></i></a>
                  </div>
                  <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/slider2a.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                    <a href="/our-company#collapseTwo" class="btn-large learn-more">LEARN MORE<i class="icon-chevron-right icon-white"></i></a>
                  </div>
                  <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/slider3a.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                    <a href="/our-company#collapseThree" class="btn-large learn-more">LEARN MORE<i class="icon-chevron-right icon-white"></i></a>
                  </div>
                  <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/slider4a.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                    <a href="/our-company#collapseFour" class="btn-large learn-more">LEARN MORE<i class="icon-chevron-right icon-white"></i></a>
                  </div>
       			</div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
      </div>
</div>
</div>
<div class="container" id="main-content">
	<h1 class="subHead">What Makes Caymus Equity Different?</h1>
	<div  class="row feature-section adjoined-section" >
		<ul class="row pod-section">
      <?php the_content(); ?>
     <!--li class="span3">
             <div class="thumbnail">
                <img src="<?php bloginfo('template_directory'); ?>/img/img001b.jpg">
                
                <div class="caption">
                  <h3>What We Look For</h3>
                  <p>We seek to partner with privately-held, profitable companies to provide capital, operating experience and leadership, enabling them to grow and transition.</p>
                  <a class="read-more" href="what-we-look-for.html">Read More</a>
                </div>
             </div>
        </li>     
        <li class="span3">
             <div class="thumbnail">
                <img src="<?php bloginfo('template_directory'); ?>/img/img002.jpg">
                <div class="caption">
                  <h3>Our Team</h3>
                  <p>Over 100 years of collective investing and operating experience, including over 40 years in starting, acquiring, operating, growing and successfully exiting a variety of businesses.</p>
                  <a class="read-more" href="our-team.html">Read More</a>
                </div>
             </div>
         </li>
         <li class="span3">
             <div class="thumbnail">
                <img src="<?php bloginfo('template_directory'); ?>/img/img003.jpg">
                <div class="caption">
                  <h3>Our Portfolio</h3>
                  <p>We invest in collaboration with superior management and work closely with our partners to support their efforts to grow, build market share and streamline operations.</p>
                  <a class="read-more" href="portfolio.html">Read More</a>
                </div>
             </div>
         </li-->
      </ul>
  </div>
      
		<?php endwhile; endif; ?> 
    <div class="row feature-section news-section-container adjoined-section">
    <ul class="news-section">
         <li class="span3">
             <div class="thumbnail" id="news">
                <div class="caption">
                  <h2>NEWS</h2>
                  <ul id="news-content">
                  	<?php
              $mypost = array( 'post_type' => 'caymus_news', 'posts_per_page' => 4, );
              $loop = new WP_Query( $mypost );
          ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                    <li>
                      <p><?php echo the_date('F Y'); ?></p>
                      <a href="/news"><?php the_title(); ?></a>
                      <!--a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a-->
                    </li>
                  <?php endwhile; ?>
                  </ul>
                  <a id="read-all-news" href="/news">READ ALL >></a>
                </div>
             </div>
         </li>
      </ul>
	</div>
</div>
		
		<?php // comments_template(); ?>

		
		
<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>