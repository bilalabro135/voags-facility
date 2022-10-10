@extends('admin_layouts.app')
@section('title','Admin Purchase Order')
    
@section('content')
@include('admin_layouts.partials.navbar')
 <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
        </ul>
      </div>
    </div>

    <div class="app-content content" >
      <div class="content-wrapper">
        <div class="content-header row" >
        </div>
        <div class="content-body" style=" margin-top: 100px;">


  <!-- Sales stats -->
  <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="mt-2">
                                <div class="d-flex justify-content-end">
                                   
                                     <a href="{{route('add_purchase_order')}}"> <button type="button"  class="btn btn-success">Add New Order</button></a>
                                </div>
                            </div>
                           
                            <div class="mt-3">
                                <div class="table-responsive">
                               <table id="example" class="table table-striped" style="width:100%">

                                    <thead>
                                        <tr>
                                            <th>Sr#</th>
                                            <th>Register By</th>
                                            <th>Quote No</th>
                                            <th>Date</th>
                                            <th>Phone No</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($orders as $key => $order)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$order->requested_by}}</td>
                                            <td>{{$order->quote_no}}</td>
                                            <td>{{$order->date}}</td>
                                            <td>{{$order->phone_number}}</td>
                                            <td>
                                                <a href="{{url('show-purchase_order/'.$order->id)}}"><button type="button" class="btn btn-primary"  >View</button></a>
                                                <button type="button" class="btn btn-danger" onclick="del({{$order->id}})" >Delete</button>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div style="margin-left:50%">
                                     {!! $orders->links() !!}
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
    </div>
  <!-- Modal -->
  
 
<script>

    function del(id){
            
           
            $.ajax({
                
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            
            url : "{{ route('delete_purchase_order') }}",
            data : {'_token' : "{{ csrf_token() }}" ,'id':id},
            type : 'GET',
            dataType : 'json',
            success : function(result){
                
              console.log(result);
              
            }
        });
    
    }
    
    
    
    // $(document).ready(function(){
    //     $('.edit_button').on('click',function(){
    //         var id = $(this).data('id');
    //         //alert(id);
    //         $.ajax({
    //             type:'GET',
    //             url:'/jobs/'+id+'/edit',
               
    //             success:function(data){
    //                 $('#exampleModal03').modal('show');
    //                 var url='/jobs/'+id;
    //                 $('#update_job').attr('action',url);
    //               // console.log(data.title);
    //                 $('#title1').val(data.title);
    //               // $('#job_type').text(data.job_type);
    //                 $('#job_type1').val(data.job_type);
    //                 $('#job_location1').val(data.job_location);
    //                 $('#description1').val(data.description);
    //                 $('#service_id1').val(data.service_id);
    //                 //alert($('#description').val());
    //             }
    //         });
    //     });
    // });
    
   
   
</script>
@endsection