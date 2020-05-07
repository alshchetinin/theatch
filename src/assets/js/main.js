$(document).ready(function () {
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
   window.addEventListener("resize", appHeight);
   appHeight();
});
