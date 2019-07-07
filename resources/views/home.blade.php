@extends('layouts.app')

@section('content')
<div class="section">
  <div class="container">
    <div class="box">
      <div class="tabs is-centered is-medium">
        <ul>
          <li id="my_wishlists" class="is-active">
            <a>
              <span class="icon is-small"><i class="fa fa-th-list"></i></span>
                {{_i('My wishlists')}}
            </a>
          </li>
          <li id="profile">
            <a>
              <span class="icon is-small"><i class="fa fa-user"></i></span>
                {{_i('Profile')}}
            </a>
          </li>
          <li id="shared_with_me">
            <a>
              <span class="icon is-small"><i class="fa fa-list"></i></span>
                {{_i('Shared with me')}}
            </a>
          </li>
        </ul>
      </div>

      <div class="box" id="tabs-content">
        <div id="my_wishlists_box">
            @component('pages/wishlist')

            @endcomponent
        </div>

        <div id="profile_box">
          profile
        </div>

        <div id="shared_with_me_box">
          shared with me
        </div>
      </div>

    </div>
</div>
</div>
@endsection

@section('script')
<script>

$(document).ready(function(){

  $("#tabs-content").children().hide();
  $("#my_wishlists_box").show();

  $("#my_wishlists").on('click', function(){
    $("#tabs-content").children().hide();
    $("#my_wishlists_box").show();
  });
  $("#profile").on('click', function(){
    $("#tabs-content").children().hide();
    $("#profile_box").show();
  });
  $("#shared_with_me").on('click', function(){
    $("#tabs-content").children().hide();
    $("#shared_with_me_box").show();
  });
});

</script>
@endsection
