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
               <h1 class="very-big-text"><?php the_title() ?></h1>
               <p class="font-gigant"><?php echo get_the_excerpt(); ?></p>
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


<div class="site-content page-service-content  g-block"">
   <section class=" sticky-form">
   <div class="wrapper">
      <div class="row">
         <div class="card-form">
            <div class="card-form__title">
               <?php the_field('big-form-headine') ?>
            </div>
            <div class="card-form__persone">
               <div class="big-form__persone">
                  <div class="big-form__picture">
                     <img src="<?php the_field('big-form-picture') ?>" alt="" class="img-responsive">
                  </div>
                  <div class="big-form__contact">
                     <a href="mailto:<?php the_field('big-form-mail') ?>"><?php the_field('big-form-mail') ?></a>
                     <a href="tel:<?php the_field('big-form-phone') ?>" class="phone"><?php the_field('big-form-phone') ?> </a>
                  </div>


               </div>
            </div>


            <div class="vertical-form">
               <?php echo do_shortcode(get_field('sticky-form')) ?>
               <p class="font-small-text">Нажимая на кнопку, я соглашаюсь с <a href="/privacy-policy/" target="_blank">политикой конфиденциальности</a></p>
            </div>
         </div>

      </div>
   </div>

   </section>

   <?php the_post();
   the_content(); ?>
</div>
<?php if (get_field('ispolzovat_tarify')) : ?>
   <section id="fare" class="g-block">
      <div class="wrapper">
         <div class="row">
            <div class="offset-left"></div>
            <div class="fare-title">
               <h2 class="font-super-gigant">
                  Стоимость
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="offset-left"></div>
            <?php while (have_rows('spisok_tarifov')) : the_row();

               // переменные
               $title = get_sub_field('zagolovok');
               $subtitle = get_sub_field('podzagolovok');
               $btn = get_sub_field('nazvanie_knopki');
               $price = get_sub_field('czena');
               $color = get_sub_field('selected');
               $class = '';
               $classPopup = get_sub_field('class');

               if ($color) {
                  $class = "fare-item_selected";
               };
            ?>
               <div class="fare-item <?php echo $class ?>" style="--selected: <?php echo $color ?>">
                  <div class="fare-item__text">
                     <div class="fare-item__title"><?php echo $title ?></div>
                     <div class="fare-item__subtitle"><?php echo $subtitle ?></div>
                     <a href="" class="fare-item__btn <?php echo $classPopup ?>"><?php echo $btn ?></a>
                     <div class="fare-item__price"><?php echo $price ?></div>

                  </div>
                  <div class="fare-item__list">
                     <ul>

                        <?php while (have_rows('spisok_preimushhestva',)) : the_row();

                           // переменные                  
                           $text = get_sub_field('tekst');
                        ?>
                           <li>
                              <div class="fare-item__icon">
                                 <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.041 8.30861C26.6483 7.39935 26.0821 6.57538 25.374 5.88283C24.6654 5.18822 23.83 4.63622 22.9131 4.25686C21.9623 3.86191 20.9426 3.65976 19.9131 3.66213C18.4688 3.66213 17.0596 4.05764 15.835 4.80471C15.542 4.98342 15.2637 5.17971 15 5.39358C14.7363 5.17971 14.458 4.98342 14.165 4.80471C12.9404 4.05764 11.5313 3.66213 10.0869 3.66213C9.04688 3.66213 8.03906 3.86135 7.08691 4.25686C6.16699 4.63772 5.33789 5.18557 4.62598 5.88283C3.91698 6.5746 3.35062 7.39876 2.95898 8.30861C2.55176 9.2549 2.34375 10.2598 2.34375 11.294C2.34375 12.2696 2.54297 13.2862 2.93848 14.3203C3.26953 15.1846 3.74414 16.0811 4.35059 16.9863C5.31152 18.419 6.63281 19.9131 8.27344 21.4278C10.9922 23.9385 13.6846 25.6729 13.7988 25.7432L14.4932 26.1885C14.8008 26.3848 15.1963 26.3848 15.5039 26.1885L16.1982 25.7432C16.3125 25.6699 19.002 23.9385 21.7236 21.4278C23.3643 19.9131 24.6856 18.419 25.6465 16.9863C26.2529 16.0811 26.7305 15.1846 27.0586 14.3203C27.4541 13.2862 27.6533 12.2696 27.6533 11.294C27.6563 10.2598 27.4482 9.2549 27.041 8.30861Z" fill="white" />
                                 </svg>
                              </div>

                              <div class="fare-item__list-text">
                                 <?php echo $text ?>
                              </div>

                           </li>

                        <?php endwhile; ?>



                     </ul>
                  </div>

               </div>

            <?php endwhile; ?>


         </div>
      </div>
      <?php if (get_field('additional-service')) : ?>      
      <div class="wrapper">
            <div class="row">
            <?php while( have_rows('additional-service-item') ): the_row(); 

				// переменные
				$title = get_sub_field('additional-service-title');
            $subtitle = get_sub_field('additional-service-subtitle');
            $price = get_sub_field('additional-service-price');
            $text = get_sub_field('additional-service-text');
            $popupBtnClass = get_sub_field('additional-service-btn');
            $popupVideoClass = get_sub_field('additional-service-video');
            $videoCover = get_sub_field('additional-service-cover');
            $info = get_sub_field('additional-service-info');
				?>
               <div class="additional-service">
                  <div class="additional-service__title">
                     <h3><?php echo $title ?></h3>
                     <p><?php echo $text ?></p>
                     <a href="#" class="additional-service__btn <?php echo $popupBtnClass ?>">
                        Хочу попробовать
                     </a>
                     <h3><?php echo $price ?></h3>
                  </div>
                  <div class="additional-service__video" ">
                     <div class="additional-service__cover" style="background-image: url('<?php echo $videoCover?>');">
                     <div class="additional-service__play">
                           <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17.5542 9.40459C18.2209 9.78949 18.2209 10.7517 17.5542 11.1366L2.06771 20.0778C1.40104 20.4627 0.567712 19.9815 0.567712 19.2117L0.567713 1.32948C0.567713 0.559683 1.40105 0.0785603 2.06771 0.463461L17.5542 9.40459Z" fill="white"/>
                           </svg>
                     </div>
                     </div>

                  </div>
                  <div class="additional-service__info">
                     <h3><?php echo $subtitle ?></h3>
                     <ul>
                     <?php while( have_rows('additional-service-info') ): the_row(); 

                        // переменные                        
                        $text = get_sub_field('text');
                        ?>
                           <li><?php echo $text ?></li>
                        <?php endwhile; ?>
                     </ul>
                  </div>
               </div>						

				<?php endwhile; ?>

            </div>
      </div>
      <?php endif; ?>
   </section>
   
