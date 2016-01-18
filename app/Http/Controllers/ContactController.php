<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use App\Http\Requests;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:60,1');
        header("Access-Control-Allow-Origin: *");
    }

    /**
     * @param \App\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(ContactRequest $request) {
        $data = $request->all();
        \Mail::send('emails.contact', compact('data'), function($mail) use ($request) {
            $mail->to('contact@iget.com.br', 'Contato');
            $mail->subject("Contato através do site: " . $request->get('subject'));
        });

        return response()->json('asdas');
    }
}
