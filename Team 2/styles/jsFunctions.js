
$down=0;
$downBuySearch=0;
$downRentSearch=0;
$downPGSearch=0;
$mode="";


function showBuySearch()
{
		$("#loginReg").hide(150);
		$("#cover").slideUp(149);
		$("#regLog").show(1);
		$("#login").hide(1);
		$("#register").hide(1);
		
		$("#searchPGForm").hide();
		$("#searchRentForm").hide();
		$downRentSearch=0;
		$downPGSearch=0;
		$mode="buy";
		$("#buttonBuyMain").css("background-color","#00BFFF");
		$("#buttonRentMain").css("background-color","white");
		$("#buttonPGMain").css("background-color","white");
		if($downBuySearch==0)
			{
				$("#searchBuyForm").slideDown();
				$downBuySearch=1;
			}
		else
			{
				$("#searchBuyForm").slideUp();
				$downBuySearch=0;
			}
}


function showRentSearch()
{
		$("#loginReg").hide(150);
		$("#cover").slideUp(149);
		$("#regLog").show(1);
		$("#login").hide(1);
		$("#register").hide(1);
		
		$("#searchPGForm").hide();
		$("#searchBuyForm").hide();
		$downBuySearch=0;
		$downPGSearch=0;
		$mode="rent";
		
		$("#buttonRentMain").css("background-color","#00BFFF");
		$("#buttonBuyMain").css("background-color","white");
		$("#buttonPGMain").css("background-color","white");
	
		if($downRentSearch==0)
			{
				$("#searchRentForm").slideDown();
				$downRentSearch=1;
			}
		else
			{
				$("#searchRentForm").slideUp();
				$downRentSearch=0;
			}
}


function MyFunc()
{
		
	alert("in myfunc() in jsfunction.js");
	$.post('http://www.100acres.com/index.php/property_c/postadvert',{ }, 	function(data,status) 	{
	    		
	    		data=data.replace(/(\r\r|\n|\r)/gm,"");
	    		if(data=="failedLogin")
	    		{
	    				showAll();	
	    		} 
	    		
			});
		}
	

function showPGSearch()
{
		$("#loginReg").hide(150);
		$("#cover").slideUp(149);
		$("#regLog").show(1);
		$("#login").hide(1);
		$("#register").hide(1);
		
		$("#searchBuyForm").hide();
		$("#searchRentForm").hide();
		$downBuySearch=0;
		$downRentSearch=0;
		$mode="pg;"			
		$("#buttonPGMain").css("background-color","#00BFFF");
		$("#buttonRentMain").css("background-color","white");
		$("#buttonBuyMain").css("background-color","white");
	
		if($downPGSearch==0)
			{
				$("#searchPGForm").slideDown();
				$downPGSearch=1;
			}
		else
			{
				$("#searchPGForm").slideUp();
				$downPGSearch=0;
			}
}



function bodyLoad()
{
	
}


$("#buttonName").click(function() 
{
    $("#dropdown").toggleClass(".dropdown");
});



function showUserProfile(viewProfilePath)
{
	
}

function showProfileOptions()
{
	
	
	if($down==0)
	{
		$("#dropdown").slideDown(150);
		$down=1;
		
	}
	else
	{
		$("#dropdown").slideUp(150);
		$down=0;
	}
	
}


function editPersonalInfo()
{
	if( document.getElementById("editPersonal").innerText!="Save Changes")
	{
		 document.getElementById("inputUserInfoName").readOnly = false;
		 document.getElementById("inputUserInfoEmail").readOnly = false;
		 document.getElementById("inputUserInfoContact").readOnly = false;
		 document.getElementById("inputUserInfoName").focus();
		 document.getElementById("editPersonal").innerText="Save Changes"; 
	}
	else
	{
		
		
		
	 document.getElementById("inputUserInfoName").readOnly = true;
	 document.getElementById("inputUserInfoEmail").readOnly = true;
	 document.getElementById("inputUserInfoContact").readOnly = true;
	 document.getElementById("editPersonal").innerText="Edit Information";
	 name=document.getElementById("inputUserInfoName").value;
	 email=document.getElementById("inputUserInfoEmail").value;
	 contact=document.getElementById("inputUserInfoContact").value;
	 var phoneRegex = /^\d{10}$/;
	 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	 if(name=="")
		 {
		 	alert("Name is required");
		 	document.getElementById("inputUserInfoName");
		 	
		 }
	 else if (email=="")
		 {
			alert("Email is required");
		 	document.getElementById("inputUserInfoEmail").focus();
		 
		 }
	 else if (!emailRegex.match(email))
		 {
		 	alert("Enter a valid email");
		 	document.getElementById("inputUserInfoEmail").focus();
		 }
	 else if(contact=="")
		 {
		 	alert("Contact number is required");
		 	document.getElementById("inputUserInfoContact").focus();
		 }
	 else if(phoneRegex.match(contact))
		 {
		 	alert("Enter a 10 digit phone number");
		 	document.getElementById("inputUserInfoContact").focus();
		 }
	 
	 $.post('http://www.100acres.com/index.php/user/updateuserinfo',
			 {
		 		newname:name,
		 		newemail:email,
		 		newcontact:contact
		 	 }, 	
		 function(data,status)
		 {
 		
 		data=data.replace(/(\r\r|\n|\r)/gm,"");
 		
 		
		});
	}
}

