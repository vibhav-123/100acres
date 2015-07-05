function disable_enable_bedrooms()
{
	if(document.getElementById('res_or_comm').value == "commercial")
		document.getElementById('bedrooms').style.visibility="hidden";
	else
		document.getElementById('bedrooms').style.visibility="visible";
}

function validate()
{
	var city = document.getElementById("city").value,minprice = document.getElementById("minprice").value,
	maxprice = document.getElementById("maxprice").value,locality = document.getElementById("locality").value,
    error_msg = document.getElementById("error_msg"),no_ex=/^[0-9]/,string_ex=/^[a-zA-Z]/;
    flag=true;
    error_msg.innerHTML="";
	if(city=='')
    {
        error_msg.innerHTML="Please enter the city";
        flag=false;
    }
    else if(!string_ex.test(city)||(locality!=''&&!string_ex.test(locality)))
    {

        error_msg.innerHTML="Please enter valid name";
        flag=false;
    }
    if((minprice!=''&&!no_ex.test(minprice))||(maxprice!=''&&!no_ex.test(maxprice)))
    {

        error_msg.innerHTML="Please enter valid price";
        flag=false;
    }
    if((minprice!=''&&minprice<20000)||(maxprice!=''&&maxprice<20000))
    {
        error_msg.innerHTML="Price should be >Rs 20,000";
        flag=false;
    }
    return flag;
}