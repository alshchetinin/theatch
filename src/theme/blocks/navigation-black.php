<nav class="navigation">
   <div class="navigation__wrapper">
      <div class="navigation__item">
         <div class="navigation__title">
            Что мы делаем
         </div>
         <div class="navigation__link">
            <?php $args = array( 'theme_location' => 'whatwedo');
               wp_nav_menu( $args );?>
         </div>

      </div>
      <div class="navigation__item">
         <div class="navigation__title">
            О нас
         </div>
         <div class="navigation__link">
            <?php $args = array( 'theme_location' => 'about');
               wp_nav_menu( $args );?>
         </div>

      </div>
      <div class="navigation__item">
         <div class="navigation__title">
            Контакты
         </div>
         <div class="navigation__link">
            <?php $args = array( 'theme_location' => 'contact');
               wp_nav_menu( $args );?>
         </div>

      </div>

   </div>


</nav>