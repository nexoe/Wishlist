/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function(){

  // General stuff

$("div.tabs > ul > li").on('click', function(){
  $(this).parent().children('li').removeClass('is-active');
  $(this).addClass('is-active');
});


// Specific stuff
$("#newWishlistBtn").click(function(){
  $('#newWishlistModal').toggleClass('is-active');
});

})

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    methods: {
      openMenu: function() {
        $(".navbar-burger").toggleClass('is-active');
        $(".navbar-menu").toggleClass('is-active');
      },
      hideParent: function() {
        $(this).parent().hide();
      },
      modalClose: function() {
        $(this).parent().toggleClass('is-active');
      },
      changeTab: function() {
        $(this).parent().children('li').removeClass('is-active');
        $(this).addClass('is-active');
      }

    }
});
