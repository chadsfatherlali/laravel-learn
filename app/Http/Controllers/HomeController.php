<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $names = [
            'Diego',
            'Johanna',
            'Rosario',
            'Anní'
        ];

        return view('welcome', compact('names'));
    }
}
