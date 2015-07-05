var show_user=0;
var is_gplus_button_pressed=0;

function forgot(){
	$('#forgotdiv1').slideDown("slow");
	$('#forgotdiv2').slideDown("slow");
	$("#loginreg2").slideUp("slow");
	$("#loginreg1").slideUp("slow");
}

function forgotPassword(){
	var okay=1;
	var f_name=$('#f_name').val();
    if(f_name=='')
    	{
    		$('#f_error').html("*Can't be left Empty");
    		okay=0;
    	}
    else if(!(f_name.match(/^[a-z0-9_-]{3,16}$/)))
    	{
    		$('#f_error').html("*Invalid UserName");
    		okay=0;
    	}
    else
    	{
    		$('#f_error').html("");
    	}
    
	if(okay==1){
		$.post("http://www.100acres.com/index.php/welcome/forgotMail",{
			"uname":f_name
			},function(data, status){
					alert(data);
					});
	}
}

function showLogin(){
	$("#fader").slideDown("slow");
	$("#loginreg2").slideDown("slow");
	$("#loginreg1").slideDown("slow");
}

function hideLogin1(){
	$("#loginreg1").slideUp("slow");
	$("#fader").slideUp("slow");
	$("#loginreg2").slideUp("slow");
	$('#rname').val("");
	$('#remail').val("");
	$('#ruser').val("");
	$('#rpass').val("");
	$('#rcpass').val("");
	$('#luser').val("");
	$('#lpass').val("");
	$('#s1').html("");
	$('#s2').html("");
	$('#s3').html("");
	$('#s4').html("");
	$('#s5').html("");
	$('#l1').html("");
	$('#l2').html("");
}

function hideLogin2(){
	$('#forgotdiv1').slideUp("slow");
	$('#forgotdiv2').slideUp("slow");
	$("#loginreg1").slideDown("slow");
	$("#fader").slideDown("slow");
	$("#loginreg2").slideDown("slow");
	$('#rname').val("");
	$('#remail').val("");
	$('#ruser').val("");
	$('#rpass').val("");
	$('#rcpass').val("");
	$('#luser').val("");
	$('#lpass').val("");
	$('#s1').html("");
	$('#s2').html("");
	$('#s3').html("");
	$('#s4').html("");
	$('#s5').html("");
	$('#l1').html("");
	$('#l2').html("");
}

function validatereg(){
	
	var nam=$('#rname').val();
	var mail=$('#remail').val();
	var usr=$('#ruser').val();
	var pass=$('#rpass').val();
	var cpass=$('#rcpass').val();
	//var nameRegex=/^[a-zA-Z]+$/; 
	var nameRegex=/^[a-zA-Z ]+$/;
	//var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var emailRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var usernameRegex = /^[a-z0-9_-]{3,16}$/;
	var okay=1;
	
	if(nam.match(nameRegex)){
		$('#s1').html("");
	}
	else if(nam=='')
		{
			$('#s1').html("*Can't be left empty");
			okay=0;
		}
	else{
		$('#s1').html("*Invalid Name");
		okay=0;
	}
	if(mail.match(emailRegex)){
		$('#s2').html("");
	}
	else if(mail=='')
	{
		$('#s2').html("*Can't be left empty");
		okay=0;
	}
	else{
		$('#s2').html("*Invalid Email");
		okay=0;
	}
	if(usr.match(usernameRegex)){
		$('#s3').html("");
	}
	else if(usr=='')
	{
		$('#s3').html("*Can't be left empty");
		okay=0;
	}
	else{
		$('#s3').html("*3-16 Characters");
		okay=0;
	}
	if(pass=='')
		{
			$('#s4').html("*Can't be left empty");
			okay=0;
		}
	if(cpass=='')
	{
		$('#s5').html("*Can't be left empty");
		okay=0;
	}
	if(pass==cpass && pass!='' && cpass!=''){
		$('#s5').html("");
	}
	else if(pass!=cpass){
		$('#s5').html("*Password not match");
		okay=0;
	}
	if(okay==1){
			$.post("http://www.100acres.com/index.php/welcome/callRegAPI",{
				name:nam,
				uname:usr,
				email:mail,
				password:pass
			},function(data, status){
			    if(data == 1)
				 		alert("Verification Mail sent successfully please check your inbox");
				 		
				    else if(data == 0)
				 		alert("oops web service error..... Register Again");
				 		
				    else if(data == -2)
				 		alert("Mail sending failed ,oops some error... check your email id and register again");
				 		
				 	else
				 		alert(data); 	
		});
	}
}

