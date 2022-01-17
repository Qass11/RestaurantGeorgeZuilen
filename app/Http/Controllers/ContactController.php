<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\sendContactNotification;
use App\Notifications\sendCopyContactNotification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function storeContact()
    {
        $attributes = request()->validate([
           'firstname'              => ['required', 'min:3', 'max:255'],
           'lastname'               => ['required', 'min:3', 'max:255'],
           'email'                  => ['email', 'required', 'min:3', 'max:255'],
           'phone_number'           => ['required', 'min:3', 'max:255'],
           'subject'                => ['required', 'min:3', 'max:255'],
           'text'                   => ['required', 'min:3'],
        ]);

        $email = 'admin@georgezuilen.nl';
        $contact = Contact::create($attributes);
        $contact->notify(new sendCopyContactNotification($contact));
        $contact->notify(new sendContactNotification($contact, $email));
        return redirect('/contact')->with('success', 'The completed form has been sent to the team of George Zuilen.');
    }
}
