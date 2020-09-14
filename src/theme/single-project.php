<?php
/*
Template Name: Шаблон проекта
Template Post Type: project
*/
?>

<?php get_header(); ?>

<section>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
   <div class="hero" style="background-image: url(<?php echo $url ?>)">   
      <div class="hero__content">
         <h1 class="gigant-text"><?php the_title()?></h1>
         <h3><?php the_excerpt()?></h3>
      </div>
      
   </div>
</section>
<div class="site-content page">
   <?php the_post();
   the_content(); ?>
</div>

<?php get_footer(); ?>