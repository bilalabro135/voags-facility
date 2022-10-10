<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\ServiceArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        $service_areas=ServiceArea::all();
        return view('service_admin.index',compact('services','service_areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = ServiceArea::all();
       return view('service_admin.create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validateData=$request->validate([
            'name' => 'required|string',
            'rate' => 'required|string',
            'description' => 'required|string',
            'service_area_id' => 'required|integer',
            'quantity' => 'required|integer',
            'cost' => 'required|integer',
        ]);
        if($request->file('image'))
        {
            $image=$request->file('image');
            $image_name=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$image_name);
            $validateData['image']=$image_name;
        }
        $service=Service::create($validateData);
        
        $status = 'Successfully Added';
        $btn = 'success';
        return back()->with(['status' => $status,'btn'=>$btn]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $service=Service::findOrFail($id);
         $areas = ServiceArea::all();
        return view('service_admin.edit',compact('service','areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
      
            if($request->query('image')!=null)
            {
               
                $image=$request->query('image');
                $image_name=time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'),$image_name);
                $image=$image_name;
            }
            
            else{
               
                $image= $request->image1;
            }
            
         $data=array(
            'name' => $request->query('name'),
            'rate' => $request->query('rate'),
            'description' => $request->query('description'),
            'service_area_id' =>$request->query('service_area_id'),
            'quantity' => $request->query('quantity'),
            'cost' => $request->query('cost'),
            'image' => $image,
        );
        
        $service = Service::findOrFail($id);
        
        $service->update($data);
        
        $status = 'Successfully updated';
        
        $btn = 'success';
        
        return back()->with(['status' => $status,'btn'=>$btn]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
        $service=Service::findOrFail($id);
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'rate' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'service_area_id' => 'required|integer',
        ]);
        // if(request()->hasFile('image') && request('image') != '') {
        // $imagePath = public_path('images/'.$service->image);
        // if(File::exists($imagePath)){
        //     unlink($imagePath);
        // }
        // $image=$request->file('image');
        // $image_name=time().'.'.$image->getClientOriginalExtension();
        // $image->move(public_path('images'),$image_name);
        // $validateData['image']=$image_name;
        // dd($validateData);
        // }
        $service->update($validateData);
        $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::findOrFail($id);
        $service->delete();
        $status = 'Successfully Deleted';
        
        $btn = 'danger';
        
        return back()->with(['status' => $status,'btn'=>$btn]);
    }
    
    
    public function update_service(Request $request)
    {
            
         $validateData=$request->validate([
            'name' => 'required|string',
            'rate' => 'required|string',
            'description' => 'required|string',
            'service_area_id' => 'required|integer',
            'quantity' => 'required|integer',
            'cost' => 'required|integer',
        ]);
        
        if($request->file('image')!=null)
        {
            $image=$request->file('image');
            $image_name=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$image_name);
            $validateData['image']=$image_name;
        }
         else{
               
                $image= $request->image1;
            }
        
        $service = Service::findOrFail($request->id);
        
        $service->update($validateData);
        
        $status = 'Successfully updated';
        
        $btn = 'success';
        
        return back()->with(['status' => $status,'btn'=>$btn]);
        
    }
    
}
