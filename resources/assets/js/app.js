
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function(){

    // General stuff
  $(".navbar-burger").on('click', function(){
    $(".navbar-burger").toggleClass('is-active');
    $(".navbar-menu").toggleClass('is-active');
  });

  $("button.delete").on('click', function(){
    $(this).parent().hide();
  });

  $("div.tabs > ul > li").on('click', function(){
    $(this).parent().children('li').removeClass('is-active');
    $(this).addClass('is-active');
  });

  $(".modal-close").click(function(){
    $(this).parent().toggleClass('is-active');
  });

  $(".modal-background").click(function(){
    $(this).parent().toggleClass('is-active');
  });


  // Specific stuff
  $("#newWishlistBtn").click(function(){
    $('#newWishlistModal').toggleClass('is-active');
  });

})
