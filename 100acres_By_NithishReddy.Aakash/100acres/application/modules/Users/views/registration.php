<html>
<head>Registration Form</head>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>
<div style="float:right; margin-left:300px;margin-right:30px;margin-top:100px">

<form border=1>
Name: 	  <input type="text" name="name"/><br/>
Email:    <input type="text" name="email"/><br/>
Password: <input type=text" name="password"/><br/>
Confirm Password:<input type="password" name="confirmpassword"/><br/>
Mobile No:<input type="text" name="mobileno"/><br/>
<br/>
          <input type="submit"  value="create an account">
          </form>

</div>
</body>
</html>
