<?php
class Admin_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		$this->data['meta_title'] = 'E_School CMS';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');
		$this->load->model('menu_m');
		$this->load->model('category_m');
		$this->load->model('item_m');
		
	    //Fetch all menus
		$this->data['menus'] = $this->menu_m->get();
		
	    //Fetch all categories with parent title foreach category
		$this->data['categories'] = $this->category_m->get();
		
	    //set category array
		$this->data['category_array']=$this->category_m->get_categories_array();
		
		 //Fetch all items
		$this->data['items'] = $this->item_m->get();
		
		// Login check
		$exception_uris = array(
			'admin/user/login', 
			'admin/user/logout'
		);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->user_m->loggedin() == FALSE) {
				redirect('/index.php/admin/user/login');
			}
		}
	
	}
}