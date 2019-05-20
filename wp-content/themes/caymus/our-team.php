<?php
/*
Template Name: Our Team
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
			<h1 class="subHead"><!--?php the_title(); ?--></h1>
				<!--?php the_meta(); ?-->
			<!--?php include (TEMPLATEPATH . '/inc/meta.php' ); ?-->
			<!--div class="entry"-->
			
	<?php the_content(); ?>
<?php endwhile; endif; ?>				                  
<div class="row" id="team-section">
	 <div class="tabbable tabs-left">
	 	<ul class="nav nav-tabs span3">
	 		<?php
		              $mypost = array( 'post_type' => 'our_team', );
		              $loop = new WP_Query( $mypost );
		          ?>
		          <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                <li class="<?php the_field('first_active_post'); ?>"><a href="#team<?php echo get_the_ID();?>" data-toggle="tab"><?php the_title(); ?><br /><span class="sub-titles"><?php the_field('member_title'); ?></span></a></li>

                <?php endwhile; ?>
              </ul>
              <div class="tab-content">
              	   <?php
		              $mypost = array( 'post_type' => 'our_team', );
		              $loop = new WP_Query( $mypost );
		          ?>
		          <?php while ( $loop->have_posts() ) : $loop->the_post();?>
              	 <div class="tab-pane fade in <?php the_field('first_active_post'); ?>" id="team<?php echo get_the_ID();?>">
                  <h1 class="subHead"><?php the_title(); ?>, <span><?php the_field('member_title'); ?></span></h1>
                  <?php the_post_thumbnail('portfolio_companies'); ?>
                  <p>
                    <?php the_content(); ?>
                  </p>
                  <p class="short-list">
                  	<!--?php
                  		$board_name = "board_representation";
						$field1 = get_field_object($board_name);
						echo '<strong>' . $field1['label'] . '</strong>: ' . $field1['value'];
					?-->
					<?php
					      $board_name = "board_representation";
					      $field1 = get_field_object($board_name);
					      if(empty($field1['value']))
					        {
					          echo $field1['value'];
					        }
					      else
					        {
					          echo '<strong>' . $field1['label'] . '</strong>: ' . $field1['value'] . '<br />';
					        } 
					?>
					
					<?php
                  		$memb_name = "member_education";
						$field2 = get_field_object($memb_name);
						echo '<strong>' . $field2['label'] . '</strong>: ' . $field2['value'];
					?><br />
					<?php
                  		$direc_name = "direct_phone";
						$field3 = get_field_object($direc_name);
						echo '<strong>' . $field3['label'] . '</strong>: ' . $field3['value'];
					?><br />
					<?php
                  		$mem_email = "member_email";
						$field4 = get_field_object($mem_email);
						echo '<strong>' . $field4['label'] . '</strong>: <a href="mailto:' . $field4['value'] . '">' . $field4['value'] . '</a>';
					?><br />
                  </p>
                </div>
                 <?php endwhile; ?>
			<!--/div-->
		</div>
	</div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
	</div>	
		<?php // comments_template(); ?>

		
<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>