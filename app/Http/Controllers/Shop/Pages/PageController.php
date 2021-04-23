<?php

namespace App\Http\Controllers\Shop\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function contact()
    {
        return view('Shop.Pages.contact');
    }

    public function about()
    {
        return view('Shop.Pages.about');
    }


}
