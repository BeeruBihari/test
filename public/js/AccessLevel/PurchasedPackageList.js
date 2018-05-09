
		$(document).ready(function(){
			$button_id_remove = 0 ;	
			$(".remove_button").click(function(){
				$button_id_remove = getID($(this),7);
				$('#modal_fire_button').click();
			});
			$("#confirm_yes").click(function(){
				$.ajax({
				 	url:$url+"/removeFromList",
				 	type: "GET",
				 	data: {
				 		_token: "{{ csrf_token() }}", 
						package: $button_id_remove,
				 	},
				 	success: function(resp){
				 		console.log(resp.sent_status);
				 		if(resp.sent_status != 0){
				 			$("#remove_"+$button_id_remove).attr("disabled", "disabled");
				 			$('#modal_fire_button').click();
				 		 	console.log("removed");
				 		}else{
				 			console.log("failed")
				 		}
					}
				});
				
			});

			$clint_id = $("#clint_id").val();
			// submit_suggestation sending 
			$suggest_package_id = 0;
			$(".suggest_something_button").click(function(){
				$suggest_package_id = $(this).attr('package');
				
				$("#suggest_something_modal_fire").click();
				$("#suggest_text").focus();


			});
			$("#submit_suggestation").click(function(){
				$("#suggest_something_modal_fire").click();
				console.log($suggest_package_id);
				$.ajax({
					url: $url+"/problem_suggestion/",
					type: "GET",

					data: {
						_token: "{{ csrf_token() }}",
						clint: $clint_id,
						package: $suggest_package_id,
						p_or_s: $("#suggest_text").val(),
						type: "suggestion" ,
					},
					success: function success(data) {
						//thank you notice
 						$('#thankModal_fire').click();
					}

				});
				
			});

			//report a problem
			$report_package_id = 0 ;
			$(".report_a_problem_button").click(function(){
				$report_package_id = $(this).attr('package');
				
				$("#report_a_problem_modal_fire").click();
				$("#report_a_problem_text").focus();
			});
			$("#submit_report_problem").click(function(){
				$("#report_a_problem_modal_fire").click();
				console.log($report_package_id);
				$.ajax({
					url: $url+"/problem_suggestion/",
					type: "GET",

					data: {
						_token: "{{ csrf_token() }}",
						clint: $clint_id,
						package: $report_package_id,
						p_or_s: $("#report_a_problem_text").val(),
						type: "problem" ,
					},
					success: function success(data) {
						$('#thankModal_fire').click();
					}

				});
				
			});

			function getID($id,$trim_length){
				$button_id = $id.attr('id');
				$button_id = $button_id.substring($trim_length,$button_id.length);
				console.log("button_id:"+$button_id);
				return($button_id);
			}
		});