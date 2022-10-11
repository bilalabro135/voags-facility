@extends('admin_layouts.app')
@section('title','Admin Purchase Order')
    
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
                            <div class="mt-1">
                                <div class="text-center">
                                    <h2>Job Application</h2>
                                </div>
                            </div>
                            
                            
                              <div class="mt-3">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th width="50%">Name:</th>
                                            <td class="text-capitalize">{{$user->username}}</td> 
                                        </tr>
                                         <tr>
                                            <th width="50%">Email:</th>
                                            <td class="text-capitalize">{{$user->email}}</td> 
                                        </tr> 
                                        <tr>
                                            <th width="50%">Job name:</th>
                                            <td class="text-capitalize">{{$job->title}}</td> 
                                        </tr> 
                                        <tr>
                                            <th width="50%">Hourly rate:</th>
                                            <td class="text-capitalize">{{$job->hourly_rate}}</td> 
                                        </tr> 
                                        <tr>
                                            <th width="50%">Status:</th>
                                            @if($job_apply->status == 'pending')
                                                <td class="text-capitalize"><span class="bg-warning rounded-pill pl-1 pr-1">{{$job_apply->status}}</span></td> 
                                            @elseif($job_apply->status == 'approved')
                                                <td class="text-capitalize"><span class="bg-success text-light rounded-pill pl-1 pr-1">{{$job_apply->status}}</span></td>
                                            @else
                                                <td class="text-capitalize"><span class="bg-danger text-light rounded-pill pl-1 pr-1">{{$job_apply->status}}</span></td>
                                            @endif
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3 mb-5">
                                <div class="text-center">
                                    <h3>Proposed Resolution</h3>
                                </div>
                                <div class="mt-2 mb-5">
                                    <p>{{$job_apply->resulation}}</p>
                                </div>
                            </div>
                        </div>
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