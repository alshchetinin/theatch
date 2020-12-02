<?php
/*
Template Name: Шаблон проекта
Template Post Type: project
*/
?>

<?php get_header(); ?>

<section>
   <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
   <div class="hero" style="background-image: url(<?php echo $url ?>)">
      <div class="hero__overlay"></div>

      <div class="hero__content">
         <h1 class="font-gigant"><?php the_title() ?></h1>
         <h3><?php the_excerpt() ?></h3>
      </div>

   </div>
</section>
<div class="site-content page">
   <?php the_post();
   the_content(); ?>
</div>
<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <div class="more-project">
            <div class="more-project__content">
               <h3 class="font-super-gigant">
                  Посмотрите <br>другие работы
               </h3>



               <?php $args = array(
                  'post_type' => 'project',
                  'canetory_name' => get_the_category(),
                  'posts_per_page' => 3,
                  'orderby' => 'date',
               );
               $property = new WP_Query($args); // дальше - loop
               if ($property->have_posts()) : ?>
                  <?php while ($property->have_posts()) :
                     $property->the_post(); ?>
                     <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                     ?>
                     <div class="more-project-post" style="background-image: url(<?php echo $url ?>)">
                        <a href="<?php the_permalink() ?>"></a>                        
                        <div class="more-project-post__title">
                           <?php the_title() ?>
                        </div>

                     </div>
                  <?php endwhile; ?>
               <?php endif;
               wp_reset_postdata();
               ?>

               <a href="/project" class="all-project">
                  <h4 class="font-h3">Посмотреть все проекты</h4>
               </a>

            </div>

         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>