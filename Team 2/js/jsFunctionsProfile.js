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
	 
	 else if(contact=="")
		 {
		 	alert("Contact number is required");
		 	document.getElementById("inputUserInfoContact").focus();
		 }
	 else if(!phoneRegex.test(contact))
		 {
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
		 		password:newPwrd,
		 		
		 	 }, 	
		 function(data,status)
		 {
 		data=data.replace(/(\r\r|\n|\r)/gm,"");
 		alert(data);
 		document.getElementById("editPassword").innerText="Edit Password";
 			 
 		
		});
	 $("#oldPwrdTr").hide();
	 $("#newPwrdTr").hide();
	 $("#reNewPwrdTr").hide();

		 }
	}
}
