<!--User Registration page-->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel=stylesheet type="text/css" href="http://localhost/codeigniter/css/form.css">
</head>
<body>
<!--If message is set then echo that to screen-->
<?php if (isset($message) ) { ?>
<CENTER><h3 style="color:green;"><?php echo $message; ?></h3></CENTER><br>
<?php } ?>
<div id="nav">
      <ul>
      <li class="blue"><a href="http://www.100acres.com/Homenew">Home</a></li>
      </ul>
</div>
<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title">User Registration Form</h2>
      <p class="head_para">Create your FREE account</p>
    </div>
    <!--Form  start-->
    <div id="form_name">
    <form action="http://www.100acres.com/insert_ctrl" method="POST" id="register-form" name="register_form" onsubmit="return validate()">
      <div class="firstnameorlastname">
          NAME: <br>
          <input type="text" name="Name" value="" placeholder="Enter your name"  class="input_name" ><br>
          <span id="error_name"></span>       
      </div>
      <div id="email_form">
         EMAIL:<br>
        <input type="email" name="Email" value=""  placeholder="Your Email" id="Email" class="input_email"><br>
        <span id="error_email"></span>  
      </div>
      <div id="Re_email_form">
       MOBILE: <br>
       <input type="text" name="Mobile" value=""  placeholder="Enter mobile no. " class="input_Re_email"><br>
       <span id="error_mobile"></span>  
      </div>
      <div id="password_form">
        PASSWORD:
        <input type="password" name="Password" value=""  placeholder="New Password" class="input_password"><br>
        <span id="error_password"></span>  
      </div>
      <div id="password_form">
       CONFIRM PASSWORD:
        <input type="password" name="Confirm_Password" value=""  placeholder="Confirm Password" class="input_password"><br>
        <span id="error_confirm_password"></span>  
      </div>
      <div>
        <p id="sign_user"> <input type="submit" value="Create account"> </p>
      </div>
      <div>
        <p id="sign_user"> Already a user? </p>
        <br>
        <!--If user is already registered then redirect to Login page-->
      <center> <a href="http://www.100acres.com/Login">Sign in</a> </center>
      </div>
     </form>
    </div>
    </div>
</div>
 <script src="http://www.100acres.com/js/form.js"></script>
</body>
</html>
