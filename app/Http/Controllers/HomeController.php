<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller {

  public function index() {
    return view('index');
  }

  public function about(Request $request) {
    return view('pages.about', ['request' => $request]);
  }

  public function service(Request $request) {
    return view('pages.service', ['request' => $request]);
  }

  public function projects(Request $request) {
    return view('pages.projects', ['request' => $request]);
  }

  public function contact(Request $request) {
    if ($request->input('submit')) {
      $request->validate([
          'sender_name' => 'required|max:255',
          'email' => 'required|unique:contacts',
          'message' => 'required',
      ]);
      $contact = new Contact;
      $contact->name = $request->sender_name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->message = $request->message;
      $request->session()->flash('msg', 'Message send. We will respond soon.');
      $contact->save();
      return redirect('/contact');
    }
    return view('pages.contact', ['request' => $request]);
  }

  public function team(Request $request) {
    return view('pages.team', ['request' => $request]);
  }

  public function testimonial(Request $request) {
    return view('pages.testimonial', ['request' => $request]);
  }
}
