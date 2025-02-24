<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to(['wagnerinfo@gmail.com','wagnerinfo@hotmail.com'])->send(new ContactMail($data));

        return response()->json(['message' => 'E-mail enviado com sucesso!']);
    }
}
