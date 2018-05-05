$(function(){

	$("#add_btn").click(function(){
			console.log("Print buttonl Click");
			$.newAccess();
			$('#access_name').focus();
	});

	$.newAccess = function(){

		var message ='Enter the access name select the privileges which you want to give that user and finally click on save button. <br><br>'; 
		var input ='<strong>Enter Access Name</strong><input type="text" id="access_name" class="form-control" placeholder="Enter access name"/><br><hr>';
		var message2 ='<strong>Select the privileges.</strong>';
		var table = '<table class="table">'+
										'<tbody>'+
											'<tr><th>All</th>'+
											'<th> <input value="All" class="form-check-input new_check" type="checkbox"></th>'+
											'<tr><th>Moduale Name</th>'+
											'<th>'+ 
											'</th>'+
											'<tr><th>Student Setting</th>'+
											'<th><input class="form-check-input new_check" value="check1" type="checkbox">'+
											'</th></tr>'+
											'<tr><th>Teacher Setting</th>'+
											'<th><input checked class="form-check-input new_check" value="check2" type="checkbox">'+
											'</th>'+
										'</tbody>'+
										'</table>';

		var table2 = '<br><table class="table">'+
											'<tr><th>'+
										'<div style="padding:5px">'+
										'<button class="btn btn-primary">Save</button></div></th>'+
										'<th>'+
										'<div style="padding:5px">'+
										'<button class="btn btn-warning">Cancel</button></div></th>'+
										'<th>'+
										'<div style="padding:5px">'+
										'<button class="btn btn-danger">Reset</button></div></th>'+
											'</tr>'+
										'</table>';
		$("#add_div").empty();
		$("#add_div").append(message);
		$("#add_div").append(input);
		$("#add_div").append(message2);
		$("#add_div").append(table);
		$("#add_div").append(table2);
	}

	$(document).on("change","#add_div",function(){
		console.log("check box clicked");
		var checkValue = $("input[type='checkbox'].new_check:checked").each(function(){
			var val = $(this).val();
			if(val == "All"){
				console.log("in true boady");
				$(this).attr("checked", "checked");
			}
			console.log();
		});
		
	});

	// // bellow function is use in checkbox event 
	// $(".new_check").click(function(){
	// 	console.log("Check box click");

	// });

});