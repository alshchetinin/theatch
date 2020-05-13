<?php get_header(); ?>


<?php echo get_template_part('/blocks/main-slider')?>
<?php echo get_template_part('/blocks/lead-section')?>
<?php echo get_template_part('/blocks/service-section')?>

<section id="headline-section">
   <div class="wrapper">
      <div class="headline-section">
         <div class="headline-section__title">
            <h2>
               Создаем<br>
               решения ближе <br>к&nbsp;вашим пользователям,
               которые они <br>действительно хотят<br>
               и&nbsp;ждут от&nbsp;вас.
            </h2>

         </div>
         <div class="headline-section__picture">
            <img src="<?php echo get_template_directory_uri()?>/img/svg/pic2.svg" alt="">
         </div>

      </div>
   </div>
</section>


<?php echo get_template_part('/blocks/notification')?>
<?php echo get_template_part('/blocks/standard-section')?>
<?php echo get_template_part('/blocks/main-project')?>

<?php get_footer(); ?>