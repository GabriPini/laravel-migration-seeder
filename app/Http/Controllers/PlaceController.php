<?php

namespace App\Http\Controllers;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

        //
        public function index()
        {
            $travels = Place::all();
            return view('home' , compact('travels'));
        }

}
