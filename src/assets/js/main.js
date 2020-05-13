$(document).ready(function () {

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

