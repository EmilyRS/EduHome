<?php
class Frontend_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		$this->data['meta_title'] = config_item('site_name');
		$this->load->model('menu_m');
		$this->load->model('menu_element_m');
		
		$id_main_menu = $this->menu_m->get_main_nav_id();
		$this->data['main_menu']= $this->menu_element_m->get_nested($id_main_menu);
	}
}