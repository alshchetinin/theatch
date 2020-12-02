<section id="notification" class="g-block">
   <div class="wrapper">
      <div class="notification-inner">
         <div class="notification">
            <div class="notification__picture">
               <img src="<?php echo get_template_directory_uri() ?>/img/avatar.png" alt="">
               <div class="notification__title">
               Рассказываем, как обогнать конкурентов и&nbsp;получить большую долю кликов от&nbsp;всего трафика 
               </div>
            </div>

            <div class="notification__form">
               <div class="notification__wrapper form inline-form-one-field">
                  <?php echo do_shortcode('[contact-form-7 id="14" title="subscription form"]') ?>

               </div>
               <p class="notification__bottom">Нажимая на кнопку, я соглашаюсь с <a href="/privacy-policy/" target="_blank">политикой конфиденциальности</a></p>
            </div>
            <script>
               document.addEventListener('wpcf7mailsent', function(event) {
                  $('.notification__success').addClass('notification__success_done');
               }, false);
            </script>
         </div>
      </div>
   </div>

</section>