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
                            <div class="mt-1">
                                <div class="text-center">
                                    <h2>Job-Ad Form</h2>
                                </div>
                            </div>
                             <form  method="post" action="{{url('job-save')}}" enctype="multipart/form-data">
                                     @csrf
                                     
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Title:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>
                                   
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Service:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                              <select class="form-control" name="service_id">
                                                    <option selected disabled>Choose Service</option>
                                                @foreach($services as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Current Hourly Rate:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="hourly_rate">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Rate Details:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                           <select class="form-control" name="rate_details">
                                               <option selected disabled>Choose Rate Type</option>
                                               <option name="hourly">Hourly Rate</option>
                                               <option name="weekly">Weekly Rate</option>
                                               <option name="monthly">Monthly Rate</option>
                                           </select>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Type:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="type">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Link Description:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="link">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row mt-1">
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Quantity:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="quantity">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Unit Cost:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="unit_cost">
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                <div class="row mt-1">
                                      <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">NTE:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="nte">
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
                                            <input type="text" class="form-control" name="address">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-1">
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Job Requirements:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="job_requirement">
                                        </div>
                                    </div>
                                </div>
                                
                                  <div class="row mt-1">
                                     <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Scope of Work:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <textarea class="form-control" name="scrop_work" placeholder="Write Here" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <div class="text-center">
                                        <h2>Add New Field</h2>
                                        <button type="button" class="btn btn-success" onclick="add_more()"><i class='fas fa-plus'></i></button>
                                          

                                    </div>
                                </div>
                            
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Description Title:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="description_title[]">
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Description:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <textarea class="form-control" name="description[]" placeholder="Write Here" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="copy_div"></div>
                                
                              <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Images:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mt-1">
                                            <input type="file" class="form-control" name="image[]" multiple>
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

<script>
    function add_more(){
       
        var fieldHTML='';

 	    var wrapper = $('.copy_div');
 	
        var fieldHTML = ` <div class="row mt-1">
                                 <div class="col-md-2">
                                    <div class="mt-1">
                                        <label for="">Description Title:</label>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="mt-1">
                                        <input type="text" class="form-control" name="description_title[]">
                                    </div>
                                </div>
                            </div>
                                
                         <div class="row mt-1">
                             <div class="col-md-2">
                                <div class="mt-1">
                                    <label for="">Description:</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mt-1">
                                    <textarea class="form-control" name="description[]" placeholder="Write Here" rows="5"></textarea>
                                </div>
                            </div>
                        </div>`;
					 $(wrapper).last().append(fieldHTML);
					
					 
        }
</script>



@endsection