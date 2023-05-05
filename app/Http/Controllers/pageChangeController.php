<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class pageChangeController extends Controller
{

    public function contactFormData() {
        $contacts = Contact::all();
        return view('pages.contactData', ['contacts' => $contacts]);
    }

    public function contactForm(Request $request) {

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect('/contact-data');
    }
}
