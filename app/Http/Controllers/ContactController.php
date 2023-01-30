<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function destroy(Contact $contact) {
        $contact->delete();

        $notification = [
            'message' => 'Payment Method Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
