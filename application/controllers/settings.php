<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

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
		redirect('settings/crud');
	}
	
	public function crud()
	{
	    $this->grocery_crud->set_table('bks_settings');
        $output = $this->grocery_crud->render();
 
		$this->load->view('crud.php',$output);   
	}
	

}
