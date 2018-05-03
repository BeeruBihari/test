@extends('AccessLevel.AccessLevelParent')
@section('Success')
	 
 	<br>
 	<br>
 	<br>
	<div class="container">
		<div class="row" align="center">
			<div class="offset-md-2 col-md-8">
				<div class="card">
					<div class="card-body">
						<i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
						<br>
						<h1 class="orderMsg">Order Successfully Placed</h1>
						<hr>
						<b><div>Your order number is <span class="red">#48564756</span></div></b>
						<hr>
						<div><small>You'll receive an email confirmation shortly on your associated email</small></div>
						<div class="container">
							<div class="row">
								<div class="offset-md-3 col-sm-3">
									<big>ORDER TOTAL</big>
								</div>
								<div class="col-sm-3">
									<big><b>RS. 2000</b></big>
								</div>
							</div>

							<div class="row">
								<div class="offset-md-3 col-sm-3">
									<small>Payment Method</small>
								</div>
								<div class="col-sm-3">
									<small>Paypal</small>
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
					</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection