<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use App\Http\Requests;
use App\Site;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:60,1');
        header("Access-Control-Allow-Origin: *");
    }

    /**
     * @param \App\Http\Requests\ContactRequest $request
     * @param \App\Site $site
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(ContactRequest $request, Site $site) {
        $data = $request->all();
        \Mail::send('emails.contact', compact('data'), function($mail) use ($request, $site) {
            $mail->from($site->sender_mail, $site->sender_name);
            $mail->to($site->recipient_mail, $site->recipient_name);
            $mail->subject("Contato através do site: " . $request->get('subject'));
        });

        return response()->json('asdas');
    }
}
