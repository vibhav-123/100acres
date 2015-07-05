function viewPhoneNumber(pid,modeOfProperty)
{
	$.get("http://www.100acres.com/index.php/user/checkSessionSet",
		function(data,status){
			data=data.replace(/(\r\r|\n|\r)/gm,"");
			if(data=="Success")
			{				
				$.post("http://www.100acres.com/property_c/getNumber",
				{
					postID : pid,		
					mode   : modeOfProperty
				},
				function(data,success)
				{					
					if(data != "Error")
					{
						alert("The phone number is :"+data);					
					}
					else
						alert("There was an error in getting the number");
				});
			}
			else
			{
				showTempRegister(pid,modeOfProperty);
			}
		});
}




function showTempRegister(pid,modeOfProperty)
{
	$("#tempRegister").show(150);
	$("#cover").show(149);
	$("#pidDiv").val(pid);
	$("#modeDiv").val(modeOfProperty);
}


function submitTempRegister()
{
	var allOk=1;	
	if($("#email_temp").val()=="")
	{
		allOk=0;
	}
	
	if($("#email_temp").val()=="")
	{
		allOk=0;
	}

	if($("#email_temp").val()=="")
	{
		allOk=0;
	}
	
	if(allOk==1)
	{
		$.post("http://www.100acres.com/index.php/user/registerTempUser",
		{
			name: $("#name_temp").val(),
			email: $("#email_temp").val(),
			contact: $("#contact_temp").val()
		},
		function(data,status)
		{
			data=data.replace(/(\r\r|\n|\r)/gm,"");
			if(data!="Error"){			
			$.post("http://www.100acres.com/property_c/getNumber",
			{
				postID : $("#pidDiv").text(),		
				mode   : $("#modeDiv").text(),
				userID : data
			},
			function(data,success)
			{					
				if(data != "Error")
				{
					alert("The phone number is :"+data);	
					hideAllTemp();				
				}
				else
					alert("There was an error in getting the number");
			});
			}
			else
				alert("There was an error in getting the number" + data);
		});
			
	}
}
function hideAllTemp()
{
	$("#tempRegister").hide(150);
	$("#cover").slideUp(149);
	
}

$(document).keyup(function(e) {
	if (e.keyCode === 27) // esc
		hideAllTemp();
});