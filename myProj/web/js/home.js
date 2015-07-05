$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });

	$( "#target" ).submit(function( event ) {
        	if(this.keyword.value == "")
	        { 
        	        alert("Please enter keyword (city/locality)."); 
                	this.keyword.focus();
	                return false;
        	} 
	        return true;
	});
});
