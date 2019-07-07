<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use App\Http\Controllers\WishlistUserRoleController;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $wishlist = new Wishlist;

        $wishlist->name = $request->name;
        $wishlist->desciption = $request->desciption;
        $wishlist->isPublic = $request->isPublic;

        $wishlist->save;

        $userId = Auth::id();

        WishlistUserRoleController::store($wishlist->id, $userId, 'owner');
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
