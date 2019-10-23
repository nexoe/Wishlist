<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use App\WishlistUserRoles;
use App\Http\Controllers\WishlistUserRoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlistsForUser = WishlistUserRoles::where('user_id', Auth::id())->get();

        $wishlists = collect([]);

        $wishlistsForUser->each(function($item, $key) use($wishlists) {
          $wishlists->push(Wishlist::find($item->wishlist_id));
        });

        return $wishlists;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms/wishlist');
    }

    /**
     * Save a new wishlist with the currently logged in user as owner
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wishlist = new Wishlist;
        $wishlist->name = $request->name;
        $wishlist->description = $request->description;
        $wishlist->isPublic = $request->isPublic;
        $wishlist->save();

        $userId = Auth::id();
        $wurc = new WishlistUserRoleController;
        $wurc->store($wishlist->id, $userId, 'owner');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return App\Wishlist;
     */
    public function show($id)
    {
        $wishlist = Wishlist::find($id);

        return $wishlist;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);

        $wishlist->name = $request->name;
        $wishlist->desciption = $request->desciption;
        $wishlist->isPublic = $request->isPublic;

        $wishlist->save;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::find($id);

        $wishlist->delete();
    }
}
