<!-- Email Page UI -->
<?php include_partial('global/header');?>
<?php include_partial('global/logout');?>
<form method = "POST" onsubmit="return checkEmail(this)" action="/mainSite_dev.php/search/emailPosted?pid=<?php echo $pid ?>">

<div id="email">

<h1 align="center" >Email</h1>

<ol>
*To:<font color="black"> <input type="text" name="to" size="46" value="<?php echo $email ?>"></font>
<br><br>
*From:<font color="black"> <input type="text" name="from" size="44"></font>
<br><br>
*Subject:<font color="black"> <input type="text" name="subject" size="43" value="Interest in your property posted at 100acres"></font>
<br><br>
*Message:<font color="black"><textarea name="message" rows="5" cols="50"></textarea></font>
<br><br>

<p align="center" >
<input type="submit" value="send-mail">
</p>

</div>
</form>
