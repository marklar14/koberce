
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
   // el: '#app'
});

// JQUERY DROBNOSTI
require('slick-carousel');

$(document).ready(function() {

    $('.bannery').slick({
        accessibility: true,
        autoplay: true,
        arrows: true
    });

    $('.boxes .radek').slick({
        accessibility: true,
        autoplay: true,
        arrows: true,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: 'unslick'
            }
        ]

    });

    require('magnify');

    var $zoom = $('.zoom').magnify();

    $('html').on({
        magnifystart: function() {
            console.log('magnifystart event fired');
        },
        magnifyend: function() {
            console.log('magnifyend event fired');
        }
    });


    $('.resp ul li a').on('click', function (e) {
        e.preventDefault();

        $('.odkazy ul li').toggle(1000);
    });

    $('.resp2 ul li a').on('click', function (e) {
        e.preventDefault();

        $('.menu ul.hlavni li').toggle(500);
    });

    $('.kat a').on('click', function (e) {
        e.preventDefault();
        if ($(window).width() <= 1000){
            $('.kat .podkategorie').toggle(500);
        }

    });

    $('a.plus').on('click', function(e) {
        e.preventDefault();
        $(this).parent().find('ul.podkategorie3').toggle(500);
    });

    //produkt obrazky

    $('.mini img').hover(function() {
        var img = $(this).attr('src');
        var big = $(this).attr('data-big');

        if(img !=  $('.images a img').attr('src'))
        {
           // $('.images a img').attr('src', img).hide(300).fadeIn(300);

            $(".images a img")
                .fadeOut(400, function() {
                    $(".images a img").attr('src',img);
                })
                .fadeIn(400);

            $('.images a img').attr('data-magnify-src', big);

            $zoom.destroy();

           $zoom = $('.zoom').magnify({
                speed: 200,
                src: big
            });

            $('.images a').attr('href', big);
        }

    });

    $('.mini img').on('click', function() {
        if($('body .showImage').length === 0 )
        {
            var bg = $(this).attr('src');

            var str = '<div class="ztmavit"></div><div class="showImage"><div class="pic"><img src="' + bg + '" /><p class="zavrit"><a href="#">Zavřít</a></p></div> <div class="zavrit"><a href="#">x</a></div></div>';
            $('body').append(str);
            $('.ztmavit').fadeIn(400);
            $('.showImage').show(500);
        }

        $('.zavrit a').on('click', function() {
            $('.ztmavit').hide(500);
            $('.showImage').hide(500);

            $('.ztmavit').remove();
            $('.showImage').remove();
        });
    });

    $('.images a').on('click', function() {
        if($('body .showImage').length === 0 )
        {
            var bg = $(this).attr('href');
            bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");

            var str = '<div class="ztmavit"></div><div class="showImage"><div class="pic"><img src="' + bg + '" /><p class="zavrit"><a href="#">Zavřít</a></p></div> <div class="zavrit"><a href="#">x</a></div></div>';
            $('body').append(str);
            $('.ztmavit').fadeIn(400);
            $('.showImage').show(500);
        }

        $('.zavrit a').on('click', function() {
            $('.ztmavit').hide(500);
            $('.showImage').hide(500);

            $('.ztmavit').remove();
            $('.showImage').remove();
        });
    });

    //scroll
    $(window).scroll(function (event) {
        var top = $(window).scrollTop();
        var hide = false;
        // Do something


        if(!hide) {
            $('.podkategorie .sloupec').hide();
            $('.podkategorie .hlavicka').css('top','0');
            $('.podkategorie .hlavicka').css('height','8vh');
            hide = true;
        }

        if(top == 0)
        {
            $('.podkategorie .hlavicka').css('top','5vh');
            $('.podkategorie .sloupec').show();
            $('.podkategorie .hlavicka').css('height','15vh');
            hide = false;
        }
    });


});



