<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //

    public function home()
    {
        $p = ['maro','fikri','marouane','badr'];
        return view('pages.about',compact('p'));

    }
}
