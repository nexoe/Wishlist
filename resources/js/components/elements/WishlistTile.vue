<template>
  <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-3by3">
            <img :src="image" alt="Wishlist front image">
          </figure>
        </div>
        <div class="card-header">{{name}}</div>
        <div class="card-content">
         {{description}}
        </div>
      </div>
    </div>
</template>




<script>
export default {
  name: 'wishlist_tile',
  props: [
    name,
    description,
    image = 'https://bulma.io/images/placeholders/1280x960.png'
    ],
  mounted() {

  }
}
</script>