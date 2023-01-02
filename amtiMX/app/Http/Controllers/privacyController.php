<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacyController extends Controller
{
    public function __invoke()
    {
        return view('privacy');
    }
}
