<div class="single-container">
  <?php get_header(); ?>

  <div class="main">
    <div class="container">


      <div class="content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-meta clearfix">
              <div class="entry-title">
                <h1><?php the_title(); ?></h1>
              </div>
                <p class="entry-author">Posted by 
                  <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
                    <?php the_author(); ?>
                  </a> 
                </p>
                <p class="entry-date"> on <?php the_date('M j Y'); ?></p>
                </p>
            </div><!-- .entry-meta -->

            <div class="entry-content">
              <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail('single-post');
                } 
              ?>
              <?php get_sidebar(); ?>
              <?php the_content(); ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>

              <div class="entry-utility">
                <?php hackeryou_posted_in(); ?>
                <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
              </div><!-- .entry-utility -->
               
            </div><!-- .entry-content -->

          </div><!-- #post-## -->

          <div id="nav-below" class="navigation">
            <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
            <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
          </div><!-- #nav-below -->

        <?php endwhile; // end of the loop. ?>

      </div> <!-- /.content -->


    </div> <!-- /.container -->
  </div> <!-- /.main -->
  <div class="footer-container content-grey">
    <?php get_footer(); ?>
  </div>
</div> <!-- /.single-container -->
