@extends('user_layouts.app')
@section('title', 'New Opportunity')
@section('content')
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  
   
    <!-- fixed-top-->
@include('user_layouts.partials.navbar')
   



    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

         <div class="row mt-3">
    <div class="col-12">
        @if($errors->any())
            <div class="text-center alert alert-danger">{{ implode('', $errors->all(':message')) }}</div>
        @endif
        <div class="card">
            <div class="card-content">
                
                
              <div class="row">
                        <div class="col-md-12">
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                     <div class="row">
                                                          <div class="col-md-12" style="font-weight: bold;">   Accept Current Hourly Rate</div>
                                                     </div>
                                                     <div class="row">
                                                          
                                                          <div class="col-md-12" style="font-size: 57px;font-weight: bold;color: green;">  {{ $job->unit_cost }} </div>
                                                         
                                                     </div>
                                                 </div>
                                             </div>
                                             
                                            <div class="col-md-4">
                                                 <div class="text-center">
                                                     <div class="row">
                                                         
                                                     </div>
                                                     <div class="row">
                                                          
                                                          <div class="col-md-12" style="font-size: 57px;font-weight: bold;">  OR </div>
                                                         
                                                     </div>
                                                 </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <div class="row">
                                                          <div class="col-md-12" style="font-weight: bold;"> Set Your Rate</div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                      <div class="col-md-6 offset-4" >  
                                                        <input type="text" class="form-control" name="customer_rate" style="background-color:white">
                                                      </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <hr style="height:8px;border-width:0;background-color:#04590a">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                
               
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-md-8">
                                      <form action="/job_apply" method="POST">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{$job->id}}">
                                        @if($job->nte!=null)
                                           <div class="mt-2 d-flex flex-wrap">
                                            <label class="col-md-4">Not to exceed Amount (NTE):</label>
                                            <label class="col-md-6">${{$job->nte}}</label>
                                           </div>
                                       @endif
                                        @if($job->scrop_work!=null)
                                           <div class="mt-2 d-flex flex-wrap">
                                            <label class="col-md-4">Scope of Work</label>
                                            <label class="col-md-6">{{$job->scrop_work}}</label>
                                            
                                           </div>
                                         @endif
                                         @if($job->rate_details!=null)
                                       <div class="mt-2 d-flex flex-wrap">
                                        <label class="col-md-4">Rate Details:</label>
                                        <label class="col-md-6">{{$job->rate_details}}</label>
                                        
                                       </div>
                                      @endif
                                       <div class="mt-2 d-flex flex-wrap">
                                        <label class="col-md-4">Proposed Resolution:</label>
                                       <textarea name="resolution" class="col-md-6" id="" style="width: 100%;" rows="6"></textarea>
                                       </div>
                                    
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <div class="table">
                                    <table>
                                        <tr>
                                            @if($job->type!=null)
                                                <th>Type</th>
                                            @endif
                                            @if($job->link!=null)
                                                <th>Link Description</th>
                                              @endif
                                            @if($job->quantity!=null)
                                                <th>Quantity</th>
                                              @endif
                                            @if($job->unit_cost!=null && $job->unit_cost!=0)
                                                <th>Unit Cost</th>
                                              @endif
                                            @if($job->unit_cost!=null && $job->unit_cost!=0)
                                                <th>Total</th>
                                              @endif
                                           
                                        </tr>
                                        <tr>
                                             @if($job->type!=null)
                                                <td>
                                                    <div style="position: relative;padding: 0;">
                                                       <input type="text" class="form-control" value="{{$job->type}}" readonly>
                                                    </div>
                                                </td>
                                             @endif
                                            @if($job->link!=null)
                                                <td>
                                                    <input type="text" class="form-control" value="{{$job->link}}" readonly>
                                                </td>
                                             @endif
                                            @if($job->quantity!=null)
                                                <td>
                                                    <input type="text" class="form-control"  value="{{$job->quantity}}" readonly>
                                                </td>
                                             @endif
                                            @if($job->unit_cost!=null && $job->unit_cost!=0)
                                                <td>
                                                    <input type="text" class="form-control" value="${{$job->unit_cost}}" readonly>
                                                </td>
                                             @endif
                                            @if($job->unit_cost!=null && $job->unit_cost!=0)
                                                <td>
                                                    <input type="text" class="form-control" name="total"  value="${{$job->unit_cost * $job->quantity }}" readonly>
                                                </td>
                                             @endif
                                           
                                        </tr>
                                       
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                         @if($job->unit_cost!=null && $job->unit_cost!=0)
                                            <td>Total:</td>
                                            <td >${{$total}}</td>
                                        @endif
                                        </tr>

                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p>This rate is for 1 regular technicion and 0 helper technicians. Any additional technicians must be approved.</p>
                    </div>
                    <div class="mt-1">
                        <input type="checkbox" name="agree" value="yes"> <label>I agree that above pricing is final, and any work of expenditure beyond the amount shown is not authorized.</label>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @if($job->address!=null)
                                <div class="mt-2">
                                    <label style="font-weight: bold;">Address:</label><br>
                                    <p>{{$job->address}}
                                </div>
                            @endif
                            @if($job->job_requirement!=null)
                                <div class="mt-2">
                                    <label style="font-weight: bold;">Job Requirements:</label><br>
                                    <input type="checkbox" name="requirements" value="yes"> <label>{{$job->job_requirement}}</label>  
                                </div>
                                @endif
                                @foreach($job_disp  as $item)
                            
                                <div class="mt-2">
                                    <label style="font-weight: bold;">{{$item->title}}:</label><br>
                                    <p>{{$item->description}}</p>
                                    <div class="mt-1">
                                        <input type="checkbox" name="understand" value="yes"> <label>I understand the above recommendations</label>
                                    </div>
                                    
                                @endforeach
                                @if($job->$job_imgs!=null)
                                <div class="mt-2">
                                    <label style="font-weight: bold;">Photos</label><br>
                                       @foreach($job_imgs  as $item)
                                     <img src="{{asset('images')}}/{{$item->image}}" width="200px" height="200px" alt="">&nbsp&nbsp
                                       @endforeach
                                </div>
                                @endif
                                <div class="mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Apply</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal01" data-id="{{$job->id}}" class="btn btn-danger jobBtn">Decline</button>
                                </div>
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer> -->
  <div class="modal fade" id="exampleModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Do You Really Want to Decline?</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/job_decline')}}" method="POST">
                      @csrf
                      <input type="hidden" name="job_id" id="job_id">
                      <div class="form-group row">
                        <div class="mt-1 d-flex justify-content-center">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>&nbsp;&nbsp;
                          <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                      </div>
                      </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
        var quantity = $('#quantity').val();
        var cost     = $('#cost').val();
        var total    = quantity*cost;
        $('#total').val(total);
        $('#final_total').text('$'+total);

        $('.jobBtn').click(function(){
           var id = $(this).attr('data-id');
               $('#job_id').val(id);
           
        });
    });
  
  </script>

@endsection