<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\message;

class ShowController extends Controller
{
    public function show()
    {
        $data=Message::orderByDesc('id')->get();
        return view('home',compact('data')); 
    }
}
