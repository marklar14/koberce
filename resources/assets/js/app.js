
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
        $('.images .hlavni').css('background-image', 'url(' + img + ')');
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

    $('.images .hlavni').on('click', function() {
        if($('body .showImage').length === 0 )
        {
            var bg = $(this).css('background-image');
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

});



