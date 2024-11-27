<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = offer::all();
        return view('home',compact('offers'));
    }
}
