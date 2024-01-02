<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Product;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class ProjectController extends Controller
{
    public function AddProject(){

    	$categories = Category::latest()->get();
		$assignedby = Admin::latest()->get();
		$assignto = Employee::latest()->get();
		// $brands = Brand::latest()->get();
		return view('admin.Backend.Project.project_add', compact('categories','assignedby','assignto'));   	
    }  // end method

    public function StoreProject(Request $request){

		// $image = $request->file('product_img');
    	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

    	// Image::make($image)->resize(200,200)->save('upload/products/'.$name_gen);
    	// $save_url = 'upload/products/'.$name_gen;

        Category::insertGetId([
      	
		'project_name' => $request->project_name,
		'description' => $request->description,
		'comment' => $request->comment,
		'assign_date' => $request->assign_date,
		'completion_date' => $request->completion_date,
		
		'assigned_by' => $request->assigned_by,
		'assign_to' => $request->assign_to,

      	'hyperlinks' => $request->hyperlinks,
      	'priority' => $request->priority,
		// 'product_img' => $save_url,

      	'created_at' => Carbon::now(),   

      ]);


       $notification = array(
			'message' => 'Project Inserted Successfully',
			'alert-type' => 'success'
		);

		// return redirect()->route('manage-product')->with($notification);
		return redirect()->back()->with($notification);

	} // end method

    public function ManageProject(){

		$products = Category::latest()->get();
		return view('admin.Backend.Project.project_manage',compact('products'));
	}  // end method

    public function AddTask(){
		$categories = Category::latest()->get();
		$assignedby = Admin::latest()->get();
		$assignto = Employee::latest()->get();
		// $brands = Brand::latest()->get();
		return view('admin.Backend.Project.project_task_add', compact('categories','assignedby','assignto'));
	}  // end method


    public function StoreProjectTask(Request $request){

		// $image = $request->file('product_img');
    	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

    	// Image::make($image)->resize(200,200)->save('upload/products/'.$name_gen);
    	// $save_url = 'upload/products/'.$name_gen;

      $product_id = Product::insertGetId([
      	
		'title' => $request->title,
		'description' => $request->description,
		'comment' => $request->comment,
		'assign_date' => $request->assign_date,
		'completion_date' => $request->completion_date,
		
		'assigned_by' => $request->assigned_by,
		'assign_to' => $request->assign_to,
		'project_list' => $request->project_list,

		'sub_task' => $request->sub_task,
      	'bug' => $request->bug,
      	'issue' => $request->issue,
      	'hyperlinks' => $request->hyperlinks,
      	'priority' => $request->priority,
		// 'product_img' => $save_url,

      	'created_at' => Carbon::now(),   

      ]);


       $notification = array(
			'message' => 'Project Task Inserted Successfully',
			'alert-type' => 'success'
		);

		// return redirect()->route('manage-product')->with($notification);
		return redirect()->back()->with($notification);

	} // end method

    public function ManageTask(){

		$products = Product::latest()->get();
		return view('admin.Backend.Project.project_task_view',compact('products'));
	}  // end method

}