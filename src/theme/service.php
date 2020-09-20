<?php
/*
Template Name: Общая страница услуг
Template Post Type: page
*/
?>

<?php get_header(); ?>
<section class="main-page-service">
   <div class="wrapper">
      <div class="row">
         <div class="page-title">
            <h1 class="very-big-text"><?php the_title() ?></h1>
         </div>
         <div class="page-description">
         <h3 class="font-gigant">
            <?php echo get_the_excerpt(); ?>
            </h3>
         </div>
      </div>
      <div class="row">
      <?php $args = array(
            'post_type' => 'services',
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'ASC',
         );
         $property = new WP_Query($args); // дальше - loop
         if ($property->have_posts()) : ?>
            <?php while ($property->have_posts()) :
               $property->the_post(); ?>
               <div class="col">
                  <!-- begin servict-item -->
                  <div class="servict-item">
                     <a href="<?php the_permalink() ?>"></a>
                     <div class="servict-item__top">

                        <div class="servict-item__title">
                           <?php the_field('title') ?>
                        </div>

                        <div class="servict-item__description">
                           <?php the_field('description') ?>
                        </div>

                     </div>

                     <div class="servict-item__icon">
                        <img src="<?php the_field('icon') ?>" alt="" class="">
                     </div>





                  </div>
                  <!-- end servict-item -->
               </div>
            <?php endwhile; ?>
         <?php endif;
         wp_reset_postdata();
         ?>
      </div>
   </div>
</section>


<?php get_footer(); ?>