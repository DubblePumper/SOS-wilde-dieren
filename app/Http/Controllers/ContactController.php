<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        Mail::to(config('sos.contact.recipient'))->send(new ContactMessage($request->safe()->except('website')));

        return back()->with('status', 'Bedankt voor je bericht. We nemen zo snel mogelijk contact op.');
    }
}
