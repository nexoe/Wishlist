/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./dependencies');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('navbar', require('./components/Navbar.vue'));
import navbar from "./components/Navbar";
import wishlists from "./components/pages/Wishlists";
import tabs from "./components/pages/Tabs";

const app = new Vue({
    el: '#app',
    methods: {
      hideParent: function() {
        $(this).parent().hide();
      },
      changeTab: function() {
        $(this).parent().children('li').removeClass('is-active');
        $(this).addClass('is-active');
      },
    },
    components: {
      navbar,
      wishlists,
      tabs,
    }
});
