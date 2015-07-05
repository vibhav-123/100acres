var code;
function validate_login()
{
 	var Email=document.login_form.email.value;  //v1->email
 	var password=document.login_form.pass.value;//v2->password
	
 	if(Email==""||password=="")
 	{
		document.getElementById("error").innerHTML = "Fill the form properly.";
		document.getElementById("error").focus();
 		return false;
 	}
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Email)))
	{ 
		document.getElementById("error").innerHTML = "Not a valid e-mail address";
		document.getElementById("error").focus();	    	
	    	return false;
	} 
	
	
	else
	{

		var url="http://www.100acres.com/index.php/welcome/login/"+Email+"/"+password;
		$.get(url,function(data,status)
		{
			
			if(data=="Success")
			{
				document.getElementById("error").innerHTML = "You have successfully logged in!";
				document.getElementById("error").focus();	    	
				window.parent.location.href="http://www.100acres.com/index.php/welcome/personal_view";
			}
			else
			{
				document.getElementById("error").innerHTML = "Incorrect email-id or password.";
				document.getElementById("error").focus();	    		
			}
		}); 
	}	
   
}


function validate_register()
{

	var userName=document.register_form.user_name.value;  //changing all names of variables
	var Email=document.register_form.email.value;
	var password=document.register_form.pass.value;
	var confirm_password=document.register_form.cpass.value;
	var phone_num=document.register_form.phone.value;
	var answer=document.register_form.ans.value;
	var security_ques=document.register_form.ques.value;
	var letters=/^[a-zA-Z]+$/; 
	var nums=/^[0-9]+$/;
	
	if(userName==""||Email==""||password==""||confirm_password==""||phone_num==""||answer=="")
	{
		document.getElementById("error").innerHTML = "Fill the form properly.";	 	
		document.getElementById("error").focus();	    	
	 	return false;
	}

	if(!userName.match(letters))   
	{  
		document.getElementById("error").innerHTML = "Name must have only letters.";
		document.getElementById("error").focus();	    	
		return false;  
	}
	
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Email)))
	{ 
		document.getElementById("error").innerHTML = "You have entered an invalid email address!";
		document.getElementById("error").focus();	    	
	    	return (false);
	}    
	
	if(password.length<7)
	{
		document.getElementById("error").innerHTML = "Password length too short.(7 is minimum).";
		document.getElementById("error").focus();	    	
		return false;
		
	}
	if(password!=confirm_password)
	{
		document.getElementById("error").innerHTML = "Verified password not entered correctly.";
		document.getElementById("error").focus();	    	
		return false;
	}
	
	if(!phone_num.match(nums))   
	{  
		document.getElementById("error").innerHTML = "Phone number must have only digits";
		document.getElementById("error").focus();	    	
		return false;  
	}

	if(phone_num.length!=10)
	{
		document.getElementById("error").innerHTML = "Invalid mobile number.";
		document.getElementById("error").focus();	    	
		return false; 
	}
	
	if(answer.length<2)
	{
		document.getElementById("error").innerHTML = "Answer length too short.(2 is minimum)";
		document.getElementById("error").focus();	    	
		return false;
			
	}
	else
	{
		
		document.getElementById("error").style.display="none";
		var url1="http://www.100acres.com/index.php/welcome/registeration/"+Email;
		$.get(url1,function(data,status)
		{

			if(data=="email already exists!")
			{
				document.getElementById("error").style.display="block";
				document.getElementById("error").innerHTML="Cannot complete registeration. Email adready exists!";
				document.getElementById("error").focus();
				document.getElementById("register_form").reset();
			}	
			
			else if(data=="Mail sending failed :(")
			{
				document.getElementById("error").style.display="block";
				document.getElementById("error").innerHTML = "Mail sending failed. Please try again later";
				document.getElementById("error").focus();
				document.getElementById("register_form").reset();	    	
			}
			else
			{
				code=data;
				document.getElementById("vv1").style.display = "block";
				document.getElementById("vv2").style.display = "block";
				document.validate_data.verify_code.focus();
			}
			
		}); 
		
		
 		
	}
		
}

function validate_verify()
{
	var v11=document.validate_data.verify_code.value;
	var v1=document.register_form.user_name.value;
	var v2=document.register_form.email.value;
	var v3=document.register_form.pass.value;
	var v5=document.register_form.phone.value;
	var v7=document.register_form.ques.value;
	var v6=document.register_form.ans.value;
	
	
	if(v11=="")
	{
		document.getElementById("error1").innerHTML = "Enter the Verification code.";
		document.getElementById("error1").focus();	    	
	 	
	 	return false;
	}
	if(v11!=code)
	{
		document.getElementById("error1").innerHTML = "Wrong verification code entered.";
		document.getElementById("error1").focus();
		document.getElementById("validate_data").reset();	    	
	
	 	return false;
	}
	else 
	{
		
		var url1="http://www.100acres.com/index.php/welcome/verify/"+v1+"/"+v2+"/"+v3+"/"+v5+"/"+v7+"/"+v6;	
			 		
		$.get(url1,function(data,status)
		{
			if(data=="Success")
			{
				document.getElementById("error1").innerHTML = "Successfully Registered";
				document.getElementById("error1").focus();
				document.getElementById("register_form").reset();	  
			}

			else
			{
				document.getElementById("error1").innerHTML = "Registration not successfull due to server issues. Please try again";
				document.getElementById("error1").focus();	
				document.getElementById("register_form").reset(); 
								   	
			}


		});
		
		document.getElementById("vv1").style.display = "none";
		document.getElementById("vv2").style.display = "none";
		
	}
	
}

