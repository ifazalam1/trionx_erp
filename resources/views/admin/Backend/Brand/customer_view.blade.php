@extends('admin.aDashboard')
@section('admins')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

 {{-- TRIAL START --}}
 <div class="container-fluid">
	<div class="row mt-4">
	 

{{-- ADD CUSTOMER --}}
<div class="col-lg-12 mb-lg-0 mb-4">
  <div class="card">
    <div class="card-body p-3">
      <div class="row">

		<div class="col">

<input type="hidden" name="id" value="{{$customer->id}}">   
<div class="form-group">
<label  class="text-uppercase text-dark text-xs font-weight-bold ">Company Name</label>
<div class="controls">
<input type="text" value="{{$customer->company_name}}"  name="company_name" class="form-control" readonly > 
</div>
</div>

<div class="form-group">
<label  class="text-uppercase text-dark text-xs font-weight-bold ">User Name <span class="text-danger">*</span></label>
<div class="controls">
<input type="text" value="{{$customer->user_name}}"  name="user_name" class="form-control" readonly> 
</div>
</div>

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">Email <span class="text-danger">*</span></label>
<div class="controls">
<input type="email" value="{{$customer->email}}" name="email" class="form-control" readonly> 
</div>
</div>

<div class="form-group">
    <label class="text-uppercase text-dark text-xs font-weight-bold">Office Phone <span class="text-danger">*</span></label>
    <div class="controls">
        <input type="text" value="{{$customer->office_phone}}" name="office_phone" class="form-control" pattern="\d*" title="Please enter only numeric values" readonly>
    </div>
</div>

<div class="form-group">
    <label class="text-uppercase text-dark text-xs font-weight-bold">personal Phone <span class="text-danger">*</span></label>
    <div class="controls">
        <input type="text" value="{{$customer->personal_phone}}" name="personal_phone" class="form-control" pattern="\d*" title="Please enter only numeric values" readonly>
    </div>
</div>

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">EIN </label>
<div class="controls">
<input type="text" value="{{$customer->ein}}" name="ein" class="form-control" readonly> 
</div>
</div>

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">Business Website </label>
<div class="controls">
<input type="text" value="{{$customer->business_website}}" name="business_website" class="form-control" readonly> 
</div>
</div>

<div class="form-group">
  <h6>Business State</h6>
  <div class="controls">
    <select name="business_state" class="form-control select2" @readonly(true)>
      <option value="{{$customer->business_state}}" selected="">{{$customer->business_state}}</option>
      <option value="Alabama">Alabama</option>
      <option value="Alaska">Alaska</option>
      <option value="Arizona">Arizona</option>
      <option value="Arkansas">Arkansas</option>
      <option value="California">California</option>
      <option value="Colorado">Colorado</option>
      <option value="Connecticut">Connecticut</option>
      <option value="Delaware">Delaware</option>
      <option value="Florida">Florida</option>
      <option value="Georgia">Georgia</option>
      <option value="Hawaii">Hawaii</option>
      <option value="Idaho">Idaho</option>
      <option value="Illinois">Illinois</option>
      <option value="Indiana">Indiana</option>
      <option value="Iowa">Iowa</option>
      <option value="Kansas">Kansas</option>
      <option value="Kentucky">Kentucky</option>
      <option value="Louisiana">Louisiana</option>
      <option value="Maine">Maine</option>
      <option value="Maryland">Maryland</option>
      <option value="Massachusetts">Massachusetts</option>
      <option value="Michigan">Michigan</option>
      <option value="Minnesota">Minnesota</option>
      <option value="Mississippi">Mississippi</option>
      <option value="Missouri">Missouri</option>
      <option value="Montana">Montana</option>
      <option value="Nebraska">Nebraska</option>
      <option value="Nevada">Nevada</option>
      <option value="New Hampshire">New Hampshire</option>
      <option value="New Jersey">New Jersey</option>
      <option value="New Mexico">New Mexico</option>
      <option value="New York">New York</option>
      <option value="North Carolina">North Carolina</option>
      <option value="North Dakota">North Dakota</option>
      <option value="Ohio">Ohio</option>
      <option value="Oklahoma">Oklahoma</option>
      <option value="Oregon">Oregon</option>
      <option value="Pennsylvania">Pennsylvania</option>
      <option value="Rhode Island">Rhode Island</option>
      <option value="South Carolina">South Carolina</option>
      <option value="South Dakota">South Dakota</option>
      <option value="Tennessee">Tennessee</option>
      <option value="Texas">Texas</option>
      <option value="Utah">Utah</option>
      <option value="Vermont">Vermont</option>
      <option value="Virginia">Virginia</option>
      <option value="Washington">Washington</option>
      <option value="West Virginia">West Virginia</option>
      <option value="Wisconsin">Wisconsin</option>
      <option value="Wyoming">Wyoming</option>
    </select>
  </div>
