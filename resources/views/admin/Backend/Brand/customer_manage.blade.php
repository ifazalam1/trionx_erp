@extends('admin.aDashboard')
@section('admins')

 {{-- TRIAL START --}}
 <div class="container-fluid">
	<div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
		<div class="card">

		  <div class="card-body p-3">
			<div class="row">
							<!-- /.box-header -->
							{{-- <div class="box-body"> --}}
								<div class="table-responsive">
								  <table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr class="align-middle text-center">
										
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address </th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Personal Phone</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
											 
										</tr>
									</thead>
									<tbody>
            
 @foreach($customers as $item)
 <tr class="align-middle text-center text-sm">
  <td><a href="{{ route('customer.view',$item->id) }}">{{ $item->user_name }}</a></td>
  <td>{{ $item->address }}</td>
  <td>{{ $item->email }}</td>
  <td>{{ $item->personal_phone }}</td>
  <td>


<a class="btn btn-link text-dark px-3 mb-0" href="{{ route('customer.view',$item->id) }}"><i class="fa-solid fa-eye text-dark me-2" aria-hidden="true"></i>View</a>	
			 
			 <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('customer.edit',$item->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

{{-- <a href="{{ route('brand.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 <i class="fa fa-trash"></i></a> --}}
  </td>
             
 </tr>
  @endforeach
</tbody>
									 
</table>
</div>
{{-- </div> --}}
</div>
</div>
</div>
</div>
</div>
</div>

@include('admin.body.footer')

{{-- TRIAL END --}}


@endsection