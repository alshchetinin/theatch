<section id="main-blog" class="g-block">
   <div class="wrapper">
      <div class="main-blog">
         <div class="title-section title-section_blog">
            <h2 class="font-super-gigant">Блог</h2>
         </div>
         <div class="main-blog__list">
            <div class="main-blog__set">
               <div class="blog-item">
                  <div class="blog-item__picture"> <img src="<?php echo get_template_directory_uri()?>/img/bg.png"
                        alt=""></div>
                  <div class="blog-item__tag">управление — 30 мин чтения</div>
                  <div class="blog-item__date">25.05.2020</div>
                  <div class="blog-item__title"> Что почитать?: уроки, извлеченные из управления персоналом</div>
                  <div class="blog-item__excerpt">Управление персоналом - это одна из самых сложных и критичных частей
                     ведения любого бизнеса. Здесь мы делимся некоторыми идеями, которые мы опубликовали за эти годы.
                  </div>
                  <div class="blog-item__author"></div>
               </div>
               <div class="blog-item">
                  <div class="blog-item__picture"> <img src="<?php echo get_template_directory_uri()?>/img/bg.png"
                        alt=""></div>
                  <div class="blog-item__tag">Управление</div>
                  <div class="blog-item__date">25.05.2020</div>
                  <div class="blog-item__title"> Что почитать?: уроки, извлеченные из управления персоналом</div>
                  <div class="blog-item__excerpt">Управление персоналом - это одна из самых сложных и критичных частей
                     ведения любого бизнеса. Здесь мы делимся некоторыми идеями, которые мы опубликовали за эти годы.
                  </div>
                  <div class="blog-item__author"></div>
               </div>
               <div class="blog-item">
                  <div class="blog-item__picture"> <img src="<?php echo get_template_directory_uri()?>/img/bg.png"
                        alt=""></div>
                  <div class="blog-item__tag">Управление</div>
                  <div class="blog-item__date">25.05.2020</div>
                  <div class="blog-item__title"> Что почитать?: уроки, извлеченные из управления персоналом</div>
                  <div class="blog-item__excerpt">Управление персоналом - это одна из самых сложных и критичных частей
                     ведения любого бизнеса. Здесь мы делимся некоторыми идеями, которые мы опубликовали за эти годы.
                  </div>
                  <div class="blog-item__author"></div>
               </div>

               <div class="vc-ru">
                  <a href=""></a>
                  Посмотреть все стаьи на vc.ru
               </div>
            </div>


         </div>

      </div>

   </div>
   <div class="wrapper">
      <div class="title-section title-section_mail">
         <h2>Либо подписаться на&nbsp;рассылку</h2>
      </div>
      <div class="notification-inner">
         <div class="notification">
            <div class="notification__picture">
               <img src="<?php echo get_template_directory_uri()?>/img/avatar.png" alt="">
               <div class="notification__title">
                  Рассказываем про топ 10 решиний, которые помогут поднять конверсию сайта
                  на 15% от текущей
               </div>
            </div>

            <div class="notification__form">
               <div class="notification__wrapper">
                  <?php echo do_shortcode('[contact-form-7 id="14" title="subscription form"]')?>
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