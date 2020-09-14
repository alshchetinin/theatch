<?php
/*
Template Name: Услуги
Template Post Type: page, services
*/
?>

<?php get_header(); ?>
<section>
   <div class="service-header" style="background-image: linear-gradient(<?php the_field('gradient') ?>);">
      <div class="wrapper">
         <div class="service-header__row">
            <div class="service-header__content">
               <h1 class="super-text"><?php the_title() ?></h1>
               <p class="gigant-text">Анализируем интернет-маркетинг девелопера и составляем рекомендации по увеличению конверсии и снижению стоимости заявки</p>
               <div class="service-header-form">
                  <div class="service-header-form__photo">
                     <img src="<?php the_field('form_picture') ?>" alt="" class="img-responsive">
                  </div>
                  <div class="service-header-form__text">
                     <?php the_field('tekst') ?>
                  </div>
                  <div class="service-header-form__form  form inline-form-one-field">
                     <?php echo do_shortcode(get_field('forma')) ?>
                  </div>

               </div>
            </div>

         </div>

      </div>


   </div>
</section>


<div class="site-content page">
   <?php the_post();
   the_content(); ?>
</div>
<section class="more-service">
   <div class="wrapper">
      <div class="row">
      <div class="title-section">
            <h2 class="super-text">Услуги, которые вам понравятся</h2>
         </div>
      </div>
      <div class="row">
               <?php $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => 6,
               );
               $property = new WP_Query($args); // дальше - loop
               if ($property->have_posts()) : ?>
                  <?php while ($property->have_posts()) :
                     $property->the_post(); ?>
                     <div class="col">
                        <!-- begin servict-item -->
                        <div class="servict-item">
                           <a href="<?php the_permalink()?>"></a>
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