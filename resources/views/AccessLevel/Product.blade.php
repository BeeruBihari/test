@extends('AccessLevel.AccessLevelParent')
@section('content')
	

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	        <img class="d-block w-100" src="{{url('/')}}/AccessLevelImg/fishHalf.jpg" alt="First slide">
	        <div class="carousel-caption d-none d-md-block">
		        <h5>Tuna</h5>
		        <p>This is fish</p>
		    </div>
	    </div>
	    <div class="carousel-item">
		    <img class="d-block w-100" src="{{url('/')}}/AccessLevelImg/fishHalf.jpg" alt="Second slide">
		    <div class="carousel-caption d-none d-md-block">
			    <h5>Batli</h5>
			    <p>This is another fish</p>
			</div>
	    </div>
	    <div class="carousel-item">
		    <img class="d-block w-100" src="{{url('/')}}/AccessLevelImg/fishHalf.jpg" alt="Third slide">
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
			@foreach($list as $data)
			<div class="col-sm-3 " >
				<img src="{{url('/')}}/AccessLevelImg/{{$data->image_path}}" alt = "fish" class="img-fluid product_card" id="product_imag_{{$data->package_id}}">
				<div class="card">
					<div class="card-body product_card" id="product_card_{{$data->package_id}}">
					
						<h3>{{$data->package_name}}</h3>
						<p>{{$data->package_desc}}</p>
							
					</div>
					<div class="card-footer">
						<div class="container">
							<div class = "row">
								<div class="col-sm-6">
									<h5>{{$data->package_cost}}</h5>
								</div>
								<div class="col-sm-6">
									@php 
										$items = Session::get('cart');
										$count = 0;
										if($items != NULL){
											$count = count($items);
											if (in_array($data->package_id, $items) != false) {
								                $class = "btn-danger";
								                $value = "Remove";
								            }else{
									            $class = "btn-success";
								                $value = "Add to cart";
									        }
										}else{
								            $class = "btn-success";
							                $value = "Add to cart";
								        }
										
									@endphp 
									<input type="hidden" value="{{$count}}" id = "count_cart_item">
									<button class="btn {{$class}} add_to_cart" id = "add_to_cart_{{$data->package_id}}">{{$value}}</button>
								</div>
							</div>
						</div>	
					</div>	
				</div>	
			</div>
			@endforeach
		</div>
	</div>
	<script type="text/javascript" src="{{url('/')}}/js/AccessLevel/BuyPackage.js"></script>
	<script type="text/javascript">
		$url = "{{url('/')}}";
		$button_class = "success";
	</script>
@endsection