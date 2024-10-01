<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Logique d'envoi d'email (tu peux personnaliser cette partie selon tes besoins)
        Mail::raw($request->message, function ($message) use ($request) {
            $message->from($request->email, $request->name)
                ->to('ton_email@domaine.com')
                ->subject('Nouveau message de contact');
        });

        // Rediriger après envoi
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
