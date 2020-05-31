<?php get_header(); ?>

<main>
  <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_2310.JPG" id ="top">
  <div class="main-wrapper">
    <?php
      if(have_posts()):
        while(have_posts()) : the_post();
        ?>
        <h1 class="text-center"><?php the_title(); ?></h1>
        <?
         the_content();
        endwhile;
      endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>