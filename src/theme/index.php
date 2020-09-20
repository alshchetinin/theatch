<?php get_header(); ?>


<?php echo get_template_part('/blocks/main-slider') ?>
<?php echo get_template_part('/blocks/lead-section') ?>
<?php echo get_template_part('/blocks/service-section') ?>

<section id="headline-section" class="g-block">
   <div class="wrapper">
      <div class="headline-section">
         <div class="headline-section__title">
            <h2 class="font-super-gigant">
            Создаем решения ближе к пользователям. Помогаем застройщикам говорить с аудиторией на одном языке 
            </h2>

         </div>
         <div class="headline-section__picture">
            <img src="<?php echo get_template_directory_uri() ?>/img/svg/pic2.svg" alt="">
         </div>

      </div>
   </div>
</section>


<?php echo get_template_part('/blocks/notification') ?>
<?php echo get_template_part('/blocks/standard-section') ?>
<?php echo get_template_part('/blocks/main-project') ?>

<section class="g-block main-partner">
   <div class="wrapper">
      <div class="row">
         <h2 class="font-super-gigant">Всегда рады поработать вместе</h2>
      </div>
         <div class="row">
         <div class="partner">
            <div class="partner__logos">

            <?php while( have_rows('blok_nam_doveryayut', 'option') ): the_row(); 
               // переменные
               $logo = get_sub_field('logo');
               ?>
               <div class="partner-logo">
                  <img class="img-responsive" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
               </div>            
      

            <?php endwhile; ?>


            </div>
            
         </div>
      </div>
   </div>
</section>

<!-- <?php echo get_template_part('/blocks/main-blog') ?> -->

<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <!-- begin text-service -->
         <div class="text-service">
            <h2 class="font-super-gigant">Работаем с компаниями, которые разделяют наши ценности. Помогаем им меняться, адаптироваться и оставаться на шаг впереди</h2>

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
</script>
<?php get_footer(); ?>