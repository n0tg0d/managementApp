<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Auth;
use Illuminate\Support\Carbon;

class SupplierController extends Controller
{
    //get Supplier data Method
    public function SupplierAll() {
        //$suppliers = Supplier::all();
        $suppliers = Supplier::latest()->get();
        return view('backend.supplier.supplier_all', compact('suppliers'));

    }//End Method

   //Add Supplier Vew Method
   public function SupplierAdd() {
        return view('backend.supplier.supplier_add');

    }//End Method

    //Add Supplier Data  Method
    public function SupplierStore(Request $request) {
        Supplier::insert([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'adress' => $request->adress,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_by' => Auth::user()->id,
        ]);

        //Show notification
        $notification = array(
            'message' => 'Supplier Data inserted Successfully',
            'alert-type' => 'success'
        
        );

        return redirect()->route('supplier.all')->with($notification);

    }//End Method

    //Supplier Edit page Method
    public function SupplierEdit($id) {
        $supplier = Supplier::findOrFail($id);
        return view('backend.supplier.supplier_edit', compact('supplier'));

    }//End Method

    //Supplier Update Method
    public function SupplierUpdate(Request $request) {

        $supplier_id = $request->id;

        Supplier::findOrFail($supplier_id)->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'adress' => $request->adress,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
            
        ]);

         //Show notification
         $notification = array(
            'message' => 'Supplier Updated Successfully',
            'alert-type' => 'success'
        
        );

        return redirect()->route('supplier.all')->with($notification);
    }//End Method

    //Supplier Delete Method
    public function SupplierDelete($id) {

        Supplier::findOrFail($id)->delete();

        //Show notification
        $notification = array(
        'message' => 'Supplier Deleted Successfully',
        'alert-type' => 'success'
    
        );
        return redirect()->back()->with($notification);

    }//End Method

}
