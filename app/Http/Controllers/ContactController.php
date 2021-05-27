<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMailToAdmin;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $contact = $request->contact;
            $contact = Contact::create($contact);

            Mail::to(User::find(1)->email)->send(new ContactMailToAdmin($contact));

            return back()->withSuccess('Your contact details submitted you will get notified soon');
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors($e);
        }
    }
}