function validate_post_property()
{

	var v1=document.formPost.address.value;
	var v2=document.formPost.price.value;
	var v3=document.formPost.user.value;
	var v4=document.formPost.sell_rent.value;
	var v5=document.formPost.prop_type.value;
	var v6=document.formPost.city.value;
	var v7=document.formPost.bedrooms.value;
	var v8=document.formPost.image.value;
	var v9=document.formPost.description.value;
	var v10=document.formPost.area.value;
	var nums=/^[0-9]+$/;
	
	
	
	if(v1==""||v2==""||v8==""||v9=="")
	{
		document.getElementById("error").innerHTML = "Fill the form properly.";
		document.getElementById("error").focus();	    	
	 	
	 	return false;
	}

	if(v4=="Rent"&&v2<5000)   
	{  
		document.getElementById("error").innerHTML = "Minimum price of property must be 5000.";
		document.getElementById("error").focus();	    	
		
		return false;  
	}

	if(v4=="Sell"&&v2<500000)   
	{  
		document.getElementById("error").innerHTML = "Minimum price of property must be 500000.";
		document.getElementById("error").focus();	    	
		
		return false;  
	}

	if(!v2.match(nums))   
	{  
		document.getElementById("error").innerHTML = "Price must have only digits.";
		document.getElementById("error").focus();	    	
		   
		return false;  
	}
	
	
	else{
		
		var vv=document.getElementById("fileToUpload").files[0].name;

		var ss="http://www.100acres.com/Properties/";
		var res=ss+vv;
		var res = encodeURIComponent(res);

		$.post("http://www.100acres.com/index.php/process/post_property",
        	{
         		agent_type:v3 ,
			sell_rent:v4,
			prop_type:v5,
         		city: v6,
			address:v1,
			bedrooms:v7,
			price:v2,
			image:res,
			area:v10,
			description:v9
        },
        function(data,status)
	{
		if(data=="Success")
		{
			document.getElementById("error").innerHTML = "Property posted successfully.";
			document.getElementById("error").focus();
		}	    	
		else
		{
			document.getElementById("error").innerHTML = "Property posted successfully.";
			document.getElementById("error").focus();
		}	    	
        });
	}


}


function validate_post_property1(myRadio)
{
	var v11=myRadio.value;

	
	if(v11=="Residential")
	{
		
		document.getElementById("bed").style.display = "block";
		
		document.getElementById("ar").style.display = "none";
		
	}
	if(v11=="Commercial")
	{
		
		document.getElementById("bed").style.display = "none";
		
		document.getElementById("ar").style.display = "block";
		
	}
}

function validate_search1(myRadio)
{
	var v11=myRadio.value;

	
	if(v11=="Buy")
	{
		
		document.getElementById("buy_price").style.display = "block";
		
		document.getElementById("rent_price").style.display = "none";
		
	}
	if(v11=="Rent")
	{
		document.getElementById("buy_price").style.display = "none";
		
		document.getElementById("rent_price").style.display = "block";
	}
}


function validate_search2(myRadio)
{
	var v11=myRadio.value;

	
	if(v11=="Residential")
	{
		
		document.getElementById("area").style.display = "none";
		
		document.getElementById("BHK").style.display = "block";
	
		
	}
	if(v11=="Commercial")
	{
		
		document.getElementById("area").style.display = "block";
		
		document.getElementById("BHK").style.display = "none";
	}
}

function validate_search3()
{
	var v1=document.search_form.min_buy_area.value;
	var v2=document.search_form.max_buy_area.value;
	var v3=document.search_form.prop_type.value;
	var v4=document.search_form.location.value;
	var v5=document.search_form.buy_rent.value;
	var v6=document.search_form.city.value;
	var v7=document.search_form.bedrooms.value;
	var v8=document.search_form.min_buy_price.value;
	var v9=document.search_form.max_buy_price.value;
	var v10=document.search_form.min_rent_price.value;
	var v11=document.search_form.max_rent_price.value;


	var nums=/^[0-9]+$/;
	if(v3=="Commercial")
	{
		if(v1=="")
		{
			document.getElementById("error").innerHTML = "Enter minimum area.";
			document.getElementById("error").focus();	    	
			
			return false;
		}
		if(v2=="")
		{
			document.getElementById("error").innerHTML = "Enter maximum area.";
			document.getElementById("error").focus();	    	
			
			return false;
		}
		if(!v1.match(nums)||!v2.match(nums))
		{
			document.getElementById("error").innerHTML = "Minimum and maximum area must be digits.";
			document.getElementById("error").focus();	    	
			
			return false;
		}
	}
	if(v4=="")
	{
		document.getElementById("error").innerHTML = "Enter Location.";
		document.getElementById("error").focus();	    	
		
		return false;
	}
}


