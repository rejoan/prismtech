<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

  public function index() {
    return view('index');
  }

  public function about() {
    return view('pages.about');
  }

  public function service() {
    return view('pages.service');
  }

  public function projects() {
    return view('pages.projects');
  }

  public function contact() {
    return view('pages.contact');
  }

  public function team() {
    return view('pages.team');
  }

  public function testimonial() {
    return view('pages.testimonial');
  }
}