function editPassword()
{
	if( document.getElementById("editPassword").innerText!="Save Password")
	{
		
		$("#oldPwrdTr").show();
		$("#newPwrdTr").show();
		$("#reNewPwrdTr").show();
		document.getElementById("oldPassword").focus();
		document.getElementById("editPassword").innerText="Save Password"; 
	}
	else
	{
			 
	 oldPwrd=document.getElementById("oldPassword").value;
	 newPwrd=document.getElementById("newPassword").value.toString();
	 reNewPwrd=document.getElementById("reNewPassword").value;
	 if(oldPwrd=="")
		 {
		 	alert("Current Password is required!");
		 	document.getElementById("oldPassword").focus();
		 	document.getElementById("newPassword").value="";
		 	document.getElementById("reNewPassword").value="";
		 	
		 }
	 else	 if(newPwrd=="")
	 {
	 	alert(" New Password is required!");
	 	document.getElementById("newPassword").focus();
	 	document.getElementById("newPassword").value="";
	 	document.getElementById("reNewPassword").value="";
	 	
	 }

	 else 
	 if(newPwrd!=reNewPwrd)
		 {  
		 	alert('Passwords dont match. Enter again');
		 	document.getElementById("newPassword").value="";
		 	document.getElementById("reNewPassword").value="";
		 	document.getElementById("newPassword").focus();
		 	
		 }
	 else
		 {
	 
	 $.post('http://www.100acres.com/index.php/user/verifyPassword',
			 {
		 		oldPassword:oldPwrd,
		 		newPassword:newPwrd,
		 		
		 	 }, 	
		 function(data,status)
		 {
 		data=data.replace(/(\r\r|\n|\r)/gm,"");
 		document.getElementById("editPassword").innerText="Edit Password";
 			 
 		
		});
	 $("#oldPwrdTr").hide();
	 $("#newPwrdTr").hide();
	 $("#reNewPwrdTr").hide();

		 }
	}
}



function property_type_post()
{
    $("formPost_SellRent").hide(1);
}

    	
function hideSearch()
{
	$("#loginReg").hide(150);
	$("#cover").hide(1);
	$("#formSearch_BuyRent").slideUp();
}


function showLogin()
{
	$("#login").show(1);
	$("#register").hide(1);
	$("#forgotPassword").hide(1);
	resetForgot();
	$("#main").hide(1);
}
function showRegister()
{
    $("#login").hide(1);
    $("#main").hide(1);
    $("#register").show(1);
    
}


function showMain()
{
	$("#login").hide(1);
	$("#register").hide(1);
	$("#main").show(1);
	$("#forgotPassword").hide(1);
	resetForgot();
	blankLoginErrors();
	blankRegisterErrors();
}

function resetForgot()
{
	$("#email_forgot").css("visibility","visible");
	$("#reset_password").show(1);
	$("#email_forgot").val("");
	$("#forgotChangable").html("Please Enter Your Registered Email-Id");
}

function showAll()
{
	$("#loginReg").show(150);
	$("#cover").slideDown(149);
	$("#main").show(1);
	$("#welcome").hide(1);
	$("#searchContainer").hide(1);
	$("#searchContainer").hide(1);
	$("#formSearch_BuyRent").hide(1);
}

function showForgot()
{
	$("#login").hide(1);
    $("#main").hide(1);
    $("#forgotPassword").show(1);
}

function forgotSubmit()
{
	var email1=$("#email_forgot").val();
	$.post('http://www.100acres.com/user/forgotPasswordInit',
			{
				email : email1,
			},
			function(data,status){
				$("#email_forgot").css("visibility","hidden");
				$("#forgotChangable").html(data);
				$("#reset_password").hide(1);
			});
}

function hideAll()
{
	$("#loginReg").hide(150);
	$("#cover").slideUp(149);
	$("#email_forgot").val("");
	blankLoginErrors();
	blankRegisterErrors();
	resetRegisterStyles();
	resetLoginStyles();
	$("#welcome").show(1);
	$("#regLog").show(1);
	$("#forgotPassword").hide(1);
	$("#login").hide(1);
	$("#register").hide(1);
	$("#login_form").trigger("reset");
	$("#register_form").trigger("reset");
	resetForgot();
	$("#searchContainer").show(1);
	
}

function blankLoginErrors()
{
	$("#email_error_log").text("");
	$("#pwrd_error_log").text("");
}
function blankRegisterErrors()
{
	$("#email_error_reg").text("");
	$("#name_error_reg").text("");
	$("#contact_error_reg").text("");
	$("#pwrd_error_reg").text("");
	$("#repwrd_error_reg").text("");
	$("#name_error_reg").text("");
}

function resetRegisterStyles()
{
	$("#pwrd_reg").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
	$("#name_reg").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
	$("#repwrd_reg").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
	$("#email_reg").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
	$("#name_reg").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
	$("#contact_reg").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
}
function resetLoginStyles()
{
	$("#email_login").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
	$("#pwrd_login").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
}

$(document).keyup(function(e) {
    if ( e.keyCode === 27 ) // esc
        hideAll();
});