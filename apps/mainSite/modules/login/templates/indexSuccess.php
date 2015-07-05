<!-- Login UI -->
<?php include_partial('global/header');
include_partial('global/logout');
?>

<form method="POST">
<center><div id="login"><center><h1>Enter your login Details:</h1></center>
  <h3>Username: <input type="text" name="name" id="name" align="center"></br>
  <br>Password: <input type="password" name="p" id="p" align="right"></br></h3>
  <br><input type="hidden" name="act" id="act" value="<?php echo $act ?>">
  <br><input type="submit" name='login_btn' id="login_btn" value="Login">
 
</div>
</center>
  </form>



