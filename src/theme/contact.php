<?php
/*
Template Name: Контакты
Template Post Type: page
*/
?>

<?php get_header(); ?>
<section>
   <div class="wrapper">
      <div class="row">
         <div class="contact-content page-title">
            <a href="tel:<?php the_field('footer-from-phone', 'option')?>" class="font-super-gigant"><?php the_field('footer-from-phone', 'option')?></a>            
            <a class="font-gigant font-graient" href="mailto:hello@thearchitect.digital" class="href">hello@thearchitect.digital</a>
            <a class="font-gigant font-graient brif" href="#footer" class="href">заполнить бриф</a>
            <div class="social">
               <a target="_blank" href="https://www.instagram.com/architect.digital" class="social-item">
                  <img src="<?php echo get_template_directory_uri()?>/img/instagram.png" alt="" class="img-responsive">
               </a>   
               <a target="_blank" href="https://www.youtube.com/channel/UCZFiL1va2Xj-L-ChhofD4_Q" class="social-item">
                  <img src="<?php echo get_template_directory_uri()?>/img/youtube.png" alt="" class="img-responsive">
               </a>   
               <a target="_blank" href="https://www.behance.net/architectdigital" class="social-item">
                  <img src="<?php echo get_template_directory_uri()?>/img/behans.png" alt="" class="img-responsive">
               </a>                                             
            </div>
            <div class="contact">
               <div class="adress">
               Приезжайте к нам в офис:<br>г. Тюмень ул. Кирова, д. 40
               </div>
               <div class="time">
               Работаем с 9:00 до 18:00.<br>В выходные отдыхаем.
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="map-section">
   <div class="wrapper">
      <div class="row">
         <!-- begin map -->
         <div id="map" class="map">
            <script>
               mapboxgl.accessToken = 'pk.eyJ1IjoiYWxzaGNoZXRpbmluIiwiYSI6ImNqNHRtYXppZjA2NHEzMm54enZzdGo5czgifQ.MQGFzuBObNY8TSB9HlqzUw';
               var map = new mapboxgl.Map({
                  container: 'map',
                  style: 'mapbox://styles/alshchetinin/ckf5kfpiq2pi81aqw2ma8ka1f',
                  center: [65.530141, 57.156898],
                  zoom: 16.15
               });

               var el = document.createElement('img');
               el.className = 'marker';
               el.setAttribute('src','<?php echo get_template_directory_uri()?>/img/svg/map-icon.svg')
               el.setAttribute('width','20px')
               var marker = new mapboxgl.Marker(el)
                  .setLngLat([65.530141, 57.156898])
                  .addTo(map);

                  map.scrollZoom.disable();

                  
            </script>
         </div>
         <!-- end map -->
      </div>

   </div>
</section>

<div class="site-content page">
   <?php the_post();
   the_content(); ?>
</div>
<?php get_footer(); ?>