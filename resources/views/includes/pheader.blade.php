@php
$prefix = str_replace('/','',$request->route()->getPrefix());
$uriArr = explode('/',$request->route()->uri);
$route = Route::currentRouteName();
$rArr = explode('-',$route);
$str = '';
foreach($rArr as $k => $v){
  $str .= ' '.ucfirst($v);
}
@endphp
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-1 text-white animated slideInDown">
      {{ $str}}
    </h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb text-uppercase mb-0">
        <li class="breadcrumb-item"><a class="text-white" href="{{URL::to('/')}}">Home</a></li>
        @if(!empty($prefix))
        <li class="breadcrumb-item"><a class="text-white" href="{{route($prefix)}}">{{$prefix}}</a></li>
        @endif
        <li class="breadcrumb-item"><a class="text-white" href="{{route($route)}}">{{$str}}</a></li>

      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->