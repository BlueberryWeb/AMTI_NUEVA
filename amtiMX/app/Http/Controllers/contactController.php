<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function store(Request $request)
    {
        $message = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
         Mail::to('amti.internacional@gmail.com')->queue(new contactMail($message));
        Mail::to('ventas@amti.mx')->queue(new contactMail($message));
        Mail::to('fidelberry1@gmail.com')->queue(new contactMail($message));
        Mail::to('pruebascorreosbb@gmail.com')->queue(new contactMail($message));
        return redirect()->back();
    }
}
