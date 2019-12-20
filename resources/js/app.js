require('./dependencies');

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Axios from 'axios';

console.log(VueRouter);

// Components
import Navbar from "./components/Navbar";
import Wishlists from "./components/pages/Wishlists";
import Tabs from "./components/pages/Tabs";
import Profile from "./components/pages/Profile";

Vue.use(Vuex);
Vue.use(VueRouter);

// VueRouter
const router =  new VueRouter ({
  routes: [
    {
      path: '/',
      name: 'frontpage',
      component: Tabs
    },
    {
      path: '/profile',
      name: 'profile',
      component: Profile
    }
  ]
})


// Vuex
const store = new Vuex.Store({
  state: {
    email: '',
  },
  mutations: {
    set_email(state, new_email) {
      state.email = new_email;
    }
  },
  actions: {
    set_email(context, new_email) {
      context.commit('set_email', new_email)
    }
  },
  getters: {
    email: state => {
      return state.email
    }
  }
});

// Vue
const app = new Vue({
    store,
    router,
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
      Navbar,
      Wishlists,
      Tabs
    },
    mounted() {
      // Get user email
      Axios.get('/user/email').then(response => (this.$store.dispatch('set_email', response.data)))
    }
}).$mount('#app');

