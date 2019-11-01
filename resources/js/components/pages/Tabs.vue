<template>
<div class="section">
  <div class="container">
    <div class="box">
      <div class="tabs is-centered is-medium">
        <ul>
          <li id="my_wishlists" v-bind:class="{'is-active': wishlists_active}" v-on:click="activateWishlists">
            <a>
              <span class="icon is-small"><i class="fa fa-th-list"></i></span>
                My wishlists
            </a>
          </li>
          <li id="profile" v-bind:class="{'is-active': profile_active}" v-on:click="activateProfile">
            <a>
              <span class="icon is-small"><i class="fa fa-user"></i></span>
                Profile
            </a>
          </li>
          <li id="shared_with_me" v-bind:class="{'is-active': shared_active}" v-on:click="activateShared">
            <a>
              <span class="icon is-small"><i class="fa fa-list"></i></span>
                Shared with me
            </a>
          </li>
        </ul>
      </div>

      <div class="box" id="tabs-content">
        <div v-show="wishlists_active">
            <wishlists></wishlists>
        </div>

        <div id="profile_box" v-show="profile_active">
          profile
        </div>

        <div id="shared_with_me_box" v-show="shared_active">
          shared with me
        </div>
      </div>

    </div>
  </div>
</div>
</template>


<script>
import wishlists from './Wishlists';
import profile from './Profile';
import shared_with_me from './SharedWithMe';

export default {
  name: 'tabs',
  props: [],
  data() {
    return {
      wishlists_active: 'false',
      profile_active: 'false',
      shared_active: 'false'
    }
  },
  methods: {
      activateWishlists() {
        this.wishlists_active  = true;
        this.profile_active    = false;
        this.shared_active     = false;
      },
      activateProfile() {
        this.wishlists_active  = false;
        this.profile_active    = true;
        this.shared_active     = false;
      },
      activateShared() {
        this.wishlists_active  = false;
        this.profile_active    = false;
        this.shared_active     = true;
      }
  },
  mounted() {
    this.activateWishlists();
  },
  components: {
    wishlists,
    profile,
    shared_with_me
  }
}
</script>