<?php

/**
 * 
 * */
class Login extends CI_Controller
{
    public function index()
    {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        
        echo $email.'  '.$password;
        
        $data = array(
            'email' => $email,
            'id' => 0,
            'login' => true
            );
            
            $this->session->set_userdata($data);
            
            echo $this->session->userdata('id');
    }
}

?>