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


<div class="site-content page-service-content">
   <section class="sticky-form">
      <div class="wrapper">
         <div class="row">
            <div class="card-form">
               <div class="card-form__title">
               <?php the_field('big-form-headine') ?>
               </div>
               <div class="card-form__persone">
               <div class="big-form__persone">
                  <div class="big-form__picture">
                     <img src="<?php the_field('big-form-picture')?>" alt="" class="img-responsive">
                  </div>
                  <div class="big-form__contact">
                     <a href="mailto:<?php the_field('big-form-mail') ?>"><?php the_field('big-form-mail') ?></a>
                     <a href="tel:<?php the_field('big-form-phone') ?>" class="phone"><?php the_field('big-form-phone') ?> </a>
                  </div>


               </div>
               </div>
               

               <div class="vertical-form">
               <?php echo do_shortcode(get_field('sticky-form')) ?>
               <small>Нажимая на кнопку, я соглашаюсь с политикой конфиденциальности</small>
            </div>   
            </div>
            
         </div>
      </div>

   </section>

   <?php the_post();
   the_content(); ?>
</div>

<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="partner">
         <div class="partner__title">
            <h2 class="gigant-text" ><?php the_field('headline-partner')?></h2>
         </div>
         <div class="partner__logos">

         <?php while( have_rows('logos') ): the_row(); 
				// переменные
				$logo = get_sub_field('logo');
				?>
            <div class="partner-logo">
               <img class="img-responsive" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
            </div>            
   

			<?php endwhile; ?>


         </div>
         
      </div>
   </div>
</div>
</section>

<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="quote">
         <?php $post_id = get_the_ID()?>
         <div class="quote__text" >
            <h2 class="gigant-text" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);">
            <span class="quote__mark">“</span>
            <br>
            <?php the_field('quote-text')?></h2>
         </div>
         <div class="quote__persone">
            <div class="quote__photo">
            <img src="<?php the_field('quote-picture')?>" alt="">
            </div>
            <div class="quote__persone-text">
               <div class="quote__name">
               <?php the_field('quote-name')?>
               </div>
               <div class="quote__job">
               <?php the_field('quote-job')?>
               </div>               
            </div>
            
         </div>
         
         
         
      </div>
   </div>
</div>
</section>

<section class="g-block">
<div class="wrapper">
   <div class="row">
      <!-- begin big-form -->
      <div class="big-form">
         <div class="big-form__headline">
            <?php the_field('big-form-headine') ?>
         </div>
         <div class="big-form__form form">
         <?php echo do_shortcode(get_field('big-form')) ?>
            <p>Нажимая на кнопку, я соглашаюсь с политикой конфиденциальности</p>
         </div>
         <div class="big-form__persone">
            <div class="big-form__picture">
               <img src="<?php the_field('big-form-picture')?>" alt="" class="img-responsive">
            </div>
            <div class="big-form__contact">
               <a href="mailto:<?php the_field('big-form-mail') ?>"><?php the_field('big-form-mail') ?></a>
               <a href="tel:<?php the_field('big-form-phone') ?>" class="phone"><?php the_field('big-form-phone') ?> </a>
            </div>


         </div>

      </div>
      <!-- end big-form -->
   </div>
</div>
</section>


<section class="more-service g-block">
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