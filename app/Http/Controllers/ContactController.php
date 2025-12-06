<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request){

        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you can handle the contact form submission,
        // such as sending an email or storing the message in the database.

        // return back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous contacterons bientôt.');

        try {
            Mail::to(config('mail.from.admin_mail'))->send(new ContactMail($request) , $request);
            Mail::to(config("mail.from.address"))->send(new ContactMail($request) , $request);
            return back()->with('success_contact' , "Merci pour nous avoir contacter! Nous vous répondrons dans un délai assez raisonnable.");
        } catch (\Throwable $th) {
            // dd($th);
            return back()->with('error_contact' , "Nous n'arrivons pas à envoyer votre demande. Veuillez rééssayer plustard.");
        }

    }
}
