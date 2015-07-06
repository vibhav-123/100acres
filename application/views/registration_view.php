<div id="content">
<div class="signup_wrap">
<div class="signin_form">

  <?php echo form_open("user/login"); ?>
  
     
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value=""  />
      <label for="password">Password:</label>
      <input type="password" id="pass" name="pass" value="" />
      <?php if(isset($lasturl)){echo "<input type='hidden' value={$lasturl} name='lasturl'>";} ?>
      
      <?php echo form_submit(array('id' => 'signin_submit', 'value' => 'Sign in')); ?>
      
 <?php echo form_close(); ?>

      </div><!--<div class="signin_form">-->
      </div><!--<div class="signup_wrap">-->

    <div class="reg_form">
    <div class="form_title">Sign Up</div>
    <div class="form_sub_title">It's free and anyone can join</div>
  
    <!--<?php //echo validation_errors(//'<p class="error">'); ?> -->
    <?php echo form_open("user/registration"); ?>
      
    <?php echo form_label('Name :'); ?> <?php echo form_error('user_name','<span class="error">','</span>'); ?><br />
    <?php echo form_input(array('id' => 'user_name', 'name' => 'user_name','placeholder' => 'Enter your name')); ?><br />
    
    <?php echo form_label('Email :'); ?> <?php echo form_error('email_address','<span class="error">','</span>'); ?><br />
    <?php echo form_input(array('id' => 'email_address', 'name' => 'email_address','placeholder' => 'Enter a valid Email id')); ?><br />

    <?php echo form_label('Password :'); ?> <?php echo form_error('password','<span class="error">','</span>'); ?><br />
    <?php echo form_password(array('id' => 'password', 'name' => 'password','placeholder' => 'Password')); ?><br />

    <?php echo form_label('Confirm Password :'); ?> <?php echo form_error('con_password','<span class="error">','</span>'); ?><br />
    <?php echo form_password(array('id' => 'con_password', 'name' => 'con_password','placeholder' => 'Retype your password')); ?><br />

    <?php echo form_submit(array('id' => 'submit', 'value' => 'Create account')); ?>
  
    <?php echo form_close(); ?>
  
    </div><!--<div class="reg_form">-->
    </div><!--<div id="content">-->
