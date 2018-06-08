<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	

	<!-- <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/AccessLevel.css"/> -->
</head>
<body>
	<br><br><br>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-10">
				<div class="card">
				  <div class="card-body">
				    <h3 class="card-title">Edit Profile</h3>
				    <div class="card-text">    	
						<hr>
						<div class="row">
							<div class="col-sm-4">
								<b><big>PERSONAL DETAILS:-</big></b>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-4">
								<label for="emp_type">Employ Type</label>
								<select class="custom-select" id="emp_type">
									<option>
										Dotor
									</option>
									<option>
										Professior
									</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label for="emp_type">Regstration Number</label>
								<input id = "emp_type" type="text" name="reg_no" value= "12-4-3" class="form-control" disabled>
							</div>
							<div class="col-sm-4">
								<label for="blood_group">Blood Group</label>
								<select class="custom-select" id="blood_group">
									<option value="prompt">Please Select</option>
									<option value="1">A+</option>
									<option value="2" selected="selected">A-</option>
									<option value="3">B+</option>
									<option value="4">B-</option>
									<option value="5">O+</option>
									<option value="6">O-</option>
									<option value="7">AB+</option>
									<option value="8">AB-</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label for="first_name">First Name</label>
								<input id = "first_name" type="text" name="first_name" class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="middle_name">Middle name</label>
								<input id = "middle_name" type="text" name="middle_name"  class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="last_name">Last Name</label>
								<input id = "last_name" type="text" name="last_name"  class="form-control" >
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="gender">Gender</label>
								<select class="custom-select" id="gender">
									<option>Please Select</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
							<div class="col-sm-6">
								<label for="dob">Date Of Birth</label>
								<input id = "dob" type="date" name="dob"  class="form-control" >
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="gender">Address</label>
								<textarea class="form-control" id="address"></textarea>
							</div>
							<div class="col-sm-6">
								<label for="upload_photo">Upload Photo</label>
								<input id = "upload_photo" type="file" name="upload_photo" class="form-control" placeholder="Upload Photo">
							</div>
						</div>

						<hr>
						<div class="row">
							<div class="col-sm-4">
								<b><big>DEPARTMENT DETAILS:-</big></b>
							</div>
						</div>




						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="department">Department</label>
								<select class="custom-select" id="department">
									<option>Select Department</option>
									<option>Phycis</option>
									<option>Chemistry</option>
								</select>
							</div>
							<div class="col-sm-6">
								<label for="designation">Designation</label>
								<select class="custom-select" id="designation">
									<option>Select Designation</option>
									<option>Letecturer</option>
									<option>Staff</option>
								</select>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="date_joining">Date Of Joining</label>
								<input id = "date_joining" type="date" name="date_joining"  class="form-control" >
							</div>
							<div class="col-sm-6">
								<label for="date_retirement">Date Of Retirement</label>
								<input id = "date_retirement" type="date" name="dob"  class="form-control">
							</div>
						</div>

						<hr>
						<div class="row">
							<div class="col-sm-4">
								<b><big>CONTACT DETAILS:-</big></b>
							</div>
						</div>
						<br>
						<div class="row">
							<div class = "col-sm-6">
								<label for= "email_id">Email ID</label>
								<input id = "email_id" type="email" name="email_id"  class="form-control">
							</div>
							<div class = "col-sm-6">
								<label for= "contact_no">Contact Number</label>
								<input id = "contact_no" type="text" name="contact_no"  class="form-control">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-4">
								<b><big>EMERGENCY CONTACT DETAILS:-</big></b>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label for="egnc_name">Name</label>
								<input id = "egnc_name" type="text" name="egnc_name" class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="egnc_contact_no">Contact Number</label>
								<input id = "egnc_contact_no" type="text" name="egnc_contact_no"  class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="egnc_relationship">Relationship</label>
								<input id = "egnc_relationship" type="text" name="egnc_relationship"  class="form-control">
							</div>
						</div>


						<hr>
						<div class="row">
							<div class="col-sm-4">
								<b><big>REFERANCE DETAILS:-</big></b>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="ref_person">Reference Person</label>
								<input class="form-control" id="ref_person" type="text" name="ref_person">
							</div>
							<div class="col-sm-6">
								<label for="ref_contact_no">Reference Contact</label>
								<input id = "ref_contact_no" type="text" name="ref_contact_no" class="form-control">
							</div>
						</div>

						<hr>
						<div class="row">
							<div class="col-sm-4">
								<b><big>PREVIOUS QUALIFICATION DETAILS:-</big></b>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label for="school_name">School Name</label>
								<input id = "school_name" type="text" name="school_name" class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="school_add">School Address</label>
								<textarea class="form-control" id="school_add"></textarea>
							</div>
							<div class="col-sm-4">
								<label for="hight_qualification">Highest Qualification</label>
								<input id = "hight_qualification" type="text" name="hight_qualification"  class="form-control" >
							</div>
						</div>
						
						<div class="row">
							<div class="offset-sm-8 col-sm-4" align="right">
								<button class="btn btn-primary btn-lg">Save</button>
							</div>
							
						</div>
						

						




				    </div>
				  </div>
				</div>	
			</div>
			<div class="col-sm-2">
				<div class="card">
					<div class="card-body">
						<img class="img-fluid" src="{{url('/')}}/img/me.jpg">
					</div>
					<div class="card-footer" align="center">
						<h5>Dr Rahul</h5>
						<div>Doctor</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
	<br><br><br><br><br><br><br><br><br>
</body>
</html>