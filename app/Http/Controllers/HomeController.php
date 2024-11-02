<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller {
  public function index() {
    $meta = ['keywords' => 'web, design, development, bangladesh, service, company, PHP, laravel, wordpress', 'description' => 'Web Design & Development company in Bangladesh','title' => 'PrismTecHub - Technical Solution of Idea'];
    return view('index', ['meta' => $meta]);
  }

  public function about(Request $request) {
    $meta = ['keywords' => 'about, us,', 'description' => 'About us page. What we do','title' => 'About Us | PrismTecHub'];
    return view('pages.about', ['request' => $request,'meta' => $meta]);
  }

  public function service(Request $request) {
    $meta = ['keywords' => 'web, design, development, service, company', 'description' => 'We provide web design & development service across the world','title' => 'Our Services | PrismTecHub'];
    return view('pages.service', ['request' => $request,'meta' => $meta]);
  }

  public function projects(Request $request) {
    $meta = ['keywords' => 'web, design, development, portfolio, projects', 'description' => 'Our list of recent projects we completed successfully','title' => 'Our Projects & Portfolios | PrismTecHub'];
    return view('pages.projects', ['request' => $request,'meta' => $meta]);
  }

  public function contact(Request $request) {
    $meta = ['keywords' => 'Web, Design, Development,Bangladesh,Service,', 'description' => 'Web Design & Development company in Bangladesh','title' => 'Contact Us | PrismTecHub'];
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
    return view('pages.contact', ['request' => $request,'meta' => $meta]);
  }

  public function team(Request $request) {
    $meta = ['keywords' => 'web, design, development, bangladesh, service', 'description' => 'Our team members','title' => 'Our Team | PrismTecHub'];
    return view('pages.team', ['request' => $request,'meta' => $meta]);
  }

  public function testimonial(Request $request) {
    $meta = ['keywords' => 'client, feedback, , web, development, testimonial, service', 'description' => 'Thousands Of Customers Who Trust Us And Our Services','title' => 'Client testimonial | PrismTecHub'];
    return view('pages.testimonial', ['request' => $request,'meta' => $meta]);
  }
}
