<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {

	protected $welcome = '/public/welcome';

	public function index()
	{
		$this->load->view($this->welcome.'/index');
	}
}
