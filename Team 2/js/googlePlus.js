function onSignIn(googleUser) 
{
	var profile = googleUser.getBasicProfile();
    if(is_gplus_button_pressed=="1"){
        $.post('http://www.100acres.com/user/fb',
          {
            		email : profile.getEmail(),
            		name :profile.getName()
           },
            	function(data,status){
            		window.location = "http://www.100acres.com";
        	});
    }
}

function g_plus_click(){
    is_gplus_button_pressed=1;
}