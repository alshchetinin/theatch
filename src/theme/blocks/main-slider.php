<section id="main-slider" class="g-block">
   <div class="main-slider">

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
   <div class="fact_absolute">
   <div class="wrapper">
   <div class="fact">
      <div class="fact__container">
         <div class="fact__numbers">
            <div class="fact-number">
               <div class="fact-number__title">5 000+</div>
               <div class="fact-number__description">проектов<br>в работе</div>
            </div>
            <div class="fact-number">
               <div class="fact-number__title">от 20 до 80%</div>
               <div class="fact-number__description">снижаем стоимость целевого обращения</div>
            </div>
            <div class="fact-number">
               <div class="fact-number__title">30+</div>
               <div class="fact-number__description">жилых комплексов в продвижении</div>
            </div>
            <div class="fact-number">
               <div class="fact-number__title">15+</div>
               <div class="fact-number__description">городов, в которых мы продвигаем застройщиков</div>
            </div>
         </div>
         <a href="#footer" class="fact__button">
            <p>Давайте придумаем что-то новое вместе</p>
            
            <svg width="49" height="24" viewBox="0 0 49 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M41.3581 6L40.0733 7.51307L45.5223 13.9304L1 13.9304V16.0696L45.5223 16.0696L40.0733 22.4869L41.3581 24L49 15.0014L41.3581 6.00285V6Z" fill="white"/>
            </svg>            
         </a>
      </div>



   </div>
   </div>
   </div>


</section>




<script>
   $('.main-slider').slick({
      infinite: true,
      pauseOnHover: false,
      autoplay: true,
      autoplaySpeed: 4500,
      // speed: 2000,
      arrows: false,
      dots: false,
   });
</script>