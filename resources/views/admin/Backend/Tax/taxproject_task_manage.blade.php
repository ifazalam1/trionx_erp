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
											
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Customer Name</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Assign To</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Assign Date</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Made By</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
																	 
										</tr>
									</thead>
									<tbody>

			

				 @foreach($products as $item)
				 <tr class="align-middle text-center text-sm">
					
					<td>{{ $item->customer->user_name }}</p></td>
					<td><h6 class="mb-0 text-sm">{{ $item->admin->name }}</h6></td>
					
					<td><h6 class="mb-0 text-sm">{{ $item->assign_date }}</h6></td>
					
					@if ($item->made_by == NULL)
					<td><h6 class="mb-0 text-sm">--</h6></td>
					@else
					<td><h6 class="mb-0 text-sm">{{ $item->made_by->name }}</h6></td>
					@endif

					@if ($item->status == 'Done')
					<td class="align-middle text-center text-sm">
					  <span class="badge badge-sm bg-gradient-success">{{$item->status}}</span>
					</td>
					@elseif($item->status == 'On Progress')
					<td class="align-middle text-center text-sm">
					  <span class="badge badge-sm bg-gradient-info">{{$item->status}}</span>
					</td>
					@else
					<td class="align-middle text-center text-sm">
					  <span class="badge badge-sm bg-gradient-danger">{{$item->status}}</span>
					</td>
				@endif
					
					
					<td>
						<a class="btn btn-link text-dark px-3 mb-0" href="{{ route('taxproject.task.view',$item->id) }}"><i class="fa-solid fa-eye text-dark me-2" aria-hidden="true"></i>View</a>
						
			 <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('taxproject.task.edit',$item->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>		
			
			 <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('taxprojects.tasks.deletes',$item->id) }}" onclick="return confirm('Are you sure you want to delete this Student')"><i class="fa-solid fa-trash text-dark me-2"></i>Delete</a>

			
					</td>
					
										 
				 </tr>
				  @endforeach
				  <tr>
					
					<td></td>
					<td></td>
					
					<td></td>
					<td></td>
					
					
				  </tr>

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