<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends FontendController
{
    public function getContact(Request $request)
    {
    	$contacts = Contact::paginate(10);
    	return view('contact',compact('contacts'));
    }

    public function saveContact(Request $request)
    {
    	dd($request->all());
    }
}
