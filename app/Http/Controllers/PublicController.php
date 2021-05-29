<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PublicController extends BaseController {

    public function index() {
        return view('public.home');
    }

    public function contactUs(Request $request) {
        
    }
    
    public function aboutUs(Request $request) {
        
    }
    
}
