<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('admin_model', '', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
	}

	function index() {

		//This method will have the credentials validation
		$this -> load -> library('form_validation');

		$this -> form_validation -> set_rules('username', 'Username', 'trim|required|xss_clean');
		$this -> form_validation -> set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if ($this -> form_validation -> run() == FALSE) {
			//Field validation failed.  User redirected to login page
			redirect('/login', 'refresh');
		} else {
			$username = $this -> input -> post('username');
			$password = $this -> input -> post('password');

			$user = $this -> admin_model -> login($username, $password);

			if ($user) {
                $this->session->set_userdata('logged_in', true);
                session_start();
                $_SESSION['logged_in'] = 1;
                redirect('/');
			} else {
                redirect('/login');
			}

		}

	}

}
