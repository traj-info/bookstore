<?php

class Category extends DataMapper {

	var $has_one = array();


	var $has_many = array('item');

	var $validation = array(

	);

    function __construct($id = NULL)
	{
		parent::__construct($id);
    }


	function post_model_init($from_cache = FALSE)
	{
	}


}
