<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist_user_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('wishlist_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('role', ['owner', 'collaborator', 'viewer']);
        });

        Schema::table('wishlist_user_roles', function(Blueprint $table) {
            $table->foreign('wishlist_id')->references('id')->on('wishlists')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlist_user_roles');
    }
}
