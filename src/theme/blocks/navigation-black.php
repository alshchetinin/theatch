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
      <?php if(get_field('molniya_v_shapke', 'option')): ?>
      <div class="navigation__item navigation__item_blog">
         <div class="navigation__post">
         <?php while( have_rows('molniya_v_shapke', 'option') ): the_row(); 

            // переменные
            $text = get_sub_field('text');
            $link = get_sub_field('href');
            ?>
            <a target="_blanck" href="<?php echo $link ?>"><?php echo $text ?></a>

            <?php endwhile; ?>
         </div>
      </div>
      <?php endif; ?>
   </div>

<script>
$('.navigation__post').slick({
   autoplay: true,
   arrows: false,
   dots: false,
   slidesToShow: 2,
   slidesToScroll: 1,
   centerMode: true,
   centerPadding: "0px",
   draggable: false,
   infinite: true,
   pauseOnHover: true,
   swipe: false,
   touchMove: false,
   vertical: true,
   speed: 500,
   autoplaySpeed: 4000,
   useTransform: true,
   cssEase: 'cubic-bezier(0.65, 0, 0.35, 1)',
   adaptiveHeight: true,
});
</script>
</nav>