<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

  public function index() {
    return view('index');
  }

  public function about(Request $request) {
    return view('pages.about',['request' => $request]);
  }

  public function service(Request $request) {
    return view('pages.service',['request' => $request]);
  }

  public function projects(Request $request) {
    return view('pages.projects',['request' => $request]);
  }

  public function contact(Request $request) {
    return view('pages.contact',['request' => $request]);
  }

  public function team(Request $request) {
    return view('pages.team',['request' => $request]);
  }

  public function testimonial(Request $request) {
    return view('pages.testimonial',['request' => $request]);
  }
}
