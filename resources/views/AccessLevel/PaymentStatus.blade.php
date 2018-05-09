@extends('AccessLevel.AccessLevelParent')
@section('content')
	 
 	<br>
 	<br>
 	<br>
	<div class="container">
		<div class="row" align="center">
			<div class="offset-md-2 col-md-8">
				<div class="card">
					<div class="card-body">
						@if($status == "success")
						<!-- success -->
						<i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
						<br>
						<h1 class="orderMsg">Order Successfully Placed</h1>
						<hr>
						<b><div>Your order number is <span class="red">#{{$payment_id}}</span></div></b>
						<hr>
						<div><small>You'll receive an email confirmation shortly on your associated email</small></div>
						<div class="container">
							<div class="row">
								<div class="offset-md-3 col-sm-3">
									<big>ORDER TOTAL</big>
								</div>
								<div class="col-sm-3">
									<big><b>{{$amount}}</b></big>
								</div>
							</div>

							<div class="row">
								<div class="offset-md-3 col-sm-3">
									<small>Payment Method</small>
								</div>
								<div class="col-sm-3">
									<small>{{$mode}}</small>
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="offset-md-2 col-sm-4">
									<button type="button" class="btn btn-lg btn-outline-primary">MY ACCOUNT</button>
								</div>
								<div class="col-sm-4">
									<button type="button" class="btn btn-lg btn-dark">CONTINUE SHOPPING</button>
								</div>
							</div>
						</div>
						@else 
						<!-- failed -->
						<i style="color: red;" class="fa fa-times fa-5x" aria-hidden="true"></i>
						<br>
						<h1 style="color: red;" class="orderMsg">{{$status}}</h1>
						<hr>
						<b><div>Your order number is <span class="red">#{{$payment_id}}</span></div></b>
						<hr>
						<div><small>You'll receive an email confirmation shortly on your associated email</small></div>
						<div class="container">
							<div class="row">
								<div class="offset-md-3 col-sm-3">
									<big>ORDER TOTAL</big>
								</div>
								<div class="col-sm-3">
									<big><b>{{$amount}}</b></big>
								</div>
							</div>

							<br>
							<hr>
							<div class="row">
								<div align="right" class="offset-md-1 col-sm-5">
									<h4>Possible Reason</h4>
								</div>
								<div class="col-sm-5">
									<ul align="left">
										<li>Invalid Card Details</li>
										<li>Card Has Expired</li>
										<li>Insufficient funds</li>
										<li>Secure Authentication Unsucessful</li>
									</ul>
								</div>
									
							</div>
							<br>
							<div class="row">
								<div class="offset-md-2 col-sm-4">
									<button type="button" class="btn btn-lg btn-outline-primary">MY ACCOUNT</button>
								</div>
								<div class="col-sm-4">
									<button type="button" class="btn btn-lg btn-dark">CONTINUE SHOPPING</button>
								</div>
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection