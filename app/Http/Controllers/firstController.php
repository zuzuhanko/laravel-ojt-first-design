<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\firstController;

class firstController extends Controller
{

    public function index()
    {
        return view('index');
}

public function admission(){
    return view ('admission');
}

public function about(){
    return view ('about');
}

public function contact(){
    return view ('contact');
}

public function why(){
    return view ('why');
}

}
