$(document).ready(function () {

   gsap.registerPlugin(ScrollTrigger)
   var onSlideToggleTitle = () => {
      $('.standard-section-slide-toogle').click(function (e) {
         e.preventDefault();
         $(this).find('.standard-section-slide-toogle__icon').toggleClass('standard-section-slide-toogle__icon_close');
         $(this).find('.standard-section-slide-toogle__description').slideToggle();

      });
   }

   if ($(window).width() < 960) {
      onSlideToggleTitle()
   }

   gsap.from('.fact_absolute', {duration: 2, y: 300, ease: "back.out(1)"})

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
   var appHeight = () =>
      document.documentElement.style.setProperty(
         "--app-height",
         `${window.innerHeight}px`
      );
   //window.addEventListener("resize", appHeight);
   appHeight();


   $('input[type="file"]').change(function(){
      var value = $("input[type='file']").val();
      $('.custom-file-field__text').text('Файл загружен');
      $('.custom-file-field').addClass('custom-file-field_done')
  });   
   

  $('.step-item').each(function (index, element) {
     // element == this
     $(this).addClass('step-trigger' + index)  
     $(this).find('.step-item__line-animation').addClass('step-line-animation' + index)     
     $(this).find('.step-item__number span').addClass('step-line-animation-number' + index)            
      
      gsap.to('.step-line-animation' + index, {
         scrollTrigger: {
            trigger: ".step-trigger" + index,           
            start: "top center",
            end : "bottom center",
            scrub: true,
            ease: "linear",            
          },
         height: "100%",
         ease: "linear" },
         0)


         ScrollTrigger.create({
            trigger: ".step-trigger" + index,
            start: "top center",
            end: "bottom center",
            scrub: true,
            ease: "linear",            
            onEnter: () => $(this).find('.step-item__number span').addClass('step-item__number_animation'),            
            onLeaveBack: () => $(this).find('.step-item__number span').removeClass('step-item__number_animation'),
          });

      // gsap.to('.step-line-animation-number' + index, {
      //    scrollTrigger: {
      //       trigger: ".step-trigger" + index,           
      //       start: "top center",
      //       end : "top center",
      //       scrub: true,
      //       ease: "linear",
      //       markers: {startColor: "green", endColor: "red", fontSize: "12px"} // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
      //     },
      //    background: 'linear-gradient(90deg, #F857A6 0%, #FF5858 100%)', 
      //    color: '#fff', 
      //    ease: "linear"}, 
      //    0)             

  });

  


});




// //События формы
// document.addEventListener('wpcf7mailsent', function(event) {   
//    $('.form').addClass('form_success');   
//    function removeSuccess() {
//       $('.form_success').removeClass('form_success');
//     }
    
//     setTimeout(removeSuccess, 1000);
// }, false);