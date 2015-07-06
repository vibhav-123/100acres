function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
    // Logged into your app and Facebook.
    testAPI();
     console.log("testAPI "+response.name);

    } else if (response.status === 'not_authorized') {
        console.log('login to app');
    // The person is logged into Facebook, but not your app.
    //document.getElementById('status').innerHTML = 'Please log ' +
    //'into this app.';
    } else {
      console.log('not logged in');
    // The person is not logged into Facebook, so we're not sure if
    // they are logged into this app or not.
    //document.getElementById('status').innerHTML = 'Please log ' +
    //'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
    });
  }

  function logout(response){
    console.log("logging out");
    if(response.status === 'connected'){
      console.log(response.status);
      FB.logout(response/*{
         // Person is now logged out
         console.log("inside fb.logout");
         console.log(response.status);
      }*/);
    }
  }

  function f2(){
    FB.getLoginStatus(function(response) {
    logout(response);
    });



  }

  window.fbAsyncInit = function() {
    FB.init({
    appId      : '496172473872656',  //you have to generate your own app id..
    xfbml      : true,
    version    : 'v2.3'
    });
    };


    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log(JSON.stringify(response));
      console.log('Successful login for: ' + response.name + response.email);

      //This is the link where you want to redirect after login....
      window.location.assign("http://100acres.com/user/login?username='"+response.name+"'&email='"+response.email+"'");
      });
    }

    