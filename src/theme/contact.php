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
         <div class="page-title">
            <h1 class="very-big-text"><?php the_title() ?></h1>
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
                  center: [65.5276283,57.15679],
                  zoom: 16.15
               });

               var el = document.createElement('img');
               el.className = 'marker';
               el.setAttribute('src','<?php echo get_template_directory_uri()?>/img/svg/map-icon.svg')
               el.setAttribute('width','20px')
               var marker = new mapboxgl.Marker(el)
                  .setLngLat([65.5276283,57.15679])
                  .addTo(map);

                  map.scrollZoom.disable();

                  
            </script>
         </div>
         <!-- end map -->
      </div>
      <div class="row">
            <!-- begin contact-item -->
            <div class="contact-item">
            Приезжайте к нам в офис:<br>г. Тюмень ул. Кирова, д. 40
            </div>

            <div class="contact-item">
            Работаем с 9:00 до 18:00.<br>В выходные отдыхаем.
            </div>

            <div class="contact-item">
            +7 922 001 00 50<br>hello@thearchitect.digital            
            </div>
            <!-- end contact-item -->
      </div>
   </div>
</section>

<div class="site-content page">
   <?php the_post();
   the_content(); ?>
</div>
<?php get_footer(); ?>