function check_validity()
{
	var city = document.getElementById("property_city").value,address = document.getElementById("address").value,
    BHK = document.getElementById("BHK").value,bathroom = document.getElementById("bathroom").value,
    balcony = document.getElementById("balcony").value,area = document.getElementById("area").value,
    unit = document.getElementById("unit").value,price = document.getElementById("price").value,
    error_msg = document.getElementById("validation_error"),no_ex=/^[0-9]+$/;
    flag=true;
    error_msg.innerHTML = "";
	if(city=="select_city")
    {
        error_msg.innerHTML = "Please select a city!";
        flag=false;
    }
    else if(address=="")
    {
        error_msg.innerHTML = "Please enter address!";
        flag=false;
    }
    else if(BHK=="select_BHK")
    {
        error_msg.innerHTML = "Please select no. of bedrooms!";
        flag=false;
    }
    else if(bathroom=="select_bathroom")
    {
        error_msg.innerHTML = "Please select no. of bathrooms!";
        flag=false;
    }
    else if(balcony=="select_balcony")
    {
        error_msg.innerHTML = "Please select no. of balconies!";
        flag=false;
    }
    else if(area==""||!no_ex.test(area))
    {
        error_msg.innerHTML = "Please enter valid area!";
        flag=false;
    }
    else if(unit=="select_unit")
    {
        error_msg.innerHTML = "Please select unit of area!";
        flag=false;
    }
    else if(price==""||!no_ex.test(price))
    {
        error_msg.innerHTML = "Please enter valid price!";
        flag=false;
    }  
    return flag;
}