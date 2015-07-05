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
		if(this.min_price.value && !this.max_price.value)
	        { 
        	        alert("Please enter Max Price also."); 
                	this.max_price.focus();
	                return false;
        	} 
		if(!this.min_price.value && this.max_price.value)
	        { 
        	        alert("Please enter Min Price also."); 
                	this.min_price.focus();
	                return false;
        	}
		if(this.min_price.value > this.max_price.value)
	        { 
        	        alert("Max price should be greater than min price."); 
                	this.min_price.focus();
	                return false;
        	}
	        return true;
	});
});
