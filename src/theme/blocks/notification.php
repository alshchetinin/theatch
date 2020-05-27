<section id="notification">
   <div class="wrapper">
      <div class="notification-inner">
         <div class="notification">
            <div class="notification__picture">
               <img src="<?php echo get_template_directory_uri()?>/img/avatar.png" alt="">
               <div class="notification__title">
                  Рассказываем про топ 10 решиний, которые  помогут поднять конверсию сайта
                  на 15% от текущей
               </div>
            </div>

            <div class="notification__form">
               <div class="notification__wrapper">
                  <?php echo do_shortcode('[contact-form-7 id="14" title="subscription form"]')?>
                  <div class="notification__success">
                     🤟🏻
                  </div>

               </div>
               <p class="notification__bottom">Получайте полезные статьи и свежие новости о диджитал-маркетинге </p>
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