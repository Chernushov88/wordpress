(function ($) {
    // Menu fixes
    function onResizeMenuLayout() {
        if ($(window).width() > 767) {
            $(".dropdown").hover(
                    function () {
                        $(this).addClass('open')
                    },
                    function () {
                        $(this).removeClass('open')
                    }
            );
            $(".dropdown").focusin(
                    function () {
                        $(this).addClass('open')
                    },
                    );
            $(".dropdown").focusout(
                    function () {
                        $(this).removeClass('open')
                    },
                    );
        } else {
            $(".dropdown").hover(
                    function () {
                        $(this).removeClass('open')
                    }
            );
        }
    }
    ;
    // initial state
    onResizeMenuLayout();
    // on resize
    $(window).on('resize', onResizeMenuLayout);

    $('.navbar .dropdown-toggle').hover(function () {
        $(this).addClass('disabled');
    });

    $(window).scroll(function () {
        var topmenu = $('#top-navigation').outerHeight();
        var header = $('.site-header').outerHeight();
        if ($(document).scrollTop() > (topmenu + header + 50)) {
            $('.header-cart').addClass('float-cart');
            $('.header-my-account').addClass('float-login');
        } else {
            $('.header-cart').removeClass('float-cart');
            $('.header-my-account').removeClass('float-login');
        }
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
        $('#scroll').fadeIn(500);
        } else {
        $('#scroll').fadeOut(500);
        }
      });





    var $myDiv = $('#my-menu');
    //document.querySelector("#my-menu").innerHTML = "<div>11111111111</div>";



    var myDivMenu = document.querySelector('#my-menu');
    var logo = document.querySelector(".ms_logo");
    myDivMenu.prepend(logo);

    $(document).ready(function () {
        $('#scroll').click(function(e){
            console.log(e);
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

        if ($myDiv.length) {
            mmenu = mmlight(document.querySelector("#my-menu"));
            mmenu.create("(max-width: 991px)");
            mmenu.init("selected");

            $("#main-menu-panel").click(function (e) {
                e.preventDefault();
                // $(this).removeClass('open');
                console.log('e', e);
                if ($("#my-menu").hasClass("mm--open")) {
                    mmenu.close();
                    $(this).removeClass("open");
                } else {
                    mmenu.open();
                    $(this).addClass("open");
                }
                e.stopPropagation();
            });
        }
    });
    document.addEventListener("click", function(e) {
        document.querySelector('.open-panel').classList.remove('open');
    });

    $(".darken").click(function(){
      $(".darken").fadeOut(300);
      $('.popup').removeClass('open');
    });
    $('form.cart').on('click', 'button.plus, button.minus', function () {

        // Get current quantity values
        var qty = $(this).closest('form.cart').find('.qty');
        var val = parseFloat(qty.val());
        var max = parseFloat(qty.attr('max'));
        var min = parseFloat(qty.attr('min'));
        var step = parseFloat(qty.attr('step'));

        // Change the value if plus or minus
        if ($(this).is('.plus')) {
            if (max && (max <= val)) {
                qty.val(max);
            } else {
                qty.val(val + step);
            }
        } else {
            if (min && (min >= val)) {
                qty.val(min);
            } else if (val > 1) {
                qty.val(val - step);
            }
        }

    });
    $(".ms_nav_close").on('click', function() {
        $(".ms_sidemenu_wrapper").toggleClass('open_menu');
        $('body').toggleClass('slide_menu');
        $('.modal-darken-menu').toggleClass('active');
    });

})(jQuery);

  function ShowPopup(target){
    // event.preventDefault();
    console.log(target);
    jQuery(".darken").fadeIn();
    jQuery(target).addClass('open');
  }
  function HidePopup(target){
    jQuery(".darken").fadeOut(300);
    jQuery(target).removeClass('open');
  }