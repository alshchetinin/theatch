<?php get_header(); ?>

<?php echo get_template_part('/blocks/main-slider') ?>
<?php echo get_template_part('/blocks/lead-section') ?>
<?php echo get_template_part('/blocks/service-section') ?>

<section id="headline-section" class="g-block">
   <div class="wrapper">
      <div class="headline-section">
         <div class="headline-section__title">
            <h2 class="font-super-gigant">
            <?php the_field('title-text-and-ilustration', 'option')?>
            </h2>

         </div>
         <div class="headline-section__picture">
            <img src="<?php echo get_template_directory_uri() ?>/img/svg/pic2.svg" alt="">
         </div>

      </div>
   </div>
</section>

<?php echo get_template_part('/blocks/main-project') ?>
<?php echo get_template_part('/blocks/notification') ?>


<section class="g-block main-partner">
   <div class="wrapper">
      <div class="row">
         <h2 class="font-super-gigant">Всегда рады поработать вместе</h2>
      </div>
         <div class="row">
         <div class="partner partner_main">
            <div class="partner-container">
            <!-- <div class="grid-sizer"></div> -->
            <?php while( have_rows('blok_nam_doveryayut', 'option') ): the_row(); 
               // переменные
               $logo = get_sub_field('logo');
               $href = get_sub_field('ssylka_na_sajt_klienta');
               $description = get_sub_field('tekst');
               ?>
                  <div class="parnet-item">
                     <a href="<?php echo $href?>" target="_blank" class="parnet-item__logo">
                        <img src="<?php echo $logo['url']; ?>" alt="">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 15.1667V22.1667C21 22.7855 20.7542 23.379 20.3166 23.8166C19.879 24.2542 19.2855 24.5 18.6667 24.5H5.83333C5.21449 24.5 4.621 24.2542 4.18342 23.8166C3.74583 23.379 3.5 22.7855 3.5 22.1667V9.33333C3.5 8.71449 3.74583 8.121 4.18342 7.68342C4.621 7.24583 5.21449 7 5.83333 7H12.8333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 3.5H24.5V10.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 16.8333L24.8333 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                     </a>
                     <div class="parnet-item__text">
                        <?php echo $description?>
                     </div>
                     
                  </div>         
      

            <?php endwhile; ?>


            </div>
            
         </div>
      </div>
   </div>
</section>


<?php echo get_template_part('/blocks/main-blog') ?>

<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <!-- begin text-service -->
         <div class="text-service">
            <h2 class="font-super-gigant"><?php the_field('title-block-gradient', 'option')?></h2>

            <ul class="text-service__wrap">
               <?php $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => 6,
                  'orderby' => 'date',
                  'order' => 'ASC',
               );
               $property = new WP_Query($args); // дальше - loop
               if ($property->have_posts()) : ?>
                  <?php while ($property->have_posts()) :
                     $property->the_post(); ?>
                     <li><a href="<?php the_permalink()?>" class="font-h2" style="background-image: linear-gradient(<?php the_field('gradient') ?>);"><?php the_title() ?></a></li>         
      <?php endwhile; ?>
   <?php endif;
               wp_reset_postdata();
   ?>
   </ul>


      </div>
      <!-- end text-service -->
   </div>
   </div>
</section>


<script>
   $(function () {
      var controller = new ScrollMagic.Controller();
   var scrollDuration = 3 * $('.main-project-list-item').height();
   var transformXimg = 3 * $('.main-project-container__img').width();
   var tl = gsap.timeline()
   var tween = gsap.to(".main-project-container__img", { x: -transformXimg, ease: "linear" });
   var tweenColorProject1 = gsap.to(".main-project-container__set", { backgroundColor: "#FACB52", ease: "linear" });
   var tweenColorProject2 = gsap.to(".main-project-container__set", { backgroundColor: "#CFA3DD", ease: "linear" });
   var tweenColorProject3 = gsap.to(".main-project-container__set", { backgroundColor: "#A5E6FD", ease: "linear" });
   
   var scene = new ScrollMagic.Scene({
      triggerElement: "#main-project",
      triggerHook: "onLeave",
      duration: scrollDuration,
   })
      .setTween(tween)
      .setPin(".main-project-container", { pushfollowers: true })
      // .addIndicators({ name: `2 (duration: ${scrollDuration})` })
      .addTo(controller);
      
   var scentColorProject1 = new ScrollMagic.Scene({
      triggerElement: "#project1",
      triggerHook: "onLeave",
      duration: $('.main-project-list-item').height(),
   })
      .setTween(tweenColorProject1)
      // .addIndicators({ name: `2 (duration: ${scrollDuration})` })
      .addTo(controller);

      var scentColorProject2 = new ScrollMagic.Scene({
         triggerElement: "#project2",
         triggerHook: "onLeave",
         duration: $('.main-project-list-item').height(),
      })
         .setTween(tweenColorProject2)
         // .addIndicators({ name: `2 (duration: ${scrollDuration})` })
         .addTo(controller);    
         var scentColorProject3 = new ScrollMagic.Scene({
            triggerElement: "#project3",
            triggerHook: "onLeave",
            duration: $('.main-project-list-item').height(),
         })
            .setTween(tweenColorProject3)
            // .addIndicators({ name: `2 (duration: ${scrollDuration})` })
            .addTo(controller);              

   });
</script
<?php get_footer(); ?>