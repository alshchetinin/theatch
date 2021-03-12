<section class="hero">
  <div class="wrapper">
    <div class="row">
      <div class="hero-text">
        <h1>
          <span class="hero-text-mobile">Привет. Мы — диджитал-компания с&nbsp;экспертизой в недвижимости.</span>
          <span>Создаем <a href="/services/sajty/" target="_blank" class="slider-dots slider-dots_active" data-slide="0" style="--active-slider-color: linear-gradient(203.52deg, #8E54E9 0%, #56B4D3 80.7%)">сайты</a> и <a href="services/brending/" target="_blank" class="slider-dots" data-slide="1" style="--active-slider-color: linear-gradient(0deg, #FFFFFF, #FFFFFF), linear-gradient(89.99deg, #FFFFFF -120.05%, #8E8F8F 99.99%)"><span class="branding">брендинг,</span></a> запускаем <a href="/services/performance-marketing/" target="_blank" class="slider-dots " data-slide="2" style="--active-slider-color: linear-gradient(90deg, #FFD43C 0%, #F15F79 98.96%)">перфоманс-маркетинг </a>
            и&nbsp;<a href="/services/kontent-%e2%80%a8marketing/" target="_blank" class="slider-dots " data-slide="3" style="--active-slider-color: linear-gradient(90deg, #4ECDC2 0%, #24827C 100%)">контент-маркетинг,</a> проводим <a href="/services/audit-360/" target="_blank" class="slider-dots " data-slide="4" style="--active-slider-color: linear-gradient(90deg, #F857A6 0%, #FF5858 100%)">комплексный аудит.</a></span>
        </h1>
      </div>

    </div>
  </div>
  <div class="fact_absolute">
        <div class="wrapper">
          <div class="fact">
            <div class="fact__container">
              <div class="fact__numbers">
                <div class="fact-number">
                  <div class="fact-number__title">5 000+</div>
                  <div class="fact-number__description">лидов в&nbsp;месяц приводим нашим клиентам</div>
                </div>
                <div class="fact-number">
                  <div class="fact-number__title">от 20 до 80%</div>
                  <div class="fact-number__description">снижаем стоимость целевого обращения</div>
                </div>
                <div class="fact-number">
                  <div class="fact-number__title">30+</div>
                  <div class="fact-number__description">жилых комплексов в&nbsp;продвижении</div>
                </div>
                <div class="fact-number">
                  <div class="fact-number__title">15+</div>
                  <div class="fact-number__description">городов, в&nbsp;которых мы&nbsp;продвигаем застройщиков</div>
                </div>
              </div>
              <a href="#footer" class="fact__button">
                <p>Обсудим ваши задачи и найдём эффективное решение
                  <svg width="49" height="24" viewBox="0 0 49 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.3581 6L40.0733 7.51307L45.5223 13.9304L1 13.9304V16.0696L45.5223 16.0696L40.0733 22.4869L41.3581 24L49 15.0014L41.3581 6.00285V6Z" fill="white" />
                  </svg>
                </p>
                <small>
                  Оставить заявку
                  <svg width="49" height="24" viewBox="0 0 49 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.3581 6L40.0733 7.51307L45.5223 13.9304L1 13.9304V16.0696L45.5223 16.0696L40.0733 22.4869L41.3581 24L49 15.0014L41.3581 6.00285V6Z" fill="white" />
                  </svg>
                </small>

              </a>
            </div>



          </div>
        </div>
      </div>

  <div class="hero-slider">
    <div class="hero-slider__slider-new">
      <img src="<?php echo get_template_directory_uri() ?>/img/site-slider-bg.png" alt="">
    </div>
    <div class="hero-slider__slider-new">
      <img src="<?php echo get_template_directory_uri() ?>/img/branding-slider-bg.png" alt="">
    </div>
    <div class="hero-slider__slider-new">
      <img src="<?php echo get_template_directory_uri() ?>/img/performans-slider-bg.png" alt="">
    </div>
    <div class="hero-slider__slider-new">
      <img src="<?php echo get_template_directory_uri() ?>/img/content-slider-bg.png" alt="">
    </div>
    <div class="hero-slider__slider-new">
      <img src="<?php echo get_template_directory_uri() ?>/img/audit-sldier-bg.png" alt="">
    </div>



  </div>