<?php endif; ?>

<?php echo get_template_part('/blocks/partner', 'big') ?>

<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <div class="quote">
            <?php $post_id = get_the_ID() ?>
            <div class="quote__text">
               <h2 class="font-gigant" style="background-image: linear-gradient(<?php the_field('gradient', $post_id) ?>);">
                  <span class="quote__mark">“</span>
                  <br>
                  <?php the_field('quote-text') ?>
               </h2>
            </div>
            <div class="quote__persone">
               <div class="quote__photo">
                  <img src="<?php the_field('quote-picture') ?>" alt="">
               </div>
               <div class="quote__persone-text">
                  <div class="quote__name">
                     <?php the_field('quote-name') ?>
                  </div>
                  <div class="quote__job">
                     <?php the_field('quote-job') ?>
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
               <p class="font-small-text">Нажимая на кнопку, я соглашаюсь с <a href="/privacy-policy/" target="_blank">политикой конфиденциальности</a></p>
            </div>
            <div class="big-form__persone">
               <div class="big-form__picture">
                  <img src="<?php the_field('big-form-picture') ?>" alt="" class="img-responsive">
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
            <h2 class="font-gigant">Услуги, которые вам понравятся</h2>
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
                  <div class="servict-item" style="--gradient: linear-gradient(<?php the_field('gradient') ?>)">
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







