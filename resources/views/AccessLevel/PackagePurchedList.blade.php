@extends('AccessLevel.AccessLevelParent')
@section('content')
	 
 	<br>
 	<br>
 	<br>
	<div class="container">
		<div class="row" align="center">
			<div class="col-md-12">
				<input type="hidden" id="clint_id" value="{{$clint_id}}">
				<table class="table table-bordered table-dark">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Plugin Name</th>
						      <th scope="col">Purchased Date</th>
						      <th scope="col">Expiry Date</th>
						      <th scope="col">Action</th>
						      <th scope="col">status</th>  
						    </tr>
						  </thead>
						  <tbody>
						  	@php  	$i = 1;		@endphp
						  	@foreach($package_list as $data)

							    <tr>
							        <th scope="row">@php echo($i++) @endphp</th>
							        <td>{{$data->package_name}}</td>
							        <td>{{$data->ca}}</td>
							        <td>{{$data->expiry_date}}</td>
							        <td>
							      		<div class="btn-group">
										  <button type="button" class="btn btn-danger remove_button" id="remove_{{$data->id}}" @if($data->running_status != 'true') disabled @endif>Remove</button>
										  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    <span class="sr-only">Toggle Dropdown</span>
										  </button>
										  <div class="dropdown-menu">
										    <a class="dropdown-item renewal_button" href="{{url('/')}}/ParticularPluginDetail/{{$data->pc_id}}" id="renewal_{{$data->id}}" target="_blank">Re-newal</a>
										    <a class="dropdown-item suggest_something_button" href="#" package = "{{$data->pc_id}}">Suggest Something</a>
										    
										    <div class="dropdown-divider"></div>
										    <a class="dropdown-item report_a_problem_button" href="#" id="report_a_problem_{{$data->id}}" package = "{{$data->pc_id}}">Report a Problem</a>
										  </div>
										</div>
									</td>

									<td >
										<i class="fa fa-circle" style="color: @if($data->running_status == 'true') green; @else red; @endif"></i>
									</td>
							    </tr>
							@endforeach
						  </tbody>
						</table>
			</div>
			
		</div>
	</div>
	

	<!-- Button trigger modal for confirm -->
	<input type="hidden" id = "modal_fire_button" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">

	<!-- confirm modal -->
	<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="confirmLabel">Do you really want to remove this package?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="confirm_notice">
	        Once you removed this package this package treated as expired and no amount will be refuned and you are not able to use this package until you buy it again.If you are sure click <b>yes</b>.
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" id = "confirm_yes" class="btn btn-primary">Yes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Button trigger modal for confirm -->
	<input type="hidden" id = "suggest_something_modal_fire" class="btn btn-primary" data-toggle="modal" data-target="#suggest_something_modal">

	<!-- suggest modal -->
	<div class="modal fade" id="suggest_something_modal" role="dialog" aria-labelledby="suggest_something_modal" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="suggest_something_modal">How can make our service more better?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <textarea class="form-control" id="suggest_text" rows="5""></textarea>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" id = "submit_suggestation" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Button trigger modal for confirm -->
	<input type="hidden" id = "report_a_problem_modal_fire" class="btn btn-primary" data-toggle="modal" data-target="#report_a_problem_modal">

	<!-- report modal -->
	<div class="modal fade" id="report_a_problem_modal" role="dialog" aria-labelledby="report_a_problem_modal" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="report_a_problem_modal">what problem are you suffering from tell us? we will fix it.</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <textarea class="form-control" id="report_a_problem_text" rows="5"></textarea>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" id = "submit_report_problem" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- thnk you notice -->
	<!-- Button trigger modal for confirm -->
	<input type="hidden" id = "thankModal_fire" class="btn btn-primary" data-toggle="modal" data-target="#thankModal">

	<!-- confirm modal -->
	<div class="modal fade" id="thankModal" tabindex="-1" role="dialog" aria-labelledby="confirmLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="thankModal_heading">Thank you Notice</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="thankModal_body">
	        Dear customer, we would like to thank you for helping us to make the service for better and efficent. You may recive any call from our executives. <b>Thank You.</b>.
	      </div>
	      <div class="modal-footer">
	        <button type="button" id = "confirm_yes" class="btn btn-primary" data-dismiss="modal">Ok</button>
	      </div>
	    </div>
	  </div>
	</div>


	<script type="text/javascript">
		$url = "{{url('/')}}";
	</script>
	<!-- script -->
	<script type="text/javascript" src="{{url('/')}}/js/AccessLevel/PurchasedPackageList.js"></script>
@endsection
