<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		// get settings
		$s = new Setting();
		$s->where('param', 'bookstore_title')->get();

		$data['page_title'] = $s->value;

		// get categories and their items
		$c = new Category();
		$c->order_by('title', 'asc')->get();
		
		$data['cont_categories'] = $c->result_count();
		if($data['cont_categories'] > 0)
		{
			$data['categories'] = $c;
		}
		else
		{
			$data['items'] = 'Nenhum item encontrado.';
		}

		$this->load->view('geral_index', $data);
	}

}
