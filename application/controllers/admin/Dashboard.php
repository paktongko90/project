<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller{

	public function __construct(){
			parent::__construct();
		}
	protected $layout = '/admin/dashboard/';

	public function index(){
		if($this->aauth->is_loggedin()){
			$this->loadTemplate($this->layout.'index');
		}else{
			$this->sendToLoginPage();
		}
	}
}
?>