</div>

<div class="form-group">
  <h6>BUSINESS STARTED</h6>
  <div class="controls">
    <input type="date" value="{{$customer->business_started}}" name="business_started" class="form-control" readonly >
   </div>
</div>

<div class="form-group">
  <h6>Customer Enrolled</h6>
  <div class="controls">
    <input type="date" value="{{$customer->customer_enrolled}}" name="customer_enrolled" class="form-control" readonly >
   </div>
</div>

<div class="form-group">
  <h6>Status</h6>
  <div class="controls">
    <select name="status" class="form-control" @readonly(true) >
      <option value="{{$customer->status}}" selected="">{{$customer->status}}</option>
      <option value="Not Started">Not Started</option>
      <option value="On Progress" >On Progress</option>
      <option value="Done" >Done</option>    
    </select>
   </div>
</div>
<div class="form-group">
  <h6>Customer Type<span class="text-danger">*</span></h6>
  <div class="controls">
    <select name="customer_type" class="form-control" @readonly(true) >
      <option value="{{$customer->customer_type}}" selected="">{{$customer->customer_type}}</option>
      <option value="Individual" >Individual</option>
      <option value="Business" >Business</option>
     
    </select>
   </div>
</div>

</div>
{{-- end col --}}

<div class="col">

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">Address <span class="text-danger">*</span></label>
<div class="controls">
<input type="text" value="{{$customer->address}}" name="address" class="form-control" readonly>
</div>
</div>

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">City <span class="text-danger">*</span></label>
<div class="controls">
<input type="text" value="{{$customer->city}}" name="city" class="form-control" readonly>
</div>
</div>

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">State <span class="text-danger">*</span></label>
<div class="controls">
<input type="text" value="{{$customer->state}}" name="state" class="form-control" readonly >
</div>
</div>

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">Zip <span class="text-danger">*</span></label>
<div class="controls">
<input type="text" value="{{$customer->zip}}" name="zip" class="form-control" pattern="\d{5}" title="Enter a valid 5-digit zip code" readonly >

</div>
</div>

<div class="form-group">
	<label  class="text-uppercase text-dark text-xs font-weight-bold ">Country <span class="text-danger">*</span></label>
<div class="controls">
<input type="text" value="{{$customer->country}}" name="country" class="form-control" readonly >
</div>
</div>

<div class="form-group">
  <h6>Business Type</h6>
  <div class="controls">
    <select name="business_type" class="form-control" @readonly(true) >
      <option value="{{$customer->business_type}}" selected="">{{$customer->business_type}}</option>
      <option value="LLC">LLC</option>
      <option value="PLLC" >PLLC</option>
      <option value="C-CORP">C-CORP</option>
      <option value="S-CORP">S-CORP</option>
      <option value="SELF-EMPLOYED">SELF-EMPLOYED</option>
    </select>
   </div>
</div>

<div class="form-group">
  <h6>Notes / Comment</h6>
  <div class="controls">    
    <textarea name="comment" class="form-control"  name="tinymce" id="tinymceExample" rows="10" readonly>{{$customer->comment}}</textarea>
   </div>
</div>


{{-- <div class="text-xs-right"> --}}
				 
         {{-- </div> --}}

		</div>
		{{-- end col --}}

       </div>


</div>

</div>



{{-- TRIAL END --}}

    </div>
    @include('admin.body.footer')
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
        tinymce.init({
            selector: '#tinymceExample',
            readonly: true,
            // height: 300, // Set the desired height
            plugins: 'autoresize',
            toolbar: 'undo redo',
            menubar: true,
            autoresize_bottom_margin: 16
        });
    });
</script>

@endsection