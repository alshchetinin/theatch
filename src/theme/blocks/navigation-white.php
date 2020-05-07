<nav class="navigation navigation_white">
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
            Музыка
         </div>
         <div class="navigation__link">
            <?php $args = array( 'theme_location' => 'music');
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
      <div class="navigation__item navigation__item_blog">
         <div class="navigation__title">
            Блог
         </div>
         <div class="navigation__post">
            <?php
                  global $post;
                  $args = array( 'numberposts' => 2 , 'orderby' => 'date', 'order' => 'ASC');
                  $myposts = get_posts( $args );
                  foreach( $myposts as $post ){ setup_postdata($post);
               ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

            <?php }
                  wp_reset_postdata();
               ?>
         </div>
      </div>
      <div class="navigation__item">
         <div class="navigation__title">
            Эксперты
         </div>
         <div class="navigation__link">
            <?php $args = array( 'theme_location' => 'contact');
               wp_nav_menu( $args );?>
         </div>

      </div>
   </div>


</nav>