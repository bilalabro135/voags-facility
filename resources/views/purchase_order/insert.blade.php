@extends('admin_layouts.app')
@section('title','Admin Purchase Order')
    
@section('content')
@include('admin_layouts.partials.navbar')
 <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

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
                    
                    <form method="POST" action="{{route('save_purchase_order')}}">
                    @csrf
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
                                            <input type="date" class="form-control" name="date">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Requested By:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="requested_by">
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
                                            <input type="text" class="form-control" name="account">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">PurchaseFunds Apprvd:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="purchase_approved">
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
                                            <input type="radio" name="transferred_account_future" value="yes">&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="transferred_account_future" value="no">&nbsp;No&nbsp;&nbsp;&nbsp;
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
                                            <input type="text" class="form-control" name="vendor">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Quote No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="quote_no">
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
                                            <label for="">Office No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="contact_person">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Official No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="phone_number">
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
                                            <!-- <input type="date" class="form-control"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <label for="">Fax No:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-1">
                                            <input type="text" class="form-control" name="fax_no">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Stock:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="stock[]">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Qty:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="qty[]">
                                        </div>
                                    </div>
                                     <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Unit Price:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="unit_price[]">
                                        </div>
                                    </div>
                                       <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Total Cost:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="total_cost[]" onkeyup="fetch()" required>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mt-1">
                                            <button type="button" class="btn btn-primary" onclick="add_more()"><i class='fas fas fa-plus' ></i>
</button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mt-3">
                                    <div class="row">
                                        
                                        <div class="col-md-2">
                                            <div class="mt-1">
                                                <label for="">Description:</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-9">
                                            <div class="mt-1">
                                               <textarea class-"form-control" name="description[]" rows="5" style="width:100%"></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                  <div class="copy_div"></div>
                            </div>
                                
                            <div class="mt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <!--<tr>-->

                                        <!--    <th>Description</th>-->
                                        <!--    <th>Stock #</th>-->
                                        <!--    <th>Qty.</th>-->
                                        <!--    <th>Unit Price</th>-->
                                        <!--    <th>Total Cost</th>-->
                                        <!--</tr>-->
                                    </thead>
                                    <tbody>
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                        <!--<tr>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--    <td></td>-->
                                        <!--</tr>-->
                                    <tr>
                                            <td colspan="2">Other Requirements for Purchase: Attach as Needed</td>
                                            <td colspan="2">Shipping Costs</td>
                                            <td> <input type="text" name="shipping_cost" style="width: 100%;padding-bottom: 1.2rem;"  id="shipping_cost" onkeyup="fetch()"></td>
                                    </tr>
                                    <tr>
                                            <td colspan="2" rowspan="2">
                                                Under $5000 - No additional quote Needed<br>
                                                $5000 - $25000 - At least Two vertical quotes Needed<br>
                                                $25000 - $50000 - At least Two Written quotes must be attached<br>
                                            
                                            </td>
                                            <td colspan="2">Other Charges</td>
                                            <td> <input type="text" name="other_charges" style="width: 100%;padding-bottom: 1.2rem;"  id="other_charges" onkeyup="fetch()"></td>
                                    </tr>
                                    <tr>
                                            <td colspan="2">Total Charges</td>
                                            <td>
                                                <!--<div class="row">-->
                                                     <input type="text" name="total_charges" style="width: 100%;padding-bottom: 1.2rem;" readonly id="total_charges" >
                                                <!--</div>-->
                                               
                                                
                                            </td>
                                    </tr>
                                    
                                    </tbody>				
                                </table>
                            </div>
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
                    <div class="text-center">
                         <button class="btn btn-success  mb-4">Submit</button>
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
    
<script>

    function add_more(){
       
        var fieldHTML='';

 	    var wrapper = $('.copy_div');
 	
        var fieldHTML = `<div class="row">
                                    <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Stock:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="stock[]">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Qty:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="qty[]">
                                        </div>
                                    </div>
                                     <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Unit Price:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="unit_price[]">
                                        </div>
                                    </div>
                                       <div class="col-md-1">
                                        <div class="mt-1">
                                            <label for="">Total Cost:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mt-1">
                                            <input type="number" class="form-control" name="total_cost[]" required onkeyup="fetch()">
                                        </div>
                                    </div>
                                      <div class="mt-3">
                                    <div class="row">
                                        
                                        <div class="col-md-2">
                                            <div class="mt-1">
                                                <label for="">Description:</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-9">
                                            <div class="mt-1">
                                               <textarea class-"form-control" name="description[]" rows="5" style="width:100%"></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                    `;
                                    
					 $(wrapper).last().append(fieldHTML);
					
					 
        }
        
        
    function fetch(){
        
        var total_cost = $("input[name='total_cost[]']")
              .map(function(){return $(this).val();}).get();
              
    

        var shipping =  $("input[name='shipping_cost']").val();
        
        var other_charges =  $("input[name='other_charges']").val();
        
        var total= 0;
         
          $.each(total_cost,function(){total+=parseFloat(this) || 0;});
        
        var total_charges = parseFloat(total) + parseFloat(shipping) + parseFloat(other_charges);
            
          $('#total_charges').val(total_charges);
    }
    
     
    
</script>

@endsection