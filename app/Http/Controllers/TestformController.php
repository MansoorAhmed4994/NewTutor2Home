<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestformController extends Controller
{
    //
    function create()
    {
        return view('testform');
    }

    function store(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;

        dd($fname.'  '.$lname);
        
    }


}
