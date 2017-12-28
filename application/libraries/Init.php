<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends Functions {

	var $redirect;
	var $assets;

	function __construct() {
		$this->redirect_url_save();
		$this->display_menu_links();
		$this->assets = base_url() . 'public/assets/';
	}

	function display_menu_links() {
		// $CI &= get_instance();
		// $CI->load->library('functions');


		// add more links here
		$this->add_menu('dashboard', false, base_url() . 'dashboard', 'fa-home', 'Dashboard', 'dashboard');
		$this->add_menu('enroll', false, base_url() . 'enroll', 'fa-plus', 'Enroll', 'enroll');
		$this->add_menu('users', false, base_url() . 'users', 'fa-user', 'User', 'users');
		$this->add_menu('logout', false, base_url() . '_login/do_logout', 'fa-power-off', 'Logout', '');
	}

	public function redirect_url_save() {
		$CI =& get_instance();

		$CI->load->library('session');
		$curr_class = $CI->router->fetch_class();
		if ($curr_class == '_login' || $curr_class == '_default' || $CI->session->userdata('user_cookie'))
			return; //echo $CI->router->fetch_class();// 
		$CI->session->set_userdata('redirect_here', urlencode((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"));
	}

	function default_view_vars() {
		$script_tags = array(
			array(
				'script_name' => 'jQuery',
				'src' => $this->assets . 'jquery/jquery-3.2.1.min.js',
				'type' => '',
				'attrs' => array()
			), array(
				'script_name' => 'jQuery Migrate Plugin',
				'src' => $this->assets . 'jquery/jquery-migrate-1.4.1.min.js',
				'type' => '',
				'attrs' => array()
			), array(
				'script_name' => 'jQuery UI',
				'src' => $this->assets . 'jquery-ui-custom/jquery-ui.min.js',
				'type' => '',
				'attrs' => array()
			)
		);
		$link_tags = array(
			array(
				'link_name' => 'W3.CSS',
				'rel' => '',
				'type' => '',
				'href' => $this->assets . 'w3-css/4-w3.css'
			),
			array(
				'link_name' => 'W3.CSS Theme',
				'rel' => '',
				'type' => '',
				'href' => $this->assets . 'css/theme.css'
			), array(
				'link_name' => 'Custom Stylings',
				'rel' => '',
				'type' => '',
				'href' => $this->assets . 'css/custom.css'
			), array(
				'link_name' => 'jQuery UI CSS',
				'rel' => '',
				'type' => '',
				'href' => $this->assets . 'jquery-ui-custom/jquery-ui.min.css'
			), array(
				'link_name' => 'FontAwesome 5',
				'rel' => '',
				'type' => '',
				'href' => $this->assets . 'fontawesome/web/css/fontawesome-all.min.css'
			)
		);
		return array('scripts' => $script_tags, 'links' => $link_tags);
	}
}