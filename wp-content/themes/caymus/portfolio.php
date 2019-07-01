<?php
/*
Template Name: Portfolio
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
  
  <?php the_content(); ?>                       <!-- Portfolio Group Start -->
<?php endwhile; endif; ?>                         
<div class="row" id="portfolio-section">
  <div class="tabbable tabs-left">
  <ul class="nav nav-tabs span3">
                <li class="active"><a href="#current" data-toggle="tab" id="current-tab">Current Portfolio</a></li>
                <li class=""><a href="#exited" data-toggle="tab" id="exited-tab">Exited Investments</a></li>
                <li class=""><a href="#all" data-toggle="tab" id="all-tab">All</a></li>
                <!-- <li class=""><a href="#case-study" data-toggle="tab" id="case-study-tab">Case Studies</a></li> -->
              </ul>
 <div class="tab-content">
 <div class="tab-pane active fade in" id="current">
  <!-- Loop Current Fields -->
                  <h1 class="subHead">Current Portfolio</h1>
                  <p>
                    Ongoing involvement is a key element of our investment process. With over 40 years of operating experience, we have established a reputation as hands-on, responsible investors that provide consistent guidance and support to drive growth in partnership with management.
                    <hr>
                    <?php
              $mypost = array( 'post_type' => 'current_portfolio','order' => 'ASC', );
              $loop = new WP_Query( $mypost );

          ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post();?>    
                   <span class="span2"><?php the_post_thumbnail('portfolio_companies'); ?></span> 
                  <span class="span6">
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_content(); ?></p><br />
                  <p>
                    Location: <?php the_field('current_co_location'); ?><br/>
                    Website: <a href="http://<?php the_field('current_co_website'); ?>" target="_blank"><?php the_field('current_co_website'); ?></a><br/>
                    <?php if( get_field('exit_date') ): ?>
                      <?php echo "Exit Date: ".the_field('exit_date'); ?><br/>
                    <?php endif; ?>
                    <?php if( get_field('case_study_field') ): ?>
                      <a href="http://<?php echo the_field('case_study_field'); ?>" target="_blank">Case Study</a>
                    <?php endif; ?>
                  </p>
                </span>
                 <hr>
                <?php endwhile; ?> 
    </div>
 <div class="tab-pane fade in" id="exited">
  <h1 class="subHead">Exited Investments</h1>
  <p>We pursue investments in sectors where we can bring added value. We utilize our extensive experience and network of relationships to assess the potential for prospective investments and to assist in the execution of individual investment opportunities. </p>
  <hr>
                    <?php
              $mypost = array( 'post_type' => 'exited_investments','order' => 'ASC', );
              $exitedloop = new WP_Query( $mypost );

          ?>
          <?php while ( $exitedloop->have_posts() ) : $exitedloop->the_post();?>    
                   <span class="span2"><?php the_post_thumbnail('exited_investments'); ?></span> 
                  <span class="span6">
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_content(); ?></p><br />
                  <p> 
                    Location: <?php the_field('current_co_location'); ?><br/>
                    Website: <a href="http://<?php the_field('current_co_website'); ?>" target="_blank"><?php the_field('current_co_website'); ?></a><br/>
                    <?php if( get_field('exit_date') ): ?>
                    Exit Date: <?php echo the_field('exit_date'); ?><br/>
                    <?php endif; ?>
                    <?php if( get_field('case_study_field') ): ?>
                      <a href="http://<?php echo the_field('case_study_field'); ?>" target="_blank">Case Study</a>
                    <?php endif; ?>
             </p> 
                </span>
                 <hr>
                <?php endwhile; ?>  

</div>
 <div class="tab-pane fade in" id="all">
      <!-- leaving this incase it is needed later. -->
      <!-- <ul class="nav nav-pills" id="filter-nav">
        <li class="disabled" id="all-filter"><a href="javascript:void(0)">All</a></li>
        <li class="" id="bs-filter"><a href="javascript:void(0)">Business Services</a></li>
        <li class="" id="hs-filter"><a href="javascript:void(0)">Healthcare Services</a></li>
        <li class="" id="consumer-filter"><a href="javascript:void(0)">Consumer</a></li>
        <li class="" id="niche-filter"><a href="javascript:void(0)">Niche Manufacturing</a></li>
      </ul> -->
 </div>

<!-- Loop Portfolio Fields -->                                
<div class="accordion" id="portfolio">
<?php
    $mypost = array( 'post_type' => 'portfolio_companies', );
    $loop = new WP_Query( $mypost );
?>                          
<?php while ( $loop->have_posts() ) : $loop->the_post();?>
  <?php
$checkboxvalue = get_field('business_type'); 
$biztype = "";
foreach($checkboxvalue as $key => $check){ 
    $biztype .= ' '.$check; //$biztype will store class1 class2 class3
};

?>
  <div class="accordion-group all<?php echo $biztype; $biztype = '';?>">
    <div class="accordion-heading">
      <a class="accordion-toggle portfolio-toggle plus" data-toggle="collapse" data-parent="#portfolio" href="#company<?php echo get_the_ID();?>">
        <?php the_title(); ?>
      </a>
    </div>
    <div id="company<?php echo get_the_ID();?>" class="accordion-body collapse">
      <div class="accordion-inner">
          <span class="span2"><?php the_post_thumbnail('portfolio_companies'); ?></span> 
                  <span class="span6">
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_content(); ?>
                  </p><br />
                  <p>
                    Location: <?php the_field('business_location'); ?><br />
                    <?php
                          $website_address = "business_website";
                          $field1 = get_field_object($website_address);
                          if(empty($field1['value']))
                            {
                              echo $field1['value'];
                            }
                          else
                            {
                              echo 'Website: <a href="http://' . $field1['value'] . '" target="_blank">'. $field1['value'] .'</a><br />';
                            } 
                    ?>
                    <?php if( get_field('exit_date') ): ?>
                      Exit Date: <?php echo the_field('exit_date'); ?><br/>
                    <?php endif; ?>
                     <?php if( get_field('case_study_field') ): ?>
                      <a href="http://<?php echo the_field('case_study_field'); ?>" target="_blank">Case Study</a><br/>
                    <?php endif; ?>

                    <!--Website: <a href="http://<?php the_field('business_website'); ?>" target="_blank"><?php the_field('business_website'); ?></a><br />-->
                  </p>
                </span> 
                  <hr>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
</div>
</div>
</div>

        
        <!--?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?-->

      <!--/div-->

      <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

    </div>
    
    <?php // comments_template(); ?>

    
<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>