@extends('admin.aDashboard')
@section('admins')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	
<div class="container-fluid py-4">
	<div class="row">
	  <div class="col-lg-8">
		<div class="row">
		  <div class="col-xl-6 mb-xl-0 mb-4">
			<div class="card bg-transparent shadow-xl">
			  <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
				<span class="mask bg-gradient-dark"></span>
				<div class="card-body position-relative z-index-1 p-3">
				  <i class="fas fa-wifi text-white p-2"></i>
				  <h5 class="text-white mt-4 mb-5 pb-2">{{$project->project_name}}</h5>
				  <div class="d-flex">
					<div class="d-flex">
					  <div class="me-4">
						<p class="text-white text-sm opacity-8 mb-0">Assigned By</p>
						<h6 class="text-white mb-0">{{$project->user->name}}</h6>
					  </div>
					  <div>
						<p class="text-white text-sm opacity-8 mb-0">Assigned To</p>
						<h6 class="text-white mb-0">{{$project->admin->name}}</h6>
					  </div>
					</div>
					{{-- <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
						<p class="text-white text-sm opacity-8 mb-0">Assign Date</p>
						<h6 class="text-white mb-0">{{$project->assign_date}}</h6>
					</div> --}}
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-xl-6">
			<div class="row">
			  <div class="col-md-6">
				<div class="card">
				  <div class="card-header mx-4 p-3 text-center">
					<div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
					  <i class="fas fa-landmark opacity-10"></i>
					</div>
				  </div>
				  <div class="card-body pt-0 p-3 text-center">
					<h6 class="text-center mb-0">Bug</h6>
					<hr class="horizontal dark my-3">
					<span class="text-xs">{{$project->bug}}</span>
				
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 mt-md-0 mt-4">
				<div class="card">
				  <div class="card-header mx-4 p-3 text-center">
					<div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
					  <i class="fab fa-paypal opacity-10"></i>
					</div>
				  </div>
				  <div class="card-body pt-0 p-3 text-center">
					<h6 class="text-center mb-0">Issue</h6>
					<hr class="horizontal dark my-3">
					<span class="text-xs">{{$project->bug}}</span>
					
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-md-12 mb-lg-0 mb-4">
			<div class="card mt-4">
			
			  <div class="card-body p-3">
				<div class="row">
				  <div class="col-md-6 mb-md-0 mb-4">
					<h6 class="mb-0">Description</h6>
					<div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
						<p class="mb-0">{!! strip_tags($project->description) !!}</p>
					  {{-- <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i> --}}
					</div>
				  </div>
				  <div class="col-md-6">
					<h6 class="mb-0">Comment</h6>
					<div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
						<p class="mb-0">{!! strip_tags($project->comment) !!}</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-4">
		<div class="card h-100">
		  <div class="card-header pb-0 p-3">
			<div class="row">
			  <div class="col-6 d-flex align-items-center">
				<h6 class="mb-0">Details</h6>
			  </div>
			  {{-- <div class="col-6 text-end">
				<button class="btn btn-outline-primary btn-sm mb-0">View All</button>
			  </div> --}}
			</div>
		  </div>
		  <div class="card-body p-3 pb-0">
			<ul class="list-group">
			  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
				<div class="d-flex flex-column">
				  <h6 class="mb-1 text-dark font-weight-bold text-sm">{{$project->assign_date}}</h6>
				  <span class="text-xs">Assign Date</span>
				</div>
				{{-- <div class="d-flex align-items-center text-sm">
				  $180
				  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
				</div> --}}
			  </li>
			  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
				<div class="d-flex flex-column">
				  <h6 class="text-dark mb-1 font-weight-bold text-sm">{{$project->completion_date}}</h6>
				  <span class="text-xs">Completion Date</span>
				</div>

			  </li>
			  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
				<div class="d-flex flex-column">
				  <h6 class="text-dark mb-1 font-weight-bold text-sm">{{$project->hyperlinks}}</h6>
				  <span class="text-xs">Reference/Link</span>
				</div>
				{{-- <div class="d-flex align-items-center text-sm">
				  $560
				  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
				</div> --}}
			  </li>
			 
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<br>
		<div class="row">
		  <div class="col-12">
			<div class="card mb-4">
			  <div class="card-header pb-0">
				<h6>{{$project->project_name}} Tasks</h6>
			  </div>
			  <div class="card-body px-0 pt-0 pb-2">
				<div class="table-responsive p-0">
				  <table class="table align-items-center mb-0">
					<thead>
					  <tr>
						<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Task Name</th>
						<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Assign/Completion Date</th>
						<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Assigned To</th>
						<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bug</th>
						<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Issue</th>
						<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Priority</th>
						<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
						<th class="text-secondary opacity-7"></th>
					  </tr>
					</thead>
					<tbody>
						@foreach ($tasks as $task)						
					  <tr>
						<td>
							<a href="{{ route('project.task.view',$task->id) }}">
						  <div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
							  <h6 class="mb-0 text-sm">{{$task->task_name}}</h6>
							  <p class="text-xs text-secondary mb-0">{!! strip_tags(substr($task->comment, 0, 50)) !!}
							</div>
						  </div>
						</a>
						</td>
						<td class="align-middle text-center">
						  <p class="text-xs font-weight-bold mb-0">{{$task->assign_date}}</p>
						  <p class="text-xs text-secondary mb-0">{{$task->completion_date}}</p>
						</td>
						<td class="align-middle text-center text-sm">
						  <span class="badge badge-sm bg-gradient-success">{{$task->admin->name}}</span>
						</td>
						<td class="align-middle text-center">
						  <span class="text-secondary text-xs font-weight-bold">{{$task->bug}}</span>
						</td>
						<td class="align-middle text-center">
						  <span class="text-secondary text-xs font-weight-bold">{{$task->issue}}</span>
						</td>
						<td class="align-middle text-center text-sm">
							<span class="badge badge-sm bg-gradient-success">{{$task->priority}}</span>
						  </td>
						  @if ($task->status == 'Done')
						  <td class="align-middle text-center text-sm">
							<span class="badge badge-sm bg-gradient-success">{{$task->status}}</span>
						  </td>
						  @elseif($task->status == 'On Progress')
						  <td class="align-middle text-center text-sm">
							<span class="badge badge-sm bg-gradient-info">{{$task->status}}</span>
						  </td>
						  @else
						  <td class="align-middle text-center text-sm">
							<span class="badge badge-sm bg-gradient-danger">{{$task->status}}</span>
						  </td>
						  @endif
						
						{{-- <td class="align-middle">
						  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
							Edit
						  </a>
						</td> --}}
					  </tr>
					  @endforeach
					</tbody>
				  </table>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	



  </div>




@endsection
