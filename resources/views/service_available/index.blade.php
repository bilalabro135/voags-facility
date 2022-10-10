@extends('user_layouts.app')
@section('title', 'Service Available')
@section('content')
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  
   
    <!-- fixed-top-->
@include('user_layouts.partials.navbar')
   


    <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         
       
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


  <!-- Sales stats -->
  @foreach($services as $service)
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mt-1">
                                    <h2>{{$service->name}}</h2>
                                    <b>Rate:</b><p>{{$service->rate}}</p>
                                    <b>Quantity:</b> <p>{{$service->quantity}}</p>
                                    <b>Cost:</b> <p>${{$service->cost}}</p>
                                    @php
                                    $area = \App\Models\ServiceArea::find($service->service_area_id);
                                    @endphp
                                    <b>Address:</b> <p>{{$area->address}}</p>
                                </div>
                               
                            </div>
                          <div class="col-md-4 ">
                               <h2>Description</h2>
                               <p>{{$service->description}}</p>
                          </div>
                          @if($service->image!=null)
                            <div class="col-md-4">
                                <div class="mt-1">
                                    <img src="{{asset('images').'/'.$service->image}}"  height="200" width="200">
                                </div>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
    
       <div style="margin-left:50%">
            {!! $services->links() !!}
       </div>



        </div>
      </div>
@endsection 