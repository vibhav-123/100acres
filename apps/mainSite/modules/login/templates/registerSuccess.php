<!-- Register UI -->
<?php include_partial('global/header');
function checkMethod()
{
if(isset($_POST['submit'])){}
else
{echo "<script type='text/javascript'>alert('Invalid method used.finall.'); </script>";}
}
?>

<form method="POST" action="" onsubmit="return checkForm(this);"> <center><div class="reg" id="reg">
   <h1 align="center" >Registration Form</h1>
   <p align="center">Enter your details</p>



	  <p>Username        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username">
          </p> 
          <p>Password        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"     name="p">
          </p>
          <p>Confirm Password: <input type="password" name="pwd2">
          </p>                                   	    
          <p>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="email" name="email">
          </p>
          <p>Contact No      : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="contact">
          </p>
          <p><input type="submit" name="submit" value="Register" onclick="checkMethod()">
          </p> </div>
     </form>
  
</center>


