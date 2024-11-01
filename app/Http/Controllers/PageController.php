<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

  public function webDesign(Request $request) {
    return view('single.webdesign',['request' => $request]);
  }

  public function webDev(Request $request) {
    return view('single.webdev',['request' => $request]);
  }

  public function chatGpt(Request $request) {
    return view('single.chatgpt',['request' => $request]);
  }
  
  public function WPDev(Request $request) {
    return view('single.wpdev',['request' => $request]);
  }
  public function desktopDev(Request $request) {
    return view('single.desktop',['request' => $request]);
  }
  public function laravelDev(Request $request) {
    return view('single.laravel',['request' => $request]);
  }

  public function terms(Request $request) {
    return view('single.term',['request' => $request]);
  }
}
