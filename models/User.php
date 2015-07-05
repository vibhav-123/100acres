<?php
       class User extends CI_Model {

            function __construct()
            {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();
            }

             function save_User($Name,$Email,$Mobile,$Password) 
              {

                $this->Name   = $Name; 
                $this->Email = $Email;
                $this->Mobile    = $Mobile;
                $this->Password   = $Password;
                $this->db->insert('User', $this);
              }

    }
?>