(function (window, document) {
  "use strict";



})(window, document);

document.addEventListener("DOMContentLoaded", function () {
  // const STICKY_HEIGHT = 43;
  // const body = document.querySelector("body");
  // let headerHeight = document.querySelector('.header').clientHeight;
  // body.classList.add('siteloaded');
  
  // function onScroll(){
  //   var sections = document.querySelectorAll('a[data-element="anchor"]:not(.btn)');
  //   var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    
  //   sections.forEach(section => {
  //     var currLink = section; 
  //     var val = currLink.getAttribute('href');
  //     var refElement = document.querySelector(val);
  //       if (refElement.offsetTop - STICKY_HEIGHT <= scrollPos && ( refElement.offsetTop + refElement.offsetHeight - STICKY_HEIGHT > scrollPos)){
  //         currLink.classList.add('active');
  //       } else {
  //          currLink.classList.remove('active');
  //       }
  //   });
  // };

  // function scrollIt(destination, duration = 200, easing, callback) {
  //   const easings = {
  //     easeInQuad(t) {
  //       return t * t;
  //     },
  //   };
  //   const start = window.pageYOffset;
  //   const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();
  
  //   const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
  //   const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
  //   const destinationOffset = typeof destination === 'number' ? destination : destination.offsetTop;
  //   const destinationOffsetToScroll = Math.round(documentHeight - destinationOffset < windowHeight ? documentHeight - windowHeight : destinationOffset);
  
  //   if ('requestAnimationFrame' in window === false) {
  //     window.scroll(0, destinationOffsetToScroll);
  //     if (callback) {
  //       callback();
  //     }
  //     return;
  //   }
  
  //   function scroll() {
  //     const now = 'now' in window.performance ? performance.now() : new Date().getTime();
  //     const time = Math.min(1, ((now - startTime) / duration));
  //     const timeFunction = easings[easing](time);
  //     window.scroll(0, Math.ceil((timeFunction * (destinationOffsetToScroll - start)) + start));
  
  //     if (window.pageYOffset === destinationOffsetToScroll) {
  //       if (callback) {
  //         callback();
  //       }
  //       return;
  //     }
  
  //     requestAnimationFrame(scroll);
  //   }
  //   scroll();
  // }


  

  // const h = document.querySelector("header");
  // let stuck = false;
  // let stuckSmall = false;
  // const headHeight = h.clientHeight;

  window.addEventListener("scroll", function () {
    // onScroll();
    // parallax();
    // const offset = window.pageYOffset;
    // const distance = preHeaderHeight - offset;
    // const distanceWithHeader = headerHeight + preHeaderHeight - offset;

    // if (distance <= 0 && !stuck) {
    //   h.classList.add("sticky");
    //   h.style.top = "0px";
    //   stuck = true;
    // } else if (stuck && offset <= preHeaderHeight) {
    //   h.classList.remove("sticky");
    //   stuck = false;
    // }

    // if (distanceWithHeader <= 0  && !stuckSmall ) {
    //   h.classList.add("sticky-small");
    //   stuckSmall = true;
    // } else if (stuckSmall && offset <= headerHeight + preHeaderHeight) {
    //   h.classList.remove("sticky-small");
    //   stuckSmall = false;
    // }
  });


  $(window).scroll(function(){
    if ($(this).scrollTop() > 500) { 
    $('#scroll').fadeIn();
    } else {
    $('#scroll').fadeOut();
    }
  });
     
  $('#scroll').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
 


});
