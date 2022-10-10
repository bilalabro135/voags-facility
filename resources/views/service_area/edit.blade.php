@extends('admin_layouts.app')
@section('title','Admin Job Add')
    
@section('content')
@include('admin_layouts.partials.navbar')
 <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    

    <div class="app-content content" style="margin-top: 50px;">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


  <!-- Sales stats -->
  <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                      
                                        <div class="col-md-8 mx-auto">
                                             @if(session()->has('status'))
                    
                                                <div class="alert alert-{{session('btn')}} alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>    
                                                    <strong>{{session('status')}}</strong>
                                                </div>
                                             @endif
                            <div class="mt-1">
                                <div class="text-center">
                                    <h2>Services Area Form</h2>
                                </div>
                            </div>
                             <form  method="get" action="{{url('service_areas').'/'.$service_area->id}}/edit" enctype="multipart/form-data">
                                     @csrf
                                       <input type="hidden" class="form-control" name="id" value="{{$service_area->id}}">
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Address:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="address" value="{{$service_area->address}}">
                                             @error('address')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror
                                        </div>
                                    </div>
                                   
                                  
                                  
                                </div>
                                 <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Distance:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="distance" value="{{$service_area->distance}}">
                                                @error('distance')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                   
                                  
                                  
                                </div>
                              
                                
                                 
                                <div class="text-center mt-3">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                    
                                </div>
                        </div>
                        
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
      </div>
    </div>





@endsection