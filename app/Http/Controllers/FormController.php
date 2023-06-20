<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userLog;

class FormController extends Controller
{
    public function processForm(Request $request)
    {
        $data = $request->only(['username', 'email', 'password']);
        userLog::create($data);

        return view('/home-page');
    }
}
