<?php
/*
Template Name: Case Study
*/



 get_header(); ?>
 <div class="container">  
    <div class="row case-study-adjust">
      <div class="tab-pane fade in" id="case-study">
          <!-- Loop Case Studies-->
          <?php
          $mypost = array( 'post_type' => 'case_study', );
          $loop = new WP_Query( $mypost );

          if(isset($_GET['case'])){
            $caseNumber = $_GET['case'];
          }else{
             $caseNumber=1;
          }

      ?>                          
      <!-- <?php $postcount = 0; ?> -->
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>
      <!--   <?php $postcount++; ?> -->
        <?php if ($postcount == $caseNumber) :?>
                        <span class="span5">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p></span>
                        <span class="span3"><?php the_post_thumbnail('case_study'); ?></span>
                        <span class="span8">
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#<?php echo get_the_ID();?>1"><i class="icon icon-random"></i>Transaction:</a>
                        <div id="<?php echo get_the_ID();?>1" class="collapse"><p><?php the_field('case_transaction'); ?></p></div>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#<?php echo get_the_ID();?>2"><i class="icon icon-thumbs-up"></i>Opportunity:</a>
                        <div id="<?php echo get_the_ID();?>2" class="collapse"><p><?php the_field('case_opportunity'); ?></p></div>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#<?php echo get_the_ID();?>3"><i class="icon icon-list-alt"></i>Strategy:</a>
                        <div id="<?php echo get_the_ID();?>3" class="collapse"><p><?php the_field('case_strategy'); ?></p></div>
                        </span>
                       <!--  <hr> -->
         <?php endif; ?>                 
        <?php endwhile; ?>                 
      </div>
    </div>
</div>

<?php get_footer(); ?>