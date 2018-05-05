@extends('AccessLevel.AccessLevelParent')
@section('Product')
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#">BOOK.com</a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	        <img class="d-block w-100" src="{{url('/')}}/AccessLevelImg/fish.jpg" alt="First slide">
	        <div class="carousel-caption d-none d-md-block">
		        <h5>Tuna</h5>
		        <p>This is fish</p>
		    </div>
	    </div>
	    <div class="carousel-item">
		    <img class="d-block w-100" src="{{url('/')}}/AccessLevelImg/fish.jpg" alt="Second slide">
		    <div class="carousel-caption d-none d-md-block">
			    <h5>Batli</h5>
			    <p>This is another fish</p>
			</div>
	    </div>
	    <div class="carousel-item">
		    <img class="d-block w-100" src="{{url('/')}}/AccessLevelImg/fish.jpg" alt="Third slide">
		    <div class="carousel-caption d-none d-md-block">
			    <h5>Laundi</h5>
			    <p>This is fish after fish</p>
			</div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<br>
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
					
						<h3>Tuna Fish</h3>
						<p>This is tuna Fish. This is testy fish because this is tuna fish i love this fish because this is tuna fish. this very good i like this fish. this is very good because this is yellow.</p>
							
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>	
				</div>
				
				
			</div>
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
						<h3>Katiya Fish</h3>
						<p>This is Katiya Fish. This is testy fish because this is Katiya fish i love this fish because this is Katiya fish. this very good i like this fish. this is very good because this is yellow.</p>
							
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
						<h3>Tapli Fish</h3>
						<p>This is Tapli Fish. This is testy fish because this is Tapli fish i love this fish because this is Tapli fish. this very good i like this fish. this is very good because this is yellow.</p>
						
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
						
						<h3>Batli Fish</h3>
						<p>This is Batli Fish. This is testy fish because this is Batli fish i love this fish because this is Batli fish. this very good i like this fish. this is very good because this is yellow.</p>
						
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
					
						<h3>Tuna Fish</h3>
						<p>This is tuna Fish. This is testy fish because this is tuna fish i love this fish because this is tuna fish. this very good i like this fish. this is very good because this is yellow.</p>
							
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
				
			</div>
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
						<h3>Katiya Fish</h3>
						<p>This is Katiya Fish. This is testy fish because this is Katiya fish i love this fish because this is Katiya fish. this very good i like this fish. this is very good because this is yellow.</p>
							
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
						<h3>Tapli Fish</h3>
						<p>This is Tapli Fish. This is testy fish because this is Tapli fish i love this fish because this is Tapli fish. this very good i like this fish. this is very good because this is yellow.</p>
						
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<img src="{{url('/')}}/AccessLevelImg/fish.jpg" alt = "fish" class="img-fluid">
				<div class="card">
					<div class="card-body">
						
						<h3>Batli Fish</h3>
						<p>This is Batli Fish. This is testy fish because this is Batli fish i love this fish because this is Batli fish. this very good i like this fish. this is very good because this is yellow.</p>
						
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-md-6">
									<h5>RS. 100</h5>
								</div>
								<div class="col-md-6">
									<button class="btn btn-success">Add to cart</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection