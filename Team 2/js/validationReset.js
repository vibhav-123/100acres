function validateForgot()
			{
				var allOk=1;
				$("#error").html("");
				if($("#password").val()=="")
				{
					$("#error").html("Please Enter a Password");
					$("#password").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
					$("#password").focus();
					allOk=0;
				}
				if($("#repassword").val()!=$("#password").val())
				{
					$("#password").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
					$("#password").focus();
					$("#repassword").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
					$("#error").html("Passwords Do Not Match");
					allOk=0;
				}
				if(allOk==1)
				{
					var info = $("#info").val();
					var pwrd1 = $("#password").val();
					$.post('http://www.100acres.com/welcome/resetPassword',
					{
						userID : info,
						password :	pwrd1
					},
					function(data,status){
						data = data.replace(/(\r\n|\n|\r)/gm,"");
						if(data=="Success")
						{
							$("#message").html("Your password has been reset");
							$("#reset").hide(1);
							$("#mainPage").show(1);
							$("#password").hide(1);
					    	$("#repassword").hide(1);	
					    } 
					    else
					    {
							$("#error").html("There was an error resetting your password. Please try again later");
					   	}
					});
				}
			}
