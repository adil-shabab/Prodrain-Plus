
// loader
$(document).ready(function(){
  setTimeout(()=> {
      $('.loader').remove();
  } , 1200); // after 8 sec it will remove.
});


/* scroll to top button */

var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});

// social media

$(window).scroll(function(){
  if ($(this).scrollTop() > 900) {
    $('.social-media-icons').addClass('d-none')
  }
  else{
    $('.social-media-icons').removeClass('d-none')
  }
});




// testimonial section

$(document).ready(function () {

  $('.client-single').on('click', function (event) {
     event.preventDefault();

     var active = $(this).hasClass('active');

     var parent = $(this).parents('.testi-wrap');

     if (!active) {
         var activeBlock = parent.find('.client-single.active');

         var currentPos = $(this).attr('data-position');

         var newPos = activeBlock.attr('data-position');

         activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
         activeBlock.attr('data-position', currentPos);

         $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
         $(this).attr('data-position', newPos);

     }
 });

}(jQuery));








// $(document).ready(function(){
//   $(".hamburger").click(function(){
//     $(this).toggleClass("is-active");
//   });
// });





// burger menu

// let menu = document.getElementById('menu');
// let hambugerBtn = document.querySelector('.hambugerBtn')
// let body = document.getElementById('body')
// let homeBtn = document.getElementById('homeBtn')
// let aboutBtn = document.getElementById('aboutBtn')
// let featuresBtn = document.getElementById('featuresBtn')
// let testimonialBtn = document.getElementById('testimonialBtn')
// let contactBtn = document.getElementById('contactBtn')
// hambugerBtn.addEventListener('click', function(){
//   menu.classList.toggle('d-none')
//   menu.classList.toggle('active')
//   if (menu.classList.contains('active')){
//     body.style.cssText = 'max-height: 100vh;overflow-y:hidden'
//   }else{
//     body.style.cssText = 'max-height: auto;overflow-y:scroll'
//   }
// })


// homeBtn.addEventListener('click',function(){
//   document.querySelector('.hamburger').classList.remove('is-active')
//   document.querySelector('.hambugerBtn').classList.remove('is-active')
//   menu.classList.add('d-none')
//   menu.classList.remove('active')
//   body.style.cssText = 'max-height: auto;overflow-y:scroll'
// })
// aboutBtn.addEventListener('click',function(){
//   document.querySelector('.hamburger').classList.remove('is-active')
//   document.querySelector('.hambugerBtn').classList.remove('is-active')
//   menu.classList.add('d-none')
//   menu.classList.remove('active')
//   body.style.cssText = 'max-height: auto;overflow-y:scroll'
// })
// featuresBtn.addEventListener('click',function(){
//   document.querySelector('.hamburger').classList.remove('is-active')
//   document.querySelector('.hambugerBtn').classList.remove('is-active')
//   menu.classList.add('d-none')
//   menu.classList.remove('active')
//   body.style.cssText = 'max-height: auto;overflow-y:scroll'
// })
// testimonialBtn.addEventListener('click',function(){
//   document.querySelector('.hamburger').classList.remove('is-active')
//   document.querySelector('.hambugerBtn').classList.remove('is-active')
//   menu.classList.add('d-none')
//   menu.classList.remove('active')
//   body.style.cssText = 'max-height: auto;overflow-y:scroll'
// })
// contactBtn.addEventListener('click',function(){
//   document.querySelector('.hamburger').classList.remove('is-active')
//   document.querySelector('.hambugerBtn').classList.remove('is-active')
//   menu.classList.add('d-none')
//   menu.classList.remove('active')
//   body.style.cssText = 'max-height: auto;overflow-y:scroll'
// })



// tilt
// $('.js-tilt').tilt({
// 	scale: 1.15,
// 	glare: true,
//   maxGlare: 0.5,
//   easing: "cubic-bezier(.03,.98,.52,.99)",
//   speed: 400
// });





