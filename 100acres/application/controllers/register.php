<?php

class register extends CI_Controller {

	function index()
	{
		$this->load->helper(array('register', 'url'));
        $this->load->library('form_validation');
		
        <h5>Username</h5>
        <?php echo form_error('username'); ?>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

        <h5>Email Address</h5>
        <?php echo form_error('email'); ?>
        <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

        <h5>Password</h5>
        <?php echo form_error('password'); ?>
        <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

        <h5>Password Confirm</h5>
        <?php echo form_error('confirmpassword'); ?>
        <input type="text" name="confirmpassword" value="<?php echo set_value('confirmpassword'); ?>" size="50" />
 
        <h5>Mobile Number</h5>
        <?php echo form_error('mobileno'); ?>
        <input type="text" name="mobileno" value="<?php echo set_value('mobileno'); ?>" size="50" />

        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->load->model('RegistartionData');
			$this->load->view('formsuccess');
		}
	}
}
?>
