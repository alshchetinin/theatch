<div class="wrapper">
   <div class="header-block">
      <div class="logo">
         <a href="/"><img src="<?php echo get_template_directory_uri()?>/img/svg/logo.svg" alt=""></a>
      </div>
      <div class="logo_mobile">
         <a href="/"><img src="<?php echo get_template_directory_uri()?>/img/svg/logo-mini.svg" alt="" class=""></a>
      </div>


      <div class="header-service">
         <div class="header-service__item">
            <div class="header-service__picture">
               <img src="<?php echo get_template_directory_uri()?>/img/service-item.png" alt="" class="img-responsive">
            </div>
            <div class="header-service__title">
               Аудит 360
            </div>
         </div>
         <div class="header-service__item">
            <div class="header-service__picture">
               <img src="<?php echo get_template_directory_uri()?>/img/service-item.png" alt="" class="img-responsive">
            </div>
            <div class="header-service__title">
               Аудит 360
            </div>
         </div>
         <div class="header-service__item">
            <div class="header-service__picture">
               <img src="<?php echo get_template_directory_uri()?>/img/service-item.png" alt="" class="img-responsive">
            </div>
            <div class="header-service__title">
               Аудит 360
            </div>
         </div>
         <div class="header-service__item">
            <div class="header-service__picture">
               <img src="<?php echo get_template_directory_uri()?>/img/service-item.png" alt="" class="img-responsive">
            </div>
            <div class="header-service__title">
               Аудит 360
            </div>
         </div>
         <div class="header-service__item">
            <div class="header-service__picture">
               <img src="<?php echo get_template_directory_uri()?>/img/service-item.png" alt="" class="img-responsive">
            </div>
            <div class="header-service__title">
               Аудит 360
            </div>
         </div>
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