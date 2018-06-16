<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FavoritesController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
      
    
    public function store(Request $request,$id)
    {
        \Auth::user()->favorite($id);
        return redirect()->back();
    }
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return redirect()->back();

    }
    
}
