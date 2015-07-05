<?php
    class Userdata extends CI_Controller {

        public function __construct()
        {
             parent::__construct();
        }
       function world() {
            echo "User data saved!";
        }

        function user_test() {

            $this->load->model('User');

            $this->User->save_User('Name','Email','Mobile','Password');

       }
}

?>
