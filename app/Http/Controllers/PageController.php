<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

  public function webDesign(Request $request) {
    $meta = ['keywords' => 'web, design, bootstrap, css, html, pixel, ux, ui', 'description' => 'We create stunning, responsive websites that reflect your brand’s identity and drive business growth','title' => 'Our Projects on Web Design | PrismTecHub'];
    return view('single.webdesign',['request' => $request,'meta' => $meta]);
  }

  public function webDev(Request $request) {
    $meta = ['keywords' => 'web, application, development, api, custom, php, software', 'description' => 'We bring your ideas to life with custom web applications designed to fit your business needs perfectly','title' => 'Our Projects on Web Development | PrismTecHub'];
    return view('single.webdev',['request' => $request,'meta' => $meta]);
  }

  public function chatGpt(Request $request) {
    $meta = ['keywords' => 'web, chatGPT, development, service, chatbot, openAI, assistant, api', 'description' => 'We specialize in leveraging the power of AI to create advanced conversational solutions','title' => 'Our Projects on chatGPT Development | PrismTecHub'];
    return view('single.chatgpt',['request' => $request,'meta' => $meta]);
  }
  
  public function WPDev(Request $request) {
    $meta = ['keywords' => 'web, design, development, wordpress, service, plugin', 'description' => 'We are experts in crafting bespoke WordPress websites that elevate your online presence','title' => 'Our Projects on WordPress Development | PrismTecHub'];
    return view('single.wpdev',['request' => $request,'meta' => $meta]);
  }
  public function desktopDev(Request $request) {
    $meta = ['keywords' => 'desktop, application, development', 'description' => 'We excel in creating high-performance desktop applications tailored to meet your business requirements','title' => 'Our Projects on Desktop Development | PrismTecHub'];
    return view('single.desktop',['request' => $request,'meta' => $meta]);
  }
  public function laravelDev(Request $request) {
    $meta = ['keywords' => 'web, laravel, development, PHP, framework', 'description' => 'We excel in developing powerful, scalable web applications using the Laravel framework','title' => 'Our Projects on Laravel Framework | PrismTecHub'];
    return view('single.laravel',['request' => $request,'meta' => $meta]);
  }

  public function terms(Request $request) {
    $meta = ['keywords' => 'web, design, development,bngladesh,comapnay,terms', 'description' => 'Terms and Conditions for PrismTecHub','title' => 'Our Terms | PrismTecHub'];
    return view('single.term',['request' => $request,'meta' => $meta]);
  }
}
