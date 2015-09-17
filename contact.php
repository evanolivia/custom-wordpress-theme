		<?php
		/*
			Template Name: Contact
		*/
		get_header();  ?>
	<div class="main">
	  <div class="container clearfix contact-content">
		    <?php // Start the loop ?>
		    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		      <h2><?php the_title(); ?></h2>
		      <div class="contact-post">
		      	<p><?php the_content(); ?></p>
		      </div>
		    <?php endwhile; // end the loop?>
	  </div> <!-- /.container -->
	</div> <!-- /.main -->
<div class="about-me-footer footer-container content-grey">
	<?php get_footer(); ?>
</div>
