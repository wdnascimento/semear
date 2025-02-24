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

        try{
            Mail::to('wagnerinfo@gmail.com')->send(new ContactMail($data));
        }
        catch(\Exception $e){
            return response()->json(['message' => 'Erro ao enviar e-mail!','error' => $e], 400);
        }


        return response()->json(['message' => 'E-mail enviado com sucesso!']);
    }
}
