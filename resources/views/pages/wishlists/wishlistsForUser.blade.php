<div class="columns is-centered">
{{$wishlists == WishlistController::index()}}
  @foreach ($wishlists as $wishlist)
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-3by3">
            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
          </figure>
        </div>
        <div cla  ss="card-header">{{$wishlist->name}}</div>
        <div class="card-content">
        {{substr($wishlist->description, 0, 20)}}
        </div>
      </div>
    </div>
  @endforeach
</div>