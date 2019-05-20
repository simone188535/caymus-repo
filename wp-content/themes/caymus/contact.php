<?php
/*
Template Name: Contact
*/



 get_header(); ?>
  <script>
$(document).ready(function() {
    $('#success-msg').hide().before;
    $('.error').hide();
  });
$(function() {
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $("#submit").click(function() {
    // validate and process form
    // first hide any error messages
    $('.error').hide();
    
    var name = $("input#name").val();
    if (name == "") {
      $("label#input_error").show();
      $("input#name").focus();
      return false;
    }
      var email = $("input#email").val();
    if (email == "") {
      $("label#input_error").show();
      $("input#email").focus();
      return false;
    }
    var contactmessage = $('textarea[name=contactmessage]').val();
    if (contactmessage == "") {
      $("label#input_error").show();
      $("#contactmessage").focus();
      return false;
    }

     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailUs.email.value))  
   {  
      
   }else{  
    alert("You have entered an invalid email address!")  
    return (false);  
   } 
    var dataString = '&name=' + name + '&email=' + email + '&contactmessage=' + contactmessage;
    //alert (dataString);return false;
    
    $.ajax({
      type: "POST",
      url: "<?php bloginfo('template_directory'); ?>/contactengine.php",
      data: dataString,
      success: function() {
        $('form').fadeOut('slow');
        $('#success-msg').show(1000);
      }
     });
    return false;
  });
});
</script>	
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
			
				                  
		<div class="row" id="contact-information">
<?php the_content(); ?>
<span class="span6 text">
  <h1 class="subHead">Call Us</h1>
  <p>We invest in lower middle market companies, with a focus on business services, healthcare services, consumer, and niche manufacturing sectors. If you have any company in mind that fits our criteria within these industries, feel free to email or call us. We are happy to discuss and provide quick feedback upon review.<p>
<h5>Phone: (404) 995-8321</h5>
 <hr>
<h1 class="subHead">Email Us</h1>
<form class="form-horizontal" id="emailUs" action="" method="post">
  <div class="control-group">
  <input type="text" placeholder="Name" id="name">
  <input type="text" placeholder="Email" id="email">
  </div>
  <div class="control-group">
  <textarea rows="6" placeholder="Add a brief message..." id="contact-textarea" name="contactmessage"></textarea>
</div>
  <button type="submit" class="btn" id="submit">Submit</button>
</form>
<div id="success-msg">
<img src="<?php bloginfo('template_directory'); ?>/img/success-check.png">
<h4>Thank you!</h4>
<h6>Your email has been sent successfully.</h6>
</div>
<hr>
<h1 class="subHead">Careers</h1>
<p>From time to time, Caymus Equity, Atlanta office only, or its portfolio companies may have openings that could lead to new career opportunities.</p>
<p>Please send resumes to <a href="mailto:careers@caymusequity.com">careers@caymusequity.com</a> for additional inquiries.</p>
<hr>
</span>
<span class="span6">
  <h1 class="subHead">Office Locations and Directions</h1>
  <div class="direction-wrap">
  <div class="row directions">
    <span class="span3">
      <p>ATLANTA</p>
      <p>One Paces West<br />
      2727 Paces Ferry Road SE, Suite 1650<br />
      Atlanta, GA 30339<br />
      T (404) 995-8300<br />
      F (404) 995-8340</p>
      <a href="https://maps.google.com/maps?q=2727+Paces+Ferry+Road+SE,+Suite+1650,+Atlanta,+GA+30339&hl=en&ll=33.847608,-84.375&spn=1.608123,2.90863&sll=40.75558,-73.959961&sspn=2.933387,5.817261&hnear=3490+Piedmont+Rd+NE+%25231040,+Atlanta,+Fulton,+Georgia+30305&t=m&z=9" target="_blank">Directions</a>
    </span>
    <span class="span3"><img src="<?php bloginfo('template_directory'); ?>/img/map_atl1.gif"></span>
  </div>
</div>
<div class="direction-wrap">
  <div class="row directions">
    <span class="span3">
      <p>NEW YORK</p>
      <p>641 Lexington Avenue <br />  
      17th Floor<br /> 
      New York, NY 10022</p>
      <p>T (212) 755-3600<br /></p>
      <a href="https://maps.google.com/maps?q=641+Lexington+Avenue,+17th+Floor+New+York,+NY+10022&hl=en&ll=40.758944,-73.96981&spn=0.011459,0.022724&sll=40.75883,-73.969944&sspn=0.011459,0.022724&hnear=641+Lexington+Ave,+New+York,+10022&t=m&z=16&iwloc=A" target="_blank">Directions</a>
    </span>
    <span class="span3"><img src="<?php bloginfo('template_directory'); ?>/img/map_ny.gif"></span>
  </div>
 </div>
 <!--div class="direction-wrap"> 
  <div class="row directions">
    <span class="span3">
      <p>PHOENIX</p>
      <p>19820 N. 7th Street<br />  
      Suite 290<br /> 
      Phoenix, AZ 85024</p>
      <p>T (623) 680-0406<br /></p>
      <a href="https://maps.google.com/maps?q=19820+N.+7th+Street,+Suite+290+Phoenix,+AZ+85024&hnear=19820+N+7th+St+%2523290,+Phoenix,+Maricopa,+Arizona+85024&gl=us&t=m&z=16" target="_blank">Directions</a>
    </span>
    <span class="span3"><img src="<?php bloginfo('template_directory'); ?>/img/map_az.gif"></span>
  </div>
</div-->
</span>
<?php endwhile; endif; ?>	
 
			<!--/div-->

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
	</div>	
		<?php // comments_template(); ?>

		
<!--?php get_sidebar(); ?-->
  <!--[if IE]>
<script>
$(document).ready(function() {
  $("#name").val('Name');
  $("#email").val('Email');
  $("#contact-textarea").val('Add a brief message...');
});
</script>
<![endif]-->
<?php get_footer(); ?>