function statusChangeCallback(a){console.log("statusChangeCallback");console.log(a);if(a.status==="connected"){testAPI()}}(function(e,a,f){var c,b=e.getElementsByTagName(a)[0];if(e.getElementById(f)){return}c=e.createElement(a);c.id=f;c.src="//connect.facebook.net/en_US/sdk.js";b.parentNode.insertBefore(c,b)}(document,"script","facebook-jssdk"));function testAPI(){FB.api("/me",function(a){$.post("http://www.100acres.com/index.php/welcome/callFBLog",{name:a.name,email:a.email},function(c,b){alert(c);location.reload()})})}function validateFB(){FB.init({appId:"869669249787827",cookie:true,xfbml:true,version:"v2.2"});FB.login(function(a){testAPI()})};