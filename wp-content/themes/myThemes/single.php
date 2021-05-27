

<?php get_header(); ?>

<main>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
  
  <h2><?php the_title(); ?></h2><br>

  <p><?php the_content('Read more'); ?></p>
  
<?php endwhile; endif; ?>

  <div class="link-box">
    <div class="link-mg">
      <?php previous_post_link('%link','前作へ'); ?>
    </div>

    <div class="link-mg">
      <?php next_post_link('%link','後作へ'); ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>

