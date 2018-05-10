@extends('AccessLevel.AccessLevelParent')
@section('content')
 	<br> 
 	<br>
 	<br>
	<div class="container-fluid">
		@foreach($plugin_data as $plugin_info)	
			<div class="row" >
				<div class="col-md-4">
					<img src="{{url('/')}}/AccessLevelImg/{{$plugin_info->image_path}}" alt="{{$plugin_info->package_name}}" class="img-fluid">

					@php 
						$items = Session::get('cart');
						$count = 0;
						if($items != NULL){
							$count = count($items);
							if (in_array($plugin_info->package_id, $items) != false) {
				                $class = "btn-danger";
				                $value = "Remove";
				            }else{
					            $class = "btn-primary";
				                $value = "Add to cart";
					        }
						}else{
						
				            $class = "btn-primary";
			                $value = "Add to cart";
				        }
						
					@endphp 
					<button class="btn btn-lg {{$class}} fit add_to_cart" id = "add_to_cart_{{$plugin_info->package_id}}">{{$value}}</button>
					<a href="{{url('/')}}/payment_getway" class="btn btn-lg btn-success fit">BUY NOW</a>
				</div>
				<div class="col-md-8">
					<h2>{{$plugin_info->package_name}}</h2>
					<span class="badge badge-success">{{$plugin_info->rating}} <i class="fa fa-star" aria-hidden="true"></i></span>
					<div class="green" align="left">Special Price</div>
					<h4>Rs. {{$plugin_info->package_cost}}</h4>
					@php  $data = json_decode($plugin_info->key_features) @endphp
					@foreach($data->key_features as $list)
						<div><i class="fa fa-tag green" aria-hidden="true"></i>{{$list}}</div>
					@endforeach

					<div><i class="fa fa-tag green" aria-hidden="true"></i>It is also able to perfore bio-metric thum impression based attendence system</div>
					<div><i class="fa fa-tag green" aria-hidden="true"></i>This plugin can be easily handled and managed due to its userfriendly and easy UI</div>

					<h3>Specifications</h3>
					<table class="table">
					  <tbody>
					    <tr>
						    <td>Plugin ID</td>
					        <td class="red">#{{$plugin_info->package_id}}</td>
					    </tr>
					    <tr>
						    <td>Part Of</td>
					        <td>{{$plugin_info->management_type}}</td>
					    </tr>
					    <tr>
						    <td>Desc</td>
					        <td>{{$plugin_info->package_desc}}</td>
					    </tr>
					    <tr>
						    <td>Validity</td>
					        <td>{{$plugin_info->validity}} Year</td>
					    </tr>
					  </tbody>
					</table>

						
					</div>
				</div>
				
			</div>
			<br><hr style="color:green;"><hr><br>
		@endforeach
	</div>
	<script type="text/javascript" src="{{url('/')}}/js/AccessLevel/BuyPackage.js"></script>
	<script type="text/javascript">
		$url = "{{url('/')}}";
		$button_class = "primary";
	</script>

@endsection