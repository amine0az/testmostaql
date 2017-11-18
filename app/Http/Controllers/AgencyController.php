<?php

namespace App\Http\Controllers;
use App\Agency;
use App\Product

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function show($slug)
    {
        $agencies = App\Agency::where('slug', '=', $slug)->firstOrFail();
        $products = DB::table('products')->join('agencies', 'agency_id', '=', 'id')->where('slug','=', $slug)->get();
        return view('single.agency', compact('agencies','products'));
    }
}
