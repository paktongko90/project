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

	public function action(){
			if($this->aauth->login($this->input->post('username'),$this->input->post('password'),TRUE)){
				redirect('admin/dashboard');
			}else{
				redirect('admin/login');
			}
	}

	public function logout(){
			if($this->aauth->is_loggedin()){
				$this->aauth->logout();
				redirect('admin/login','refresh');
			}else{
				redirect('admin/login');
			}
	}
}