
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

});

