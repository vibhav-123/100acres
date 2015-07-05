<html>
<head>Registration Form</head>
<body>

<div style="float:right; margin-left:300px;margin-right:30px;margin-top:100px">

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>
Name: 	  <input type="text" name="name"/><br/>
Email:    <input type="text" name="email"/><br/>
Password: <input type="text" name="password"/><br/>
Confirm Password:<input type="password" name="confirmpassword"/><br/>
Mobile No:<input type="text" name="mobileno"/><br/>

          <input type="submit"  value="create an account">
          </form>

</div>
</body>
</html>
