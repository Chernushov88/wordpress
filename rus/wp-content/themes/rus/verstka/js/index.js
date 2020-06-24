 jQuery(function ($) {
  $('.partition i').hover(function () {
    $('.partition ul').css('display', 'block');
  }, function () {
    // change to any color that was previously used.
    $('.partition ul').css('display', 'none');

  });
  $('.date-range .icon-cal-start').click(function () {
    $('.date-range .calendar-news-start').css('display', 'block');
  })
  $('.date-range .icon-cal-end').click(function () {
    $('.date-range .calendar-news-end').css('display', 'block');
  })

  $(document).click(function (event) {
    $target = $(event.target);
    if (!$target.closest('.date-range .fa-calendar').length &&
      $('.calendar-news-start').is(":visible")) {
      $('.calendar-news-start').hide();
    }
  });

  $(document).click(function (event) {
    $target = $(event.target);
    if (!$target.closest('.date-range .fa-calendar').length &&
      $('.calendar-news-end').is(":visible")) {
      $('.calendar-news-end').hide();
    }
  });

  $('#carousel_home_baner').owlCarousel({
      margin: 0,
      items : 1,
      dots:  true,
      singleItem: true,
      nav: false,
      loop: true,
      responsive:{
        992:{

        },
        768:{
        },
        320:{
        }
      }
  });
  $('#carousel_partners').owlCarousel({
      margin: 0,
      items : 5,
      dots:  true,
      singleItem: true,
      nav: false,
      loop: true,
      responsive:{
        1200:{
          items: 5,
        },
        992:{
          items: 5,
        },
        768:{
          items: 4,
        },
        480:{
          items: 3,
        },
        320:{
          items: 2,
        }
      }
  });

})

window.addEventListener('load', function(){
  let w = window.innerWidth;

  if (w < 992) {
    console.log('window.innerWidth', w);
    let our_services = document.querySelector('#our-services-js');
    console.log('our_services', our_services);
    our_services.addEventListener('click', function(e){
      e.stopPropagation();
      e.preventDefault();
      let services_block = document.querySelector('.services-block');
      console.log('services_block', services_block);
      if ( services_block.classList.contains('active') ) {
        this.classList.remove('active');
        services_block.classList.remove('active');
      }else{
        console.log(0)
        this.classList.add('active');
        services_block.classList.add('active');
      }

    })
  }
});


$(document).mouseup(function (e) {
  var container = $("#main_menu");
  var menu = $("#touch_menu");


  if ((container.has(e.target).length === 0) && (menu.has(e.target).menu === 0) ){
    container.slideUp(150);
  }
});


function send(url,form_id,result_div){
    // Отсылаем параметры
  jQuery.ajax({
    type: "POST",
    url:  url,
    data: jQuery("#"+form_id).serialize(),
    // Выводим то что вернул PHP
    success: function(html)
    {
        jQuery("#"+result_div).empty().fadeIn();
        jQuery("#"+result_div).append(html);

        setTimeout(function() {
        jQuery(document).ready(function(){
         jQuery("#"+result_div).fadeOut(4000);
        });
          }, 5000)
    },

    error: function(){
      jQuery("#"+result_div).empty();
      jQuery("#"+result_div).append("Ошибка!");
    }
  });
}
function touchMenu(elem,menu){
  let touch_menuAll = document.querySelectorAll('.touch_menu');
  touch_menuAll.forEach(e => {

    if (e.classList.contains('active')){
      if (elem != e)
       $('.main_menu, .touch_menu').removeClass('active');
    }else{
      console.log(0);
    }
  });






  $(elem).toggleClass('active');
  $(menu).toggleClass('active');
  $('.dark-transparent').toggleClass('active');
  addIconsMenu(menu);
}

function addIconsMenu(menu){
  console.log(menu);
  $(menu + ' li').each(function(){
    $(this).children('.add').click(function(){
      console.log('click');
      $(this).toggleClass('active').parent('li').children('ul').toggleClass('show');
    });
  });
};
