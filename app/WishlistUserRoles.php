<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishlistUserRoles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wishlist_id',
        'user_id',
        'role'
    ];
}
