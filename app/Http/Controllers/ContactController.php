<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller {

   // Create Contact Form
   public function index() {
    return view('IEMS\Linus.SITE.contactus');
  }
  // Store Contact Form data
  public function store(Request $request) {
      // Form validation
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject'=>'required',
        'message' => 'required'
     ]);
    //  Store data in database
    Contact::create($request->all());

      return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
  }

}
