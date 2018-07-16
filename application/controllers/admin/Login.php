<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller {

	public function __construct(){
			parent::__construct();
		}

	protected $adminlogin = '/admin/';

	public function index(){
		if($this->aauth->is_loggedin()){
			redirect ('admin/dashboard');
		}else{
			$this->load->view($this->adminlogin.'login');
		}
	}
}