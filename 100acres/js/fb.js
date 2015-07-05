
function statusChangeCallback(response) {
  console.log('statusChangeCallback');
  console.log(response);
  if (response.status === 'connected') {
    testAPI();
  } 
}


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function testAPI() {
  FB.api('/me', function(response) {
	  $.post("http://www.100acres.com/index.php/welcome/callFBLog",{
			name:response.name,
			email:response.email
		},function(data, status){
			alert(data);
			location.reload();
	});
  });
}

function validateFB(){
	FB.init({
		  appId      : '869669249787827',
		  cookie     : true,  // enable cookies to allow the server to access 
		                      // the session
		  xfbml      : true,  // parse social plugins on this page
		  version    : 'v2.2' // use version 2.2
	});
FB.login(function(response){
  testAPI();
});
}

