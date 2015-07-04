function validate()
{
	
	
	var max_price = document.searchform.maxprice.value;
	var min_price = document.searchform.minprice.value;
	var error_min=false,error_max=false;
	if(max_price=="" ||  !max_price.match(/^[0-9]+$/))
	{
		 document.getElementById('error_max').innerHTML='Enter a valid Maximum price';
		 error_max=true;
	}
	else
	{
		document.getElementById('error_max').innerHTML='';
	}
	if(min_price=="" || !min_price.match(/^[0-9]+$/))
	{
		document.getElementById('error_min').innerHTML='Enter a valid Minimum price';
		error_min=true;
	}
	else
	{
		document.getElementById('error_min').innerHTML='';
	}
    if(error_min==true || error_max==true)
    return false;
	else
    return true;

}