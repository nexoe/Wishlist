<template>
   <nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#">
      <h4 class="is-size-4 has-text-primary">Wyshlist</h4>
    </a>

    <div class="navbar-burger" v-on:click="toggleMenu" v-bind:class="{'is-active': is_active}" >
      <span></span>
      <span></span>
      <span></span>
    </div>

  </div>
  <div class="navbar-menu" v-bind:class="{'is-active': is_active, 'hidden': !is_logged_in}">
    <div class="navbar-end" >
        <div class="navbar-item has-dropdown is-hoverable">
          <div class="navbar-link">
            {{ email }}
          </div>
          <div class="navbar-dropdown is-right">
            <a class="navbar-item" :href="home_url"><i class="fa fa-user"></i>Your Profile</a>
            <span class="navbar-divider"></span>
            <a class="navbar-item" :href="logout_url"><i class="fa fa-sign-out"></i> Logout</a>
          </div>
        </div>
      </div>
  </div>
</nav>
</template>

<script>
export default {
  name: 'navbar',
  props: ['email','home_url', 'logout_url','is_logged_in'],
  data() {
    return {
      is_active: 'false',
    }
  },
  methods: {
    toggleMenu: function() {
      this.is_active = !this.is_active
    }
  },
  mounted() {
    this.toggleMenu();
  }
}
</script>

<style scoped>
.hidden {
  display: none
}
</style>