$(document).ready(function(){
$("#login_btn").click(function(){
  var username=$("#name").val();
  var password=$("#p").val();
  var act=$("#act").val(); 

  $.ajax({
   type: "POST",
   url: "/mainSite_dev.php/login/log",
   data: "name="+username+"&pwd="+password+"&act="+act,
   success: function(data){    
//console.log(data);
	if(data==1)
            {
		if(act=="http://www.100acres.com/mainSite_dev.php/form")
			location.href="http://www.100acres.com/mainSite_dev.php/form"; 
			else
			location.href="http://www.100acres.com/mainSite_dev.php/home";
	    }
	else 
	{
		//$("#login").html("incorrect username or password");
		alert("incorrect username1 or password");
	}
	
	return;
       }
  });
return false;
});
});

