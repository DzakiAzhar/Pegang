<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function login(){
        return view(view: 'welcome');
    }
}
