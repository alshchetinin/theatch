$(document).ready(function () {
   const controller = new ScrollMagic.Controller();
   const scrollDuration = 3 * $('.main-project-list-item').height();
   const transformXimg = 3 * $('.main-project-container__img').width();
   const tween = gsap.to(".main-project-container__set", { x: -transformXimg, ease: "linear" });
   const scene = new ScrollMagic.Scene({
      triggerElement: "#main-project",
      triggerHook: "onLeave",
      duration: scrollDuration,
   })
      .setTween(tween)
      .setPin(".main-project-container", { pushfollowers: true })
      // .addIndicators({ name: `2 (duration: ${scrollDuration})` })
      .addTo(controller);


   const onSlideToggleTitle = () => {
      $('.standard-section-slide-toogle').click(function (e) {
         e.preventDefault();
         $(this).find('.standard-section-slide-toogle__icon').toggleClass('standard-section-slide-toogle__icon_close');
         $(this).find('.standard-section-slide-toogle__description').slideToggle();

      });
   }

   if ($(window).width() < 960) {
      onSlideToggleTitle()
   }






   $('.burger').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('burger_open');
      $('.navigation-popup').toggleClass('navigation-popup_active');
      $('.popup-menu-mobile').toggleClass('popup-menu-mobile_visible');
      $('body').toggleClass('open-popup');
   });

   //Дебагер сетки
   $('html').keydown(function (eventObject) { //отлавливаем нажатие клавиш
      if (event.ctrlKey && event.keyCode == 71) { //если нажали Ctrl+q
         $('.debug-grid').toggleClass('debug-grid__active');
      }
   });

   //Фикс высоты экрана
   const appHeight = () =>
      document.documentElement.style.setProperty(
         "--app-height",
         `${window.innerHeight}px`
      );
   //window.addEventListener("resize", appHeight);
   appHeight();
});


//События формы
document.addEventListener('wpcf7mailsent', function(event) {   
   $('.form').addClass('form_success');   
   function removeSuccess() {
      $('.form_success').removeClass('form_success');
    }
    
    setTimeout(removeSuccess, 1000);
}, false);