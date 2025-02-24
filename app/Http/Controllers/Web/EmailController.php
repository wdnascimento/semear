<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

        try {
            Mail::to('wagnerinfo@hotmail.com')->send(new ContactMail($data));

            return response()->json(['message' => 'E-mail enviado com sucesso!'], 200);
        } catch (\Exception $e) {
            // Logando o erro para depuração
            Log::error('Erro ao enviar e-mail: ' . $e->getMessage());

            return response()->json([
                'message' => 'Erro ao enviar e-mail!',
                'error' => $e->getMessage()
            ], 400);
        }
    }
}
