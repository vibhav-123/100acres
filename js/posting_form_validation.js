function validate()
{ 
	//set error variables to false initially
	var error_owner_type=false,error_sellorrent=false,error_bedrooms=false,error_city=false,error_price=false,error_address=false,error_propertyimage=false;
	var len=document.posting_form.owner_type.length;
	var owner = '';
	var i;
	for(i=0;i<len;i++)
	{
		if(document.posting_form.owner_type[i].checked)
		{
			owner=document.posting_form.owner_type[i].value;
			break;
		}
	}
	if(owner=='')					//if any onwer type is not selected then set error variable to true
	{
		document.getElementById("error_owner_type").innerHTML='Please select an owner type';
		error_owner_type=true;
		
	}
	else
		document.getElementById("error_owner_type").innerHTML='';
	var intention = '';
	len=document.posting_form.sellorrent.length;
	for(i=0;i<len;i++)
	{
		if(document.posting_form.sellorrent[i].checked)
		{
			intention=document.posting_form.sellorrent[i].value;
			break;
		}
	}
	if(intention=='')			//if any intention is not selected then set error variable to true
	{
		
		document.getElementById("error_sellorrent").innerHTML='Please select an option';
		error_sellorrent=true;
	}
	else
		document.getElementById("error_sellorrent").innerHTML='';
	var address=document.posting_form.address.value;
	if( address=="")			//if address field is blank then set error variable to true
	{
		
		document.getElementById('error_address').innerHTML='Please write a valid address';
		error_address=true;
	}
	else
		document.getElementById('error_address').innerHTML='';
	var price=document.posting_form.price.value;
	var price_regex=/[(0-9)+.?(0-9)*]+/;
	if(!price.match(price_regex) || price=="")		//if price field is blank or it is not numeric then set error variable to true
	{
		document.getElementById('error_price').innerHTML='Enter a valid price';
		error_price=true;
	}
	else
		document.getElementById('error_price').innerHTML='';
	if(error_price==true ||  error_sellorrent==true || error_address==true || error_owner_type==true)   //if any of the error variable is set to true then return false
    	return false;
	else
    	return true;
}