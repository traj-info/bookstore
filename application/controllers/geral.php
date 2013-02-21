<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		// get settings
		$s = new Setting();
		$s->get_by_param('bookstore_title')->get();
		$data['title'] = $s->value;
				
		// get categories and their items
		$c = new Category();
		$c->order_by('title', 'asc')->get();
		
		$data['cont_categories'] = $c->result_count();
		if($data['cont_categories'] > 0)
		{

			echo "<pre>";
			foreach($c as $cat)
			{
				$cat->item->get();
			
				echo "<hr />";
				echo $cat->title;
				
				if($cat->item->result_count() > 0)
				{
					foreach($cat->item as $it)
					{
						echo $it->title . "<br>";
					}
				}
			}
			echo "</pre>";
			$data['categories'] = $c;
		}
		else
		{
			$data['items'] = 'Nenhum item encontrado.';
		}
		
	
		$this->load->view('geral_index', $data);
	}
	
	
}
