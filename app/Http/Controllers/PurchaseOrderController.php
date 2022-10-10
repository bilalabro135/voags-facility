<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseOrder;
use App\Models\OtherPurchase;
use App\Http\Controllers\Controller;

class PurchaseOrderController extends Controller
{
    //
    public function index()
    {
        
        $orders=  PurchaseOrder::paginate(10);
        return view('purchase_order.index',compact('orders'));
        
    }
    
    public function add_purchase_order()
    {
        
        return view('purchase_order.insert');
    }
    
    public function save_purchase_order(Request $request)
    {

        $total = count($request->total_cost);

        $data = array(
            
            'date'=>$request->date,
            'requested_by'=>$request->requested_by,
            'account'=>$request->account,
            'purchase_approved'=>$request->purchase_approved,
            'transferred_account_future'=>$request->transferred_account_future,
            'vendor'=>$request->vendor,
            'quote_no'=>$request->quote_no,
            'address'=>$request->address,
            'contact_person'=>$request->contact_person,
            'phone_number'=>$request->phone_number,
            'fax_no'=>$request->fax_no,
            'shipping_cost'=>$request->shipping_cost,
            'other_charges'=>$request->other_charges,
            'total_charges'=>$request->total_charges,
            
            );
            
            $purchase = PurchaseOrder::create($data);
            
            for($i=0;$i<$total;$i++){
                
                 $data1 = array(
                     
                        'purchase_id'=>$purchase->id,
                        'qty'=>$request->qty[$i],
                        'stock'=>$request->stock[$i],
                        'unit_price'=>$request->unit_price[$i],
                        'total_cost'=>$request->total_cost[$i],
                        'description'=>$request->description[$i],
                    
                    );
                    
              OtherPurchase::create($data1);
              
            }
            
        
            
       return redirect('/purchase_order')->with('success','Order Saved Successfully');
      
    }
    
    
    public function delete_purchase_order(Request $request)
    {
       $order= PurchaseOrder::find($request->id)->delete();
       
        return redirect('/purchase_order')->with('success','Order Saved Successfully');
    
    }
    
      public function show_purchase_order($id)
    {
        $order = PurchaseOrder::find($id);
        
        $other_purchase = OtherPurchase::where('purchase_id',$order->id)->get();
       
        return view('purchase_order.show',compact('order','other_purchase'));
    
    }
    
}
