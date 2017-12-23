<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends Functions {

	var $redirect;

	function __construct() {
		$this->redirect_url_save();
		// $this->check_login();

		$this->display_menu_links();
		// exit(var_dump($_SERVER));
	}

	function display_menu_links() {
		// $CI &= get_instance();
		// $CI->load->library('functions');


		// add more links here
		$this->add_menu('dashboard', false, base_url() . 'dashboard', 'fa-home', 'Dashboard', 'dashboard');
		$this->add_menu('enroll', false, base_url() . 'enroll', 'fa-plus', 'Enroll', 'enroll');
	}


	public function redirect_url_save() {
		$CI =& get_instance();

		$CI->load->library('session');
		$CI->session->set_userdata('redirect_here', urlencode((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"));
		// $this->redirect = urlencode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	}

	// public function check_login() {
	// 	$CI =& get_instance();
	// 	$CI->load->library('session');
	// 	$this->redirect = urlencode((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
	// 	// var_dump($CI->session->userdata('redirect_here'));
	// 	// var_dump($CI->session->userdata('user_cookie'));

	// 	if ($CI->session->userdata('user_cookie') == NULL) {
	// 		header('Location: ' . base_url('login') . '?redirect=' . $this->redirect);
	// 	} else {
	// 		header('Location: ' . $this->redirect)	;//$CI->session->userdata('redirect_here');
	// 	}
	// }

}