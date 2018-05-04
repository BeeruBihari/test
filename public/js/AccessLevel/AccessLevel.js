

$(document).ready(function(){

	//showing / hiding member list
	$("#memberListDiv").hide();
	$("#pluginListTable").hide();
    $("#groupList").change(function(){
        var selectedgroupParti = $(".groupList option:selected").val();
        if(selectedgroupParti != "--- Select Type ---"){
        	$("#memberListDiv").show();
        	$("#pluginListTable").show();
        }else{
        	$("#memberListDiv").hide();
        	$("#pluginListTable").hide();
        }

    });
});