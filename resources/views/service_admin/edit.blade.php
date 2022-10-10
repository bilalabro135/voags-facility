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
                                    <h2>Services Form</h2>
                                </div>
                            </div>
                             <form  method="post" action="{{route('update_services')}}" enctype="multipart/form-data">
                                     @csrf
                                       <input type="hidden" class="form-control" name="id" value="{{$service->id}}">
                                        <input type="hidden" name="image1" value="{{$service->image}}" >
                           <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Name:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="name"  value="{{$service->name}}">
                                             @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror
                                        </div>
                                    </div>
                                      <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Rate:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="rate" value="{{$service->rate }}">
                                             @error('rate')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Quantity:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="quantity" value="{{$service->quantity}}">
                                             @error('quantity')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror
                                        </div>
                                    </div>
                                      <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Cost:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="cost" value="{{$service->cost}}">
                                             @error('cost')
                                                <span class="text-danger">{{$message}}</span>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Area:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                           <select class="form-control" name="service_area_id">
                                               <option selected disabled>Choose Area</option>
                                               @foreach($areas as $area)
                                               <option value="{{$area->id}}" {{ ($area->id==$service->service_area_id)?'selected':'' }} >{{$area->address}}</option>
                                               @endforeach
                                           </select>
                                                @error('area')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                               </div>
                               
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Description:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                         <textarea class="form-control" name="description" rows="7">{{$service->description}}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                               </div>
                               
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Image:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                         <input type="file" class="form-control" name="image">
                                                @error('image')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                               </div>
                               @if($service->image!=null)
                               <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <img src="{{ asset('images/').'/'.$service->image}}" height="200" width="200">
                                           
                                        </div>
                                    </div>
                                </div>
                                @endif
                                 
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