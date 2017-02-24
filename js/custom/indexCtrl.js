$(document).ready(function(){
    $('#licForm').submit(function(){
    	var txtLic = $('#txtLic').val();
    	if(txtLic == null || txtLic == ""){
    		alert("You must enter value in field.");
    		return false;
    	}else{
    		var i = 0;
    		for(i=0;i<txtLic.length;i++){
    			if(txtLic.charAt(i) == " ") {
    				alert("Not allow space");
    				return false;
    			}
    		}
    	}
    });
});