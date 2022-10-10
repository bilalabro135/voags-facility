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
                                    <h2>Purchase Order Request Form</h2>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Date:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                           <p>{{$order->date}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Requested By:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                           <p>{{$order->requested_by}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Account # / Name:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                         <p>{{$order->account}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">PurchaseFunds Apprvd:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                          <p>{{$order->purchase_approved}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        <div class="mt-1">
                                            <label for="">Will this chargeneed to be transferred to anothor account in the fture?</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="radio" name="transferred_account_future" {{ ($order->transferred_account_future=='yes')?'checked':'disabled' }} >&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="transferred_account_future" {{ ($order->transferred_account_future=='no')?'checked':'disabled' }}>&nbsp;No&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Vendor:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <p>{{$order->vendor}} </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Quote No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                           <p>{{$order->quote_no}} </p>
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
                                           <p>{{$order->address}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Office No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                           <p>{{$order->contact_person}} </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Official No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                           <p>{{$order->phone_number}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Fax No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                           <p>{{$order->fax_no}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="mt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>Description</th>
                                            <th>Stock #</th>
                                            <th>Qty.</th>
                                            <th>Unit Price</th>
                                            <th>Total Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($other_purchase as $item)
                                         
                                            <tr>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->stock}}</td>
                                                <td>{{$item->qty}}</td>
                                                <td>${{$item->unit_price}}</td>
                                                <td>${{$item->total_cost}}</td>
                                            </tr>
                                        
                                         @endforeach
                                            <tr>
                                                    <td colspan="2">Other Requirements for Purchase: Attach as Needed</td>
                                                    <td colspan="2" style="font-weight:bold">Shipping Costs</td>
                                                    <td> ${{$order->shipping_cost}} </td>
                                            </tr>
                                            <tr>
                                                    <td colspan="2" rowspan="2">
                                                        Under $5000 - No additional quote Needed<br>
                                                        $5000 - $25000 - At least Two vertical quotes Needed<br>
                                                        $25000 - $50000 - At least Two Written quotes must be attached<br>
                                                    
                                                    </td>
                                                    <td colspan="2" style="font-weight:bold">Other Charges</td>
                                                    <td> ${{$order->other_charges}} </td>
                                            </tr>
                                            <tr>
                                                    <td colspan="2" style="font-weight:bold">Total Charges</td>
                                                    <td> ${{$order->total_charges}} </td>
                                            </tr>
                                    
                                    </tbody>				
                                </table>
                            </div>
                            
                            
                         
                            
                            <!--<div class="mt-3">-->
                            <!--    <table class="table table-bordered">-->
                            <!--        <thead>-->
                                       
                            <!--        </thead>-->
                            <!--        <tbody>-->
                                        
                            <!--        <tr>-->
                            <!--                <td colspan="2">Other Requirements for Purchase: Attach as Needed</td>-->
                            <!--                <td colspan="2">Shipping Costs</td>-->
                            <!--                <td> ${{$order->shipping_cost}} </td>-->
                            <!--        </tr>-->
                            <!--        <tr>-->
                            <!--                <td colspan="2" rowspan="2">-->
                            <!--                    Under $5000 - No additional quote Needed<br>-->
                            <!--                    $5000 - $25000 - At least Two vertical quotes Needed<br>-->
                            <!--                    $25000 - $50000 - At least Two Written quotes must be attached<br>-->
                                            
                            <!--                </td>-->
                            <!--                <td colspan="2">Other Charges</td>-->
                            <!--                <td> ${{$order->other_charges}} </td>-->
                            <!--        </tr>-->
                            <!--        <tr>-->
                            <!--                <td colspan="2">Total Charges</td>-->
                            <!--                <td> ${{$order->total_charges}} </td>-->
                            <!--        </tr>-->
                                    
                            <!--        </tbody>				-->
                            <!--    </table>-->
                            <!--</div>-->
                            <div class="mt-3 mb-5">
                                <div class="text-center">
                                    <h3>CHECKLIST & INFORMATION</h3>
                                </div>
                                <div class="mt-2 mb-5">
                                    <p><b>Verity funds available</b> through Debra if Grant-funded, Tracey if State-Funded or appropriate account manager (i-e. Roger j Jan) </p>
                                    <p><ol>
                                        <li>1 - Complete Purchase Order Request Form. ALL INFORMATION IS NEEDED </li>
                                        <li>2 - if you have not purchased from the Vandor before, check with max to see if they are already on the list. if not on UFs list, forms. will need to be faxed to the company, See Max for forms to be used</li>
                                        <li>3 - Most common missing information is which account is covering the charge</li>
                                        <li>4 - Please do not submit a request to purchase without all  required information</li>
                                    </ol></p>
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