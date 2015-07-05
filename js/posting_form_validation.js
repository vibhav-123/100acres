function validate()
{ 
	
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
	if(owner=='')
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
	if(intention==''){
		
		document.getElementById("error_sellorrent").innerHTML='Please select an option';
		error_sellorrent=true;
	}
	else
		document.getElementById("error_sellorrent").innerHTML='';
	//console.log(posting_form);
	var address=document.posting_form.address.value;
	//var address_regex=/[(0-9)+.?(0-9)*]+/;
	if( address==""){
		
		document.getElementById('error_address').innerHTML='Please write a valid address';
		error_address=true;
	}
	else
		document.getElementById('error_address').innerHTML='';
	var price=document.posting_form.price.value;
	var price_regex=/[(0-9)+.?(0-9)*]+/;
	if(!price.match(price_regex) || price==""){
		document.getElementById('error_price').innerHTML='Enter a valid price';
		error_price=true;
	}
	else
		document.getElementById('error_price').innerHTML='';
	if(error_price==true ||  error_sellorrent==true || error_address==true || error_owner_type==true)
    	return false;
	else
    	return true;
//return false;
}