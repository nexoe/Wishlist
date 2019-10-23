<div class="column">
    <div class="is-centered">
        <button id="newWishlistBtn" class="button">{{_i('Create new wishlist')}}</button>
    </div>

  <div class="column">

  </div>

</div>



<div class="modal" id="newWishlistModal">
  <div class="modal-background" v-on:click="modalClose"></div>
  <div class="modal-content">
    @component('forms/wishlist')
    @endcomponent
  </div>
  <button class="modal-close is-large" aria-label="close" v-on:click="modalClose"></button>
</div>