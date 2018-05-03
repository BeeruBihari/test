@extends('AccessLevel.AccessLevelParent')
@section('LoginPage')
 	<br>
 	<br>
	<div class="container" align="center">
		<div class="row" >
			<div class="offset-md-5 col-md-2 login-heading-font">
				<h1><B>LOGIN</B></h1>
			</div>
		</div>
		
		<div class="row" >
			<div class="offset-md-3 col-md-6 login-sub-heading-font">
				<h3><i><u>Login into your Account</u></i></h3>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="input-group offset-md-3 col-md-6 input-type-font">
			  <input type="text" class="form-control blueBG" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2">
			  <div class="input-group-append">
			    <div style="background:white"><i class="fa fa-user fa-4x" aria-hidden="true"></i></div>
			  </div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="input-group offset-md-3 col-md-6 input-type-font">
			  <input type="password" class="form-control blueBG" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
			  <div class="input-group-append">
			    <div style="background:white"><i class="fa fa-lock fa-4x" aria-hidden="true"></i></div>
			  </div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="offset-md-3 col-md-6" align="center">
				<button class="btn btn-lg  btn-block btn-warning">
					<b>Sign In</b>
				</button>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="offset-md-3 col-md-6" align="center">
				<button class="btn btn-info">
					Forgot Password/ Create an account
				</button>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3 follow">
				Follow US ON
			</div>
			<div class="col-md-5" >
				<button class="btn whiteBG"><i class="fa fa-twitter fa-4x" aria-hidden="true"></i></button>
				<button class="btn whiteBG"><i class="fa fa-google fa-4x" aria-hidden="true"></i></button>
				<button class="btn whiteBG"><i class="fa fa-facebook fa-4x" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
@endsection