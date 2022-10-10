@extends('admin_layouts.app')
@section('title','Admin User View')
    
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
                    
                   <!--Account information-->
                    @if($account_info!=null)
                        <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="mt-1">
                                <div class="text-center">
                                    <h2>Account Information</h2>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <label for="">Account Type:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="radio" {{ ($account_info->account_type=='Savings')?'checked':'disabled' }} >&nbsp;Savings&nbsp;&nbsp;&nbsp;
                                            <input type="radio" {{ ($account_info->account_type=='Checking')?'checked':'disabled' }}>&nbsp;Checking&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Bank Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <p> {{ $account_info->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Bank Routing Number:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$account_info->bank_routing_number}}</p>
                                        </div>
                                    </div>
                                    
                                    
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Bank Account Number:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$account_info->bank_account_number}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                 <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <p> {{ $account_info->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">City:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$account_info->city}}</p>
                                        </div>
                                    </div>
                                    
                                    
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">State:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$account_info->state}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                  <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <p> {{ $account_info->country}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Zip code:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$account_info->zip_code}}</p>
                                        </div>
                                    </div>
                                    
                                    
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                                <label for="">Phone:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$account_info->phone}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <label for="">Address:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                                <p> {{ $account_info->complete_address}}</p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    @endif
                    <!--Dispatch Information-->
                    @if($dispatch_info!=null)
                      <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="mt-1">
                                <div class="text-center">
                                    <h2>Company Dispatch Information</h2>
                                </div>
                            </div>
                            <div class="mt-3">
                              
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company Name:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                       <div class="mt-1">
                                                <p> {{ $dispatch_info->company_name}}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company Contact</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <p> {{ $dispatch_info->company_contact}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company City:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$dispatch_info->city}}</p>
                                        </div>
                                    </div>
                                    
                                    
                                     
                                </div>
                                
                                
                                
                                 <div class="row mt-1">
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company State:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$dispatch_info->state}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company Country</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <p> {{ $dispatch_info->country}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company Zip Code:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$dispatch_info->city}}</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                
                                  <div class="row mt-1">
                                       <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company Contact:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$dispatch_info->primary_contact}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Company Other Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <p> {{ $dispatch_info->other_phone}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Fax:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                        <p>{{$dispatch_info->fax}}</p>
                                        </div>
                                    </div>
                                    
                                    
                                   
                                </div>
                                
                                
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <label for="">Address Line 1:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                                <p> {{ $dispatch_info->address_line_1}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <label for="">Address Line 2:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                                <p> {{ $dispatch_info->address_line_2}}</p>
                                        </div>
                                    </div>
                                </div>
                                     <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                                <label for="">Address Line 3:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                                <p> {{ $dispatch_info->address_line_3}}</p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                     @endif
                    
                    </div>
            </div>
        </div>
    </div>
</div>

        </div>
      </div>
    </div>
    

@endsection