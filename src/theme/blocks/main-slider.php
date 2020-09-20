<section id="main-slider" class="g-block">
   <div class="main-slider" data-slick='{   "infinite": true, "pauseOnHover": false, "easing": "ease-in-out", "autoplay": true, "autoplaySpeed": 4500, "speed": 2000, "arrows": false}'>

      <?php while (have_rows('slajdy', 'option')) : the_row();

         // переменные
         $picture = get_sub_field('picture');
         $text = get_sub_field('text');
         $title = get_sub_field('title');
         $link = get_sub_field('link');
      ?>

         <div class="main-slider__item" style="background-image: url(<?php echo $picture ?>)">
         <div class="main-slider__overlay"></div>

            <div class="main-slider__wrapper">
               <div class="main-slider__content">
                  <a href="<?php echo $link ?>"></a>
                  <div class="main-slider__subtitle">
                     <?php echo $text ?>
                  </div>

                  <div class="main-slider__title">
                     <?php echo $title ?>
                  </div>
                  <div class="main-slider__arrow">
                     <img src="<?php echo get_template_directory_uri() ?>/img/svg/arrow-right.svg" alt="" width="70px">
                  </div>


               </div>
            </div>
            
         </div>

      <?php endwhile; ?>


   </div>
</section>




<script>
   $('.main-slider').slick();
</script>