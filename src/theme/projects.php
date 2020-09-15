<?php
/*
Template Name: Страница проектов
Template Post Type: page
*/
?>

<?php get_header(); ?>
<section>
   <div class="wrapper">
      <div class="row">
         <div class="page-title">
            <h1 class="very-big-text"><?php the_title() ?></h1>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="projects">
      <?php $args = array(
         'post_type' => 'project',
         'posts_per_page' => -1,
      );
      $property = new WP_Query($args); // дальше - loop
      if ($property->have_posts()) : ?>
         <?php while ($property->have_posts()) :
            $property->the_post();
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $category = get_the_category();
         ?>
            <div class="project-item" style="background-image:url(<?php echo $url ?>)">
            <div class="project-item__overlay"></div>
            
               <a href="<?php the_permalink() ?>"></a>
               <div class="project-item__content">
                  <div class="project-item__title font-gigant">
                     <?php the_title() ?>
                  </div>
                  <div class="project-item__description">
                     <?php the_excerpt() ?>
                  </div>

               </div>
               <div class="project-item__tag">
                  <span><?php echo $category[0]->name; ?></span>

               </div>

            </div>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();
      ?>


   </div>
</section>
<div class="site-content page">
   <?php the_post();
   the_content(); ?>
</div>
<?php get_footer(); ?>