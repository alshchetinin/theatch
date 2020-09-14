<div class="wrapper">
   <div class="header-block">
      <div class="logo">
         <a href="/"><img src="<?php echo get_template_directory_uri()?>/img/svg/logo.svg" alt=""></a>
      </div>
      <div class="logo_mobile">
         <a href="/"><img src="<?php echo get_template_directory_uri()?>/img/svg/logo-mini.svg" alt="" class=""></a>
      </div>


      <div class="header-service">

      <?php $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => 6,
               );
               $property = new WP_Query($args); // дальше - loop
               if ($property->have_posts()) : ?>
                  <?php while ($property->have_posts()) :
                     $property->the_post(); ?>
                     <div class="header-service__item">
                        <a href="<?php the_permalink()?>" class=""></a>
                        <div class="header-service__picture">
                           <img src="<?php the_field('ikonka_dlya_storis')?>" alt="" class="img-responsive">
                        </div>
                        <div class="header-service__title">
                        <?php the_field('title')?>
                        </div>
                     </div>
                  <?php endwhile; ?>
               <?php endif;
               wp_reset_postdata();
               ?>

      </div>

      <?php echo get_template_part('/blocks/navigation','black')?>

      <div class="burger">
         <img class="burger__icon" src="<?php echo get_template_directory_uri()?>/img/svg/burger-menu.svg" alt="">
         <img class="burger__icon_close" src="<?php echo get_template_directory_uri()?>/img/svg/burger-menu-close.svg"
            alt="">

      </div>
      <div class="navigation-popup">
         <?php echo get_template_part('/blocks/navigation','white')?>
      </div>
   </div>

</div>