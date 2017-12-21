<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Check_session {
    public function __construct() {
            
    }

    public function __get($property) {
        if ( ! property_exists(get_instance(), $property)) {
                show_error('property: <strong>' . $property . '</strong> not exist.');
        }
        return get_instance()->$property;
    }
    public function validate() {

        if (in_array($this->router->class, array("login")))//login is a sample login controller {
            return;

        if (! $this->session->userdata('user_cookie')) 
            header('Location: ' . base_url('login') . '?ref=' . $this->session->userdata('redirect_here')) ;//. urldecode($this->session->userdata('redirect_here')));
        // else if ($this->session->userdata('user_cookie') && $this->session->userdata('redirect_here') != '') {
        //     header('Location: ' .  urldecode($this->session->userdata('redirect_here')));
        //     $this->session->set_userdata('redirect_here', '');
        // } else{
        //     header('Location: ' . base_url('dashboard'));
        //     $this->session->set_userdata('redirect_here', '');
        // }
        // else if ($this->session->userdata('user_cookie')) )

    }
}