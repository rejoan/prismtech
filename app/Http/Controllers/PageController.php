<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

  public function webDesign(Request $request) {
    $meta = ['keywords' => 'web, design, bootstrap, css, html, pixel, ux, ui', 'description' => 'We create stunning, responsive websites that reflect your brand’s identity and drive business growth', 'title' => 'Our Projects on Web Design | PrismTecHub'];
    return view('single.webdesign', ['request' => $request, 'meta' => $meta]);
  }

  public function webDev(Request $request) {
    $meta = ['keywords' => 'web, application, development, api, custom, php, software', 'description' => 'We bring your ideas to life with custom web applications designed to fit your business needs perfectly', 'title' => 'Our Projects on Web Development | PrismTecHub'];
    return view('single.webdev', ['request' => $request, 'meta' => $meta]);
  }

  public function chatGpt(Request $request) {
    $meta = ['keywords' => 'web, chatGPT, development, service, chatbot, openAI, assistant, api', 'description' => 'We specialize in leveraging the power of AI to create advanced conversational solutions', 'title' => 'Our Projects on chatGPT Development | PrismTecHub'];
    return view('single.chatgpt', ['request' => $request, 'meta' => $meta]);
  }

  public function WPDev(Request $request) {
    $meta = ['keywords' => 'web, design, development, wordpress, service, plugin', 'description' => 'We are experts in crafting bespoke WordPress websites that elevate your online presence', 'title' => 'Our Projects on WordPress Development | PrismTecHub'];
    return view('single.wpdev', ['request' => $request, 'meta' => $meta]);
  }

  public function desktopDev(Request $request) {
    $meta = ['keywords' => 'desktop, application, development', 'description' => 'We excel in creating high-performance desktop applications tailored to meet your business requirements', 'title' => 'Our Projects on Desktop Development | PrismTecHub'];
    return view('single.desktop', ['request' => $request, 'meta' => $meta]);
  }

  public function laravelDev(Request $request) {
    $meta = ['keywords' => 'web, laravel, development, PHP, framework', 'description' => 'We excel in developing powerful, scalable web applications using the Laravel framework', 'title' => 'Our Projects on Laravel Framework | PrismTecHub'];
    return view('single.laravel', ['request' => $request, 'meta' => $meta]);
  }

  public function terms(Request $request) {
    $meta = ['keywords' => 'web, design, development,bngladesh,comapnay,terms', 'description' => 'Terms and Conditions for PrismTecHub', 'title' => 'Our Terms | PrismTecHub'];
    return view('single.term', ['request' => $request, 'meta' => $meta]);
  }

  public function eCommerce(Request $request) {
    $meta = ['keywords' => 'e-commerce, development,company', 'description' => 'E-Commerce development projects', 'title' => 'Our Projects on E-Commerce | PrismTecHub'];
    return view('single.e-commerce', ['request' => $request, 'meta' => $meta]);
  }

  public function businessAutomation(Request $request) {
    $meta = ['keywords' => 'business, automation, development,company', 'description' => 'Business Automation development', 'title' => 'Our Projects on Business Automation | PrismTecHub'];
    return view('single.business-automation', ['request' => $request, 'meta' => $meta]);
  }

  public function cloudServices(Request $request) {
    $meta = ['keywords' => 'cloud,services, development,company', 'description' => 'Cloud Services development', 'title' => 'Our Projects on Cloud Services | PrismTecHub'];
    return view('single.cloud-service', ['request' => $request, 'meta' => $meta]);
  }

  public function dataAnalytics(Request $request) {
    $meta = ['keywords' => 'data, analytics, development,company', 'description' => 'Data Analytics development', 'title' => 'Our Projects on Data Analytics | PrismTecHub'];
    return view('single.data-analytics', ['request' => $request, 'meta' => $meta]);
  }

  public function dataMining(Request $request) {
    $meta = ['keywords' => 'data,mining, development,company', 'description' => 'Data Mining development', 'title' => 'Our Projects on Data Mining | PrismTecHub'];
    return view('single.data-mining', ['request' => $request, 'meta' => $meta]);
  }

  public function healthcareSolutions(Request $request) {
    $meta = ['keywords' => 'healthcare, solutions, development,company', 'description' => 'Healthcare Solutions development', 'title' => 'Our Projects on Healthcare Solutions | PrismTecHub'];
    return view('single.healthcare-solutions', ['request' => $request, 'meta' => $meta]);
  }

  public function softwareSecurity(Request $request) {
    $meta = ['keywords' => 'software, security, development,company', 'description' => 'Software Security development', 'title' => 'Our Projects on Software Security | PrismTecHub'];
    return view('single.software-security', ['request' => $request, 'meta' => $meta]);
  }

  public function dataSecurity(Request $request) {
    $meta = ['keywords' => 'data, security, development, company', 'description' => 'Data Security development', 'title' => 'Our Projects on Data Security | PrismTecHub'];
    return view('single.data-security', ['request' => $request, 'meta' => $meta]);
  }

  public function customDevelopment(Request $request) {
    $meta = ['keywords' => 'custom, web, development, company', 'description' => 'Custom Web Development', 'title' => 'Our Projects on Custom Development | PrismTecHub'];
    return view('single.custom-development', ['request' => $request, 'meta' => $meta]);
  }

  public function aiSolutions(Request $request) {
    $meta = ['keywords' => 'ai, solutions, development, company', 'description' => 'AI chatgpt Development', 'title' => 'Our Projects on openAI | PrismTecHub'];
    return view('single.openai-development', ['request' => $request, 'meta' => $meta]);
  }

  public function softwareMaintenance(Request $request) {
    $meta = ['keywords' => 'software, maintenance, development, company', 'description' => 'Software Maintenance & Support Company', 'title' => 'Our Projects on Software Maintenance | PrismTecHub'];
    return view('single.software-maintenance', ['request' => $request, 'meta' => $meta]);
  }
  
   public function devOps(Request $request) {
    $meta = ['keywords' => 'dev, ops, development, company', 'description' => 'DevOps & Support Company', 'title' => 'Our Projects on DevOps | PrismTecHub'];
    return view('single.devops', ['request' => $request, 'meta' => $meta]);
  }
  
   public function mobileApp(Request $request) {
    $meta = ['keywords' => 'mobile, app, development, company', 'description' => 'Mobile App Development Company', 'title' => 'Our Projects on Mobile Development | PrismTecHub'];
    return view('single.mobile-app', ['request' => $request, 'meta' => $meta]);
  }
  
  
  
}
