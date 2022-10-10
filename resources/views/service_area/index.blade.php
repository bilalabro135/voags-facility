@extends('admin_layouts.app')
@section('title','Admin Service Area')
    
@section('content')
@include('admin_layouts.partials.navbar')
 <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">
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
  <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                                          
                                             
                            <div class="mt-2">
                                  @if(session()->has('status'))
                    
                                                <div class="alert alert-{{session('btn')}} alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>    
                                                    <strong>{{session('status')}}</strong>
                                                </div>
                                                
                                 @endif
                                <div class="d-flex justify-content-end">
                                    
                                   <a href="{{url('service_areas/create')}}"><button type="button" class="btn btn-primary">Add New Service Area</button></a>  
                                     
                                </div>
                            </div>
                           
                            <div class="mt-3">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Address</th>
                                            <th>Distance</th>
                                            <th>Services</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($service_areas as $service_area)
                                        <tr>
                                        
                                            <td>{{$service_area->address}}</td>
                                            <td>{{$service_area->distance}}</td>
                                            <td>{{$service_area->services()->count()??''}}</td>
                                            <td>{{ date('m-d-Y',strtotime($service_area->created_at)) }}</td>
                                            <td>{{ date('m-d-Y',strtotime($service_area->updated_at)) }}</td>
                                           
                                            <td class="d-flex">
                                               <a href="{{url('service_areas').'/'.$service_area->id}}"> <button type="button" class="btn btn-primary mr-2">Edit</button></a>
                                                <form action="/service_areas/{{$service_area->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
  
  
 
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        alert();-->
<!--        $('.edit_button').on('click',function(){-->
<!--            var id = $(this).data('id');-->
            <!--alert(id);-->
<!--            $.ajax({-->
<!--                type:'GET',-->
<!--                url:'/service_areas/'+id+'/edit',-->
               
<!--                success:function(data){-->
<!--                    $('#exampleModal03').modal('show');-->
<!--                    var url='/service_areas/'+id;-->
<!--                    $('#update_service_area').attr('action',url);-->
                    <!-- // console.log(data.title);-->
                   
<!--                    $('#address1').val(data.address);-->
<!--                    $('#distance1').val(data.distance);-->
                      <!--//alert($('#description').val());-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->
<!--</script>-->
 

@endsection