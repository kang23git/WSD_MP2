<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact');
    }
    function store(Request $request)
    {
        $name = $request->name;

        return redirect()->route('thankyou',['name' => $name]);
    }
    function thankyou($name)
    {
        return view('thankyou')->with(compact('name'));
    }
}
