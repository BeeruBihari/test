@extends('AccessLevel.AccessLevelParent')
@section('Signup')
 	<br>
 	<br>
	<div class="container" align="center">
		<div class="row" >
			<div class="offset-md-5 col-md-2 login-heading-font" align="center">
				<h1><B>REGISTER</B></h1>
			</div>
		</div>
		
		<div class="row" >
			<div class="offset-md-3 col-md-6 login-sub-heading-font">
				<h3><i><u>Register your Account</u></i></h3>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="input-group offset-md-3 col-md-6 input-type-font">
			  <input type="text" class="form-control blueBG" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="input-group offset-md-3 col-md-6 input-type-font">
			  <input type="text" class="form-control blueBG" placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="basic-addon2">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="input-group offset-md-3 col-md-6 input-type-font">
			  <input type="text" class="form-control blueBG" placeholder="Email ID" aria-label="Email ID" aria-describedby="basic-addon2">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="input-group offset-md-3 col-md-6 input-type-font">
			  <input type="password" class="form-control blueBG" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="input-group offset-md-3 col-md-6 input-type-font">
			  <input type="password" class="form-control blueBG" placeholder="Retype Password" aria-label="Retype Password" aria-describedby="basic-addon2">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="offset-md-3 col-md-6 termandcondition" align="left">
				<div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        <big><i>I have read and agree to the <u>term of use</u> and <u>privacy policy</u>.</i></big>
				      </label>
				    </div>
				</div>
			</div>
		</div>q
		<div class="row">
			<div class="offset-md-3 col-md-6" align="center">
				<button class="btn btn-lg btn-orange">
					<b>Create</b>
				</button>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 follow">
				Ask a Question ON
			</div>
			<div class="col-md-5" align="left">
				<button class="btn whiteBG"><i class="fa fa-twitter fa-4x" aria-hidden="true"></i></button>
				<button class="btn whiteBG"><i class="fa fa-google fa-4x" aria-hidden="true"></i></button>
				<button class="btn whiteBG"><i class="fa fa-facebook fa-4x" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
@endsection