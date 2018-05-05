<!--This page is use to set setting-->
@extends("AccessLevel.AccessLevelParent")

@section('title')
	<title>Admin Add new</title>
@stop
 
@section('content') 
<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-info text-white">
						<h1 align="center">Add Access Level</h1>
						<h4 align="center">You can create new access type from here</h4> 
					</div>
					<div class="card-body bg-dark">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="card bg-white">
									<div class="container" >
									<h3>Avilable access type </h3>
									<br>
									Enter type name
									<div id="type_div">
										<table class="table" style="width:100%">
											<thead><tr>
												<th>Type Name</th><th>Edit</th>
											</tr>
											</thead>
											<tbody id="type_name_tab">
												<tr><th><a href="#">Student</a>
													</th>
													<th><button class="btn btn-primary"> click</button>
													</th>

												</tr>
											</tbody>
										</table>
									</div>
									<input type="button" id="add_btn" class="form-control setting_btn bg-primary btn text-white" name="topic" align="right" value="+ Add new Access ">	
									</div><br>
									</div>
								</div>

								<div class="col-md-6">
									<div class="card bg-white">
									<div class="container" id="add_div" >
									<div class="col-md-12" style="padding:5px;">
									Click on add new Access button enter the name of the Access. Select the privilege which you want to provide to that user and click on the save button.  Access name cannot be modifying once it is save. We can only modify the privileges.</div> 
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		

			</div>
		</div>


</div>
<div id="msg"></div>

@stop

@section('script')
<script type="text/javascript" src="{{url('/')}}/js/AccessLevel/NewAccessType.js"></script>
<script>
	$(document).ready(function(){
		$.url = '{{url("/")}}/file/upload';
		$.token='{{csrf_token()}}';

	});
</script>

@stop