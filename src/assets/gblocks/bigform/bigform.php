<section class="g-block">
<div class="wrapper">
   <div class="row">
      <!-- begin big-form -->
      <div class="big-form">
         <div class="big-form__headline">
            <?php the_field('headine') ?>
         </div>
         <div class="big-form__form form">
            <?php the_field('form') ?>
            <p>Нажимая на кнопку, я соглашаюсь с <a href="/privacy-policy/" target="_blank">политикой конфиденциальности</a> </p>
         </div>
         <div class="big-form__persone">
            <div class="big-form__picture">
               <img src="<?php the_field('picture')?>" alt="" class="img-responsive">
            </div>
            <div class="big-form__contact">
               <a href="mailto:<?php the_field('mail') ?>"><?php the_field('mail') ?></a>
               <a href="tel:<?php the_field('phone') ?>" class="phone"><?php the_field('phone') ?> </a>
            </div>


         </div>

      </div>
      <!-- end big-form -->
   </div>
</div>
</section>
