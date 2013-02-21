<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }	

	public function index()
	{
		redirect('users/crud');
	}
	
	public function crud()
	{
	    $this->grocery_crud->set_table('bks_users');
        $output = $this->grocery_crud->render();
 
		$this->load->view('crud.php',$output);   
	}
	

}
