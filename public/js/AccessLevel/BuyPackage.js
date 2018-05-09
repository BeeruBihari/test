$(document).ready(function(){
	$("#cart_count").text($("#count_cart_item").val()) ;
	$cart_count = $("#cart_count").text();
	$(".add_to_cart").click(function(){
		if($(this).text() == "Add to cart"){
			$click_id = $(this);
			$id = $click_id.attr('id');
			$package_id = $id.substring(12,$id.length);
			//ajax
			$.ajax({
			 	url:$url+"/add_remove_cart",
			 	type: "GET",
			 	data: {
			 		_token: "{{ csrf_token() }}", 
			 		work: "add",
					item: $package_id,
			 	},
			 	success: function(resp){
			 		console.log(resp.status);
			 		if(resp.status != 0){
			 			console.log("change to remobe");
						$click_id.text("Remove");
						$click_id.removeClass("btn-"+$button_class);
						$click_id.addClass("btn-danger");
						$cart_count++;
						$("#cart_count").text($cart_count);
			 		}else{
			 			console.log("failed")
			 		}
				}
			});
			
		}else{
			$click_id = $(this);
			$id = $click_id.attr('id');
			$package_id = $id.substring(12,$id.length);
			//ajax
			$.ajax({
			 	url:$url+"/add_remove_cart",
			 	type: "GET",
			 	data: {
			 		_token: "{{ csrf_token() }}", 
			 		work: "remove",
					item: $package_id,
			 	},
			 	success: function(resp){
			 		console.log(resp.status);
			 		if(resp.status != 0){
						$click_id.text("Add to cart");
						$click_id.removeClass("btn-danger");
						$click_id.addClass("btn-"+$button_class);
						$cart_count--;
						$("#cart_count").text($cart_count);
			 		}else{
			 			console.log("failed")
			 		}
				}
			});	
		}
	});
	
	$(".product_card").hover(function(){
		$(this).css( 'cursor', 'pointer' );
	});
	$(".product_card").click(function(){

		$id = $(this).attr('id');
		$package_id = $id.substring(13,$id.length);
		window.open($url+"/ParticularPluginDetail/"+$package_id);
	});
});