</section>

<script>
  $('.hero-slider').slick({
    infinite: true,
    pauseOnHover: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4500,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    arrows: false,
    // dots: true,
    // appendDots: $('.main-slider-dots__row')
  });

  $('.hero-slider').on('afterChange', function() {
    const dataId = $('.hero-slider').slick('slickCurrentSlide');
    const dots = $('.slider-dots').data('slide')

    $('.slider-dots').removeClass('slider-dots_active')
    $('[data-slide=' + dataId + ']').addClass('slider-dots_active')

  });

  $('.slider-dots').hover(function() {
    // over      
    const dataId = $(this).data('slide');
    $('.hero-slider').slick('slickGoTo', dataId);
    $('.hero-slider').slick('slickPause')
    $('.slider-dots').removeClass('slider-dots_active')
    $('[data-slide=' + dataId + ']').addClass('slider-dots_active')
  }, function() {
    // out
    $('.hero-slider').slick('slickPlay')

  });
</script>



<!-- <div class="hero-slider__slide">
      <div class="blur_1" style="background: #00BFFE;"></div>
      <div class="slide-img-wrapper">
        <div class="wrapper">
          <div class="row">
            <img src="<?php echo get_template_directory_uri() ?>/img/pic-site.png" alt="" class="hero-slider__pic">      
          </div>
      </div>
      
      </div>
      
      <div class="blur_2" style="background: #00BFFE;"></div>


    </div>
    <div class="hero-slider__slide">
      <div class="blur_1" style="background: linear-gradient(90deg, #505152 0%, #8E8F8F 100%)"></div>
      <div class="slide-img-wrapper">
        <div class="wrapper">
          <div class="row">
            <img src="<?php echo get_template_directory_uri() ?>/img/pic-site.png" alt="" class="hero-slider__pic">      
          </div>
      </div>
      
      <div class="blur_2" style="background: linear-gradient(90deg, #505152 0%, #8E8F8F 100%)"></div>


    </div>
    <div class="hero-slider__slide">
      <div class="blur_1" style="background: linear-gradient(0deg, #FFE07C, #FFE07C)"></div>
      <div class="slide-img-wrapper">
        <div class="wrapper">
          <div class="row">
            <img src="<?php echo get_template_directory_uri() ?>/img/pic-site.png" alt="" class="hero-slider__pic">      
          </div>
      </div>
      
      <div class="blur_2" style="background: linear-gradient(0deg, #FFE07C, #FFE07C)"></div>


    </div>
    <div class="hero-slider__slide">
      <div class="blur_1" style="background: linear-gradient(90deg, #BFE85B 0%, #2D9D84 98.96%)"></div>
      <div class="slide-img-wrapper">
        <div class="wrapper">
          <div class="row">
            <img src="<?php echo get_template_directory_uri() ?>/img/pic-site.png" alt="" class="hero-slider__pic">      
          </div>
      </div>
      
      <div class="blur_2" style="background: linear-gradient(90deg, #BFE85B 0%, #2D9D84 98.96%)"></div>


    </div>
    <div class="hero-slider__slide">
      <div class="blur_1" style="background:  #FF466E;"></div>
      <div class="slide-img-wrapper">
        <div class="wrapper">
          <div class="row">
            <img src="<?php echo get_template_directory_uri() ?>/img/pic-site.png" alt="" class="hero-slider__pic">      
          </div>
      </div>
      
      </div>
      
      <div class="blur_2" style="background:  #FF466E;"></div>


    </div> -->