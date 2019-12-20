<template>
<div id="wishlists">
<div class="column">
    <div class="is-centered">
        <button v-on:click='modalOpen' class="button">Create new wishlist</button>
    </div>

  <div class="column">

  </div>
</div>

<div class="modal" v-bind:class="{'is-active': is_active}">
  <div class="modal-background" v-on:click="modalClose"></div>
  <div class="modal-content">
    <new_wishlist_form></new_wishlist_form>>
  </div>
  <button class="modal-close is-large" aria-label="close" v-on:click="modalClose"></button>
</div>
</div>
</template>


<script>
import new_wishlist_form from '../forms/NewWishlist';

export default {
  name: 'wistlists',
  props: [ ],
  data() {
    return {
      is_active: 'false',
    }
  },
  methods: {
    modalClose: function() {
      this.is_active = false;
    },
    modalOpen: function() {
      this.is_active = true
    },
  },
  mounted() {
    this.modalClose();
  },
  components: {
    new_wishlist_form,
  }
}
</script>

<style>

</style>