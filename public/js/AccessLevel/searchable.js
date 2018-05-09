//searchable.js

		$(document).ready(function () {
			//auto complete selected event 
			

			function log(message) {
				$("<a href= '#'>").text(message).prependTo("#log");
				$("#log").scrollTop(0);
			}

			$("#search").autocomplete({
				source: function source(request, response) {
					$key = $("#search").val();
					if ($key.length != 0) {

						$.ajax({
							url: $url+"/searchResult/" + $key,
							type: "GET",

							data: {
								_token: "{{ csrf_token() }}"
							},
							success: function success(data) {
								console.log(data.list);
								response(data.list);
							}

						});
					} else {
						$("#search").autocomplete("close");
					}
				},
				minLength: 0,
				autoFocus: true,
				delay: 0,
				select: function select(event, ui) {
					log("Selected: " + ui.item.value + " aka " + ui.item.id);
					window.open($url+'/particularPluginDetailLike/'+ui.item.value);
				}
			});
		});
