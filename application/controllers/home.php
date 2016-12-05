<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
 
function __construct()
{
   parent::__construct();
   $this->load->library('session');
   $this->load->helper('url');
}
 
function index()
{

   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('pages/home', $data);
   }
   else
   {
     //If no session, redirect to login page
     $this->load->view('pages/home');
   }
}
 
function logout()
{
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('pages/home', 'refresh');
}
 
}
 
?>