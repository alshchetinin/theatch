<section id="main-slider">
   <div class="main-slider"  data-slick='{   "infinite": true, "easing": "ease-in-out", "autoplay": true, "autoplaySpeed": 4500, "speed": 2000, "arrows": false}'>

   <?php while( have_rows('slides') ): the_row(); 

      // переменные
      $headline = get_sub_field('headline');
      $opisanie = get_sub_field('opisanie');
      $picture = get_sub_field('picture');
      $href = get_sub_field('href')
      ?>
      <div class="main-slider__item"
         style="background-image: url(<?php echo $picture?>)">
         <a href="<?php echo $href?>" ></a>
         <div class="main-slider__wrapper">
            <div class="main-slider__content">
               <div class="main-slider__subtitle">
               <?php echo $opisanie?>
               </div>

               <div class="main-slider__title">
               <?php echo $headline?>
               </div>
               <div class="main-slider__arrow">
                  <img src="<?php echo get_template_directory_uri()?>/img/svg/arrow-right.svg" alt="" width="70px">
               </div>


            </div>


         </div>

      </div>				

      <?php endwhile; ?>


   </div>
</section>


