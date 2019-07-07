<div class="column">
    <div class="is-centered">
        <button id="newWishlistBtn" class="button">{{_i('Create new wishlist')}}</button>
    </div>
</div>



<div class="modal" id="newWishlistModal">
  <div class="modal-background"></div>
  <div class="modal-content">
    @component('forms/wishlist')
    @endcomponent
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