function validateLog(){
	var usr=$('#luser').val();
	var pass=$('#lpass').val();
	var okay=1;
	if(usr==''){
		$('#l1').html("*Required");
		okay=0;
	}
	else{
		$('#l1').html("");
	}
	if(pass==''){
		$('#l2').html("*Required");
		okay=0;
	}
	else{
		$('#l2').html("");
	}

	if(okay==1){
			$.post("http://www.100acres.com/index.php/welcome/callLogAPI",{
				uname:usr,
				password:pass
			},function(data, status){
	    	 if(data == 1){
	    		 alert("Verification Mail sent successfully please check your inbox");
	    		 
	    	 }else if(data == -2){
	    		 alert("Mail sending failed ,oops some error... check your email id and register again");
	    	 }else{
	    		 alert(data);
	    		 if(data = "login success")
	    		 location.reload();
	    	 }
	    	 
			
		});
	}
	
}

$(document).ready(function(){
	$("#f_name").blur(function(){
    	var f_name=$('#f_name').val();
        if(f_name=='')
        	{
        		$('#f_error').html("*Can't be left Empty");
        	}
        else if(!(f_name.match(/^[a-z0-9_-]{3,16}$/)))
        	{
        		$('#f_error').html("*Invalid UserName");
        	}
        else
        	{
        		$('#f_error').html("");
        	}
    });
    $("#rname").blur(function(){
    	var name=$('#rname').val();
        if(name=='')
        	{
        		$('#s1').html("*Can't be left Empty");
        	}
        else if(!(name.match(/^[a-zA-Z ]*$/)))
        	{
        		$('#s1').html("*Invalid Name");
        	}
        else
        	{
        		$('#s1').html("");
        	}
    });
    $("#remail").blur(function(){
    	var email=$('#remail').val();
        if(email=='')
        	{
        		$('#s2').html("*Can't be left Empty");
        	}
        else if(!(email.match(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i)))
    	{
    		$('#s2').html("*Invalid Email");
    	}
        else
        	{
        		$('#s2').html("");
        	}
    });
    $("#ruser").blur(function(){
    	var user=$('#ruser').val();
        if(user=='')
        	{
        		$('#s3').html("*Can't be left Empty");
        	}
        else if(!(user.match(/^[a-z0-9_-]{3,16}$/)))
    	{
    		$('#s3').html("*Invalid UserName");
    	}
        else
        	{
        		$('#s3').html("");
        	}
    });
    $("#rpass").blur(function(){
    	var pass=$('#rpass').val();
        if(pass=='')
        	{
        		$('#s4').html("*Can't be left Empty");
        	}
        else
        	{
        		$('#s4').html("");
        	}
    });
    $("#rcpass").blur(function(){
    	var cpass=$('#rcpass').val();
    	var pass=$('#rpass').val();
        if(cpass=='')
        	{
        		$('#s5').html("*Can't be left Empty");
        	}
        else if(pass!=cpass)
        	{
        		$('#s5').html("*Password not match");
        	}
        else
        	{
        		$('#s5').html("");
        	}
    });
    $("#luser").blur(function(){
    	var luser=$('#luser').val();
        if(luser=='')
        	{
        		$('#l1').html("*Required");
        	}
        else
        	{
        		$('#l1').html("");
        	}
    });
    $("#lpass").blur(function(){
    	var lpass=$('#lpass').val();
        if(lpass=='')
        	{
        		$('#l2').html("*Required");
        	}
        else
        	{
        		$('#l2').html("");
        	}
    });

});

function goToHome(){
	window.location.assign("http://www.100acres.com/index.php/welcome/gotoHome");
}

function goToSell(){
	window.location.assign("http://www.100acres.com/index.php/welcome/gotoSell");
}

function goToHire(){
	window.location.assign("http://www.100acres.com/index.php/welcome/gotoHire");
}

function goToProfile(){
	window.location.assign("http://www.100acres.com/index.php/welcome/gotoProfile");
}

function goToContact(){
	window.location.assign("http://www.100acres.com/index.php/welcome/gotoContact");
}

function goToPostings(){
	window.location.assign("http://www.100acres.com/index.php/welcome/gotoPostings");
}

function showDetailDiv(){
	if(show_user==0){
		$("#userdetail").slideDown("fast");
		show_user=1;
	}
	else{
		$("#userdetail").slideUp("fast");
		show_user=0;
	}

}

function logout(flag){
	$.post("http://www.100acres.com/index.php/welcome/destroySession",{},function(data, status){
	 if(flag=='u'){
		 location.replace("http://www.100acres.com/index.php/welcome/gotoHome");
	 }
	 else
		 location.reload();
	});	
}

function onSignIn(googleUser) {
	var profile = googleUser.getBasicProfile();
	if(is_gplus_button_pressed=="1"){
      $.post("http://www.100acres.com/index.php/welcome/callFBLog",{
		uname:profile.getId(),
		name:profile.getName(),
		email:profile.getEmail()
	},function(data, status){
		location.reload();
   });
	}
}

function g_plus_click(){
	is_gplus_button_pressed=1;
}

