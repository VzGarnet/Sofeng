<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortController extends Controller
{
    public function processForm(Request $request)
    {
        $userInput = $request->input('userInput');
        return view('searchSorted', compact('userInput'));
    }

}
