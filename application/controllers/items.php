<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

	public function index()
	{
		$this->load->view('geral_index');
	}
}