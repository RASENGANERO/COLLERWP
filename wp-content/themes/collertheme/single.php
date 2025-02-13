<?php get_header(); ?>
  <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
    <div class="post" id="post-<?php the_ID(); ?>">
      <div class="post-date"><span class="post-month"><?php the_time('M') ?></span> <span class="post-day"><?php the_time('d') ?></span></div>
      <div class="post-title">
        <p><?php the_title(); ?></p>
      <h2 style="margin-top: 52px"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="entry">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>
 
      </div><!--/post -->
 
            <?php endwhile; else: ?>
 
        <p>Sorry, no posts matched your criteria.</p>
 
<?php endif; ?>
 
  </div>
 
 
<?php get_footer(); ?>