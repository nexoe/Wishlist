<template>
<div class="card">
    <div class="card-header">
        <div class="card-header-title">
        Create new wishlist
        </div>
    </div>

    <div class="card-content">
        <form action="/wishlist/create" method="post" >
            <div class="field">
                <label for="Name">Name</label>
                <div class="control">
                    <input class="input is-centered is-primary" name="name" type="text" placeholder="What do you want to call this wishlist?">
                </div>
            </div>

            <div class="field">
                <label for="Description">Description</label>
                <div class="control">
                    <textarea class="textarea is-primary" name="description" id="description" cols="30" rows="5" placeholder="Write a description for this wishlist"></textarea>
                </div>
            </div>

            <div class="field is-left">
                <label for="isPublic">Privacy</label>
                <div class="control">
                    <div class="select is-primary">
                        <select name="isPublic" id="isPublic">
                            <option value=0>Private</option>
                            <option value=1>Public</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field is-right">
                <div class="control">
                    <button class="button">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
</template>

<script>
export default {
  name: 'new_wishlist_form',

}
</script>