<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;


class CustomerController extends Controller
{
    
	public function CustomerAdd(){
		$customers = Customer::orderBy('id','ASC')->get();
		return view('admin.Backend.Brand.customer' ,compact('customers'));
	}
	
	public function CustomerManage(){
		$customers = Customer::orderBy('id','ASC')->get();
		return view('admin.Backend.Brand.customer_manage' ,compact('customers'));
	}

	public function CustomerView($id){
		$customers = Customer::orderBy('id','ASC')->get();
		$customer = Customer::findOrFail($id);
		return view('admin.Backend.Brand.customer_view' ,compact('customer','customers'));
	}


     public function CustomerStore(Request $request){
	
		// $validator = Validator::make($request->all(), [
		// 	'customer_name' => 'required',
		// 	'phone' => 'nullable|unique:customers',
		// ], [
		// 	'phone.unique' => 'The phone number already exists.',
		// ]);
	
		// if ($validator->fails()) {
		// 	return redirect()->back()->withErrors($validator)->withInput();
		// }

        Customer::insert([
		'company_name' => $request->company_name,
        'user_name' => $request->user_name,
        'email' => $request->email,
        'office_phone' => $request->office_phone,
        'personal_phone' => $request->personal_phone,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip,
        'country' => $request->country,
		
    	]);

	    $notification = array(
			'message' => 'Customer Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method

	public function CustomerEdit($id){
		$customers = Customer::orderBy('id','ASC')->get();
		$customer = Customer::findOrFail($id);
			return view('admin.Backend.Brand.customer_edit',compact('customer','customers'));
		}
	
	
	public function CustomerUpdate(Request $request){
			
		$id = $request->id;
	
		Customer::findOrFail($id)->update([
			'company_name' => $request->company_name,
        	'user_name' => $request->user_name,
        	'email' => $request->email,
        	'office_phone' => $request->office_phone,
        	'personal_phone' => $request->personal_phone,
        	'address' => $request->address,
        	'city' => $request->city,
        	'state' => $request->state,
        	'zip' => $request->zip,
        	'country' => $request->country,
			'updated_at' => Carbon::now(), 
	
			]);
	
			$notification = array(
				'message' => 'Customer Updated Successfully',
				'alert-type' => 'info'
			);
	
			return redirect()->route('customer.manage')->with($notification);
	
			 // end else 
			
		} // end method 
	
	
		public function CustomerDelete($id){
			$customer = Customer::findOrFail($id);
			
			Customer::findOrFail($id)->delete();
	
			$notification = array(
				'message' => 'Customer Delectd Successfully',
				'alert-type' => 'info'
			);
	
			return redirect()->back()->with($notification);
	
		} // end method

		// public function DealerView(){
		// 	$dealers = Dealer::latest()->get();
		// 	return view('admin.Backend.Dealer.dealer' ,compact('dealers'));
		// }
	
}
