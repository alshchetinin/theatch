<section id="service-section" class="g-block">
   <div class="wrapper">
      <div class="service-section__title">
         <div class="title-section title-section_service">
            <h2>Чем мы полезны</h2>
         </div>
         <!-- <div class="service-section__button">
            <a href="/" class="button button_secondary">Смотреть все услуги</a>
         </div> -->
      </div>

      <div class="row">
         <div class="service-wrapper">
            <div class="service-wrapper__row">


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
                     <div class="service-wrapper__col">
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
      </div>
</section>
      <!--       
      <div class="service-section__wrapper">
         <div class="service-section__inner">
            <div class="prev"><img src="<?php echo get_template_directory_uri() ?>/img/svg/arrow-prev.svg" alt=""></div>
            <div class="service-slider">
               <div class="service-slider__item">
                  <div class="service-slider__border"></div>

                  <div class="service-slider__title">
                     <h4>Контент-маркетинг</h4>
                  </div>
                  <div class="service-slider__description">
                     Проанализируем ваш сайт и продвижение, выявим слабые места и ключевые драйверы роста продаж
                  </div>
                  <div class="service-slider__icon">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" alt="">
                  </div>

               </div>
               <div class="service-slider__item">
                  <div class="service-slider__title">
                     <h4>Аудит 360 </h4>
                  </div>
                  <div class="service-slider__description">
                     Проанализируем ваш сайт и продвижение, выявим слабые места и ключевые драйверы роста продаж
                  </div>
                  <div class="service-slider__icon">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" alt="">
                  </div>

               </div>
               <div class="service-slider__item">
                  <div class="service-slider__title">
                     <h4>Сайты</h4>
                  </div>
                  <div class="service-slider__description">
                     В зависимости от задач разработаем как одностраничный сайт, так и сайт портального типа </div>
                  <div class="service-slider__icon">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" alt="">
                  </div>

               </div>
               <div class="service-slider__item">
                  <div class="service-slider__title">
                     <h4>Контент-маркетинг</h4>
                  </div>
                  <div class="service-slider__description">
                     Проанализируем ваш сайт и продвижение, выявим слабые места и ключевые драйверы роста продаж
                  </div>
                  <div class="service-slider__icon">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" alt="">
                  </div>

               </div>
               <div class="service-slider__item">
                  <div class="service-slider__title">
                     <h4>Контент-маркетинг</h4>
                  </div>
                  <div class="service-slider__description">
                     Проанализируем ваш сайт и продвижение, выявим слабые места и ключевые драйверы роста продаж
                  </div>
                  <div class="service-slider__icon">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" alt="">
                  </div>

               </div>
               <div class="service-slider__item">
                  <div class="service-slider__title">
                     <h4>Контент-маркетинг</h4>
                  </div>
                  <div class="service-slider__description">
                     Проанализируем ваш сайт и продвижение, выявим слабые места и ключевые драйверы роста продаж
                  </div>
                  <div class="service-slider__icon">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" alt="">
                  </div>

               </div>
               <div class="service-slider__item">
                  <div class="service-slider__title">
                     <h4>Контент-маркетинг</h4>
                  </div>
                  <div class="service-slider__description">
                     Проанализируем ваш сайт и продвижение, выявим слабые места и ключевые драйверы роста продаж
                  </div>
                  <div class="service-slider__icon">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" alt="">
                  </div>

               </div>
            </div>
            <div class="next"><img src="<?php echo get_template_directory_uri() ?>/img/svg/arrow-next.svg" alt=""></div>
         </div>
      </div>
   </div>
</section>

<script>
$('.service-slider').slick({
   infinite: false,
   easing: 'ease-in-out',
   autoplay: false,
   autoplaySpeed: 4500,
   speed: 500,
   arrows: true,
   slidesToShow: 5,
   draggable: true,
   prevArrow: $('.prev'),
   nextArrow: $('.next'),
   adaptiveHeight: true,
   responsive: [{
         breakpoint: 1700,
         settings: {
            arrows: true,
            slidesToShow: 4
         }
      },
      {
         breakpoint: 1000,
         settings: {
            slidesToShow: 3,
            arrows: false
         }
      }, {
         breakpoint: 510,
         settings: {
            slidesToShow: 1.5,
            arrows: false
         }
      }
   ]
});

$('.service-slider').on('setPosition', function() {
   $(this).find('.slick-slide').height('auto');
   var slickTrack = $(this).find('.slick-track');
   var slickTrackHeight = $(slickTrack).height();
   $(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
});
</script